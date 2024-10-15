var uploadedImagesList = [];
var validImageTypes = [
    "image/jpeg", // .jpg, .jpeg, .jpe, .jfif, .jfi
    "image/png", // .png
    "image/gif", // .gif
    "image/bmp", // .bmp
    "image/webp", // .webp
    "image/tiff", // .tiff, .tif
    "", // heic
];
var maxUploadFile = 10;

function getLimitChar(inputString, numCharacters) {
    return inputString.slice(0, numCharacters);
}

$(document).ready(function () {
    $(".convert_all").on('click', function () {
        $(".convert").text('converting...');
        if (uploadedImagesList.length == 0) {
            console.error("No file selected.");
            $(".output_sec").addClass('d-none');
            $(".input_sec").animate({
                width: "100%"
            }, 100);
            return;
        }

        $(".input_sec, .output_sec").addClass('d-none');
        $(".output_results").removeClass('d-none')
        let uploadPromises = [];

        Object.values(uploadedImagesList).forEach((file, key) => {
            var reader = new FileReader();
            reader.onloadend = function () {
                var imageData = reader.result;
                var imgName = file.name;
                var imgNameArr = (imgName).split('.');
                var imgExt = imgNameArr[imgNameArr.length - 1];
                imgName = getLimitChar(imgNameArr[0], 5) + '.' + imgExt;
                var template = `<div class="result_card custom-scrollbar">
        <div class="result_data result_${key}">
            <div class="image__wrapper">
                <img src="${imageData}" alt="">
                <span>${imgName}</span>
            </div>
            <div class="shimer_effect">
                <div class="shimer_wrapper">
                    <span class="stroke animate"></span>
                    <span class="stroke animate"></span>
                    <span class="stroke animate"></span>
                    <span class="stroke animate"></span>
                </div>
            </div>
            <textarea style="display:none" class="custom-scrollbar" >Processing...</textarea>
        </div>
        <div class="result_card_options">
            <button class="copy__btn">
                <img src="${window.location.origin}/asset_files/frontend/images/copy-icon.svg?v1.0" alt="">
            </button>
            <button class="download__btn">
                <img src="${window.location.origin}/asset_files/frontend/images/download-icon.svg?v1.0" alt="">
            </button>
            <button class="expand__btn">
                <img src="${window.location.origin}/asset_files/frontend/images/expand-icon.svg?v1.0" alt="">
            </button>
        </div>
    </div>`;

                $(".output_results").prepend(template);

                // Push each AJAX call into the promises array
                let uploadPromise = $.ajax({
                    url: '/upload',
                    type: 'POST',
                    data: {
                        image: imageData,
                        key: key,
                        name: file.name,
                        _token: $('meta[name="_token"]').attr('content')
                    }
                }).then(function (response) {
                    $(`.result_${response.key} textarea`).val((response.text).trim()).css('display', 'block');
                    $(`.result_${response.key} .shimer_effect`).addClass('d-none');
                    // $('.result_container').append(template);
                }).catch(function (error) {
                    console.error('Error:', error);
                });

                uploadPromises.push(uploadPromise);
            };

            reader.readAsDataURL(file);
        });

        // Handle all promises individually and show results as they resolve
        Promise.allSettled(uploadPromises).then(results => {
            results.forEach((result, index) => {
                if (result.status === "fulfilled") {} else {}
            });
        });

    });


    $(document).on('click', '.copy__btn', function (event) {
        event.preventDefault();
        event.stopPropagation();
        $(this).addClass('active');
        setTimeout(() => {
            $(this).removeClass('active');
        }, 1000);
        var container_data = $(this).closest('.result_card').find('textarea').val();
        navigator.clipboard.writeText(container_data).then(function () {}).catch(function (error) {
            console.error("Failed to copy text: ", error);
        });
    });

    $(document).on('click', '.download__btn', function (event) {
        event.preventDefault();
        event.stopPropagation();
        var textContent = $(this).closest('.result_card').find('textarea').val();
        $.ajax({
            type: "POST",
            url: window.location.origin + '/generateDoc',
            data: {
                text: textContent,
                _token: $('meta[name="_token"]').attr('content')
            },
            success: function (data) {
                var blob = new Blob([data]);
                var link = document.createElement('a');
                link.href = window.URL.createObjectURL(blob);
                link.download = "result.doc";
                link.click();
            }
        });
    });

    $(document).on('click', '.expand__btn', function (event) {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).closest('.result_card').removeClass('active');
            $(this).closest('.result_card').find('textarea').animate({
                height: '105px'
            });
        } else {
            $(this).closest('.result_card').find('textarea').animate({
                height: $(this).closest('.result_card').find('textarea')[0].scrollHeight + 'px'
            });
            $(this).addClass('active');
            $(this).closest('.result_card').addClass('active');
        }
    });

    $(".clear_all").on('click', function () {
        $(".image_card_wrapper").html('');
        $(".output_sec").addClass('d-none');
        $(".input_sec").animate({
            width: "100%"
        }, 100);
    });

    $("#browse_files").on('click', function () {
        $(".uploadSection").click();
    });




});


/* add image code */
$("#uploadFile").on('change', function () {
    uploadFilesData($(this)[0].files);
});


function uploadFilesData2(imagesList) {
    $(".output_sec").removeClass('d-none');
    $(".input_sec").animate({
        width: "200px"
    }, 100);

    setTimeout(() => {
        var uploadedImagesList = imagesList;
        Object.values(uploadedImagesList).forEach((file, key) => {
            setTimeout(() => {
                var reader = new FileReader();
                reader.onloadend = function (e) {
                    var image = `<div class="image_card">
            <div>
                <div>
                    <img src="${e.currentTarget.result}" alt="">
                </div>
                <div>
                    <p>${getLimitChar(file.name, 20)}</p>
                    <span>${(file.size / (1024 * 1024)).toFixed(2)}MB</span>
                </div>
            </div>
            <button>
                <img src="${window.location.origin}/asset_files/frontend/images/close-icon.svg" alt="">
            </button>
        </div>`;
                    $(".image_card_wrapper").prepend(image);
                }
                reader.readAsDataURL(file);
            }, 100 * key);
        });
    }, 100);
}

/* by paste */
window.addEventListener("paste", processEvent);

function processEvent(e) {
    if (!$(".output_results").hasClass("d-none")) return;
    if (e.clipboardData.items.length < 1) return;
    for (var i = 0; i < e.clipboardData.items.length; i++) {
        var clipboardItem = e.clipboardData.items[i];
        var type = clipboardItem.type;
        if (type.indexOf("image") != -1) {
            uploadFilesData([clipboardItem.getAsFile()]);
        } else {
            return false;
        }
    }
}



/* by drag and drop */

function _ondrop(e) {
    e.preventDefault();
    uploadFilesData(e.dataTransfer.files);
    $(".upload_label").removeClass("droppingFile");
}

function _ondragenter(e) {
    e.preventDefault();
    $(".upload_label").addClass("droppingFile");
}

function _ondragleave(e) {
    e.preventDefault();
    $(".upload_label").removeClass("droppingFile");
}

function _ondragover(e) {
    e.preventDefault();
    $(".upload_label").addClass("droppingFile");
}
var dropArea = document.querySelector('.uploadSection');

// Add the event listeners to the target element
dropArea.addEventListener('drop', _ondrop);
dropArea.addEventListener('dragenter', _ondragenter);
dropArea.addEventListener('dragleave', _ondragleave);
dropArea.addEventListener('dragover', _ondragover)



var uploadFileCount = 0;
var maxFileErrorShown = false;

function uploadFilesData(files) {

    $(".output_sec").removeClass('d-none');
    $(".input_sec").animate({
        width: "200px"
    }, 100);

    // $("center").removeClass("d-none");

    // var maxUploadLimit = maxUploadFile;
    // const premiumUser = isPremium == 1;
    // if (premiumUser == 1) {
    //     maxUploadLimit = 50;
    // }

    // document.getElementsByClassName("prevbox__wrapper")[0].style.display =
    //     "block";
    // $(".initials__insert__div").addClass("activate");

    var missFileToUpload = 0;
    convertingFiles = true;
    Object.values(files).forEach(async (image, key) => {
        if (!validImageTypes.includes(image.type)) {
            showAlertBox("Error", `File not supported: ${image.name}`);
            return;
        }


        if (uploadedImagesList.length >= maxUploadFile) {
            if (!maxFileErrorShown) {
                maxFileErrorShown = true;
                alert('Max File Limit is 10');
            }
            return;
        }
        maxFileErrorShown = false;
        // if (uploadFileCount >= maxUploadLimit) {
        //     $("#images__count").text(maxUploadLimit);
        //     $(".premium__plans__popup").removeClass("d-none");
        //     $(".custom__popup > div > h3").text("File Limit Exceed");
        //     $(".custom__popup > div > p").text(
        //         `${
        //             premiumUser == 1 ? "Premium" : "Free"
        //         } user can upload upto ${maxUploadLimit} images`
        //     );
        //     $(".custom__popup__image img").attr(
        //         "src",
        //         window.location.origin +
        //         "/web_assets/frontend/images/new-icon/limit-exceed-image.svg"
        //     );
        //     return;
        // }

        // if (fileSizeInMb > maxFileSize && premiumUser != 1) {
        //     $("#images__count").text(key);
        //     $(".premium__plans__popup").removeClass("d-none");
        //     $(".custom__popup > div > h3").text("File Size Exceed");
        //     $(".custom__popup > div > p").text(
        //         `${
        //             premiumUser == 1 ? "Premium" : "Free"
        //         } user can upload upto ${premiumUser == 1 ? 20 : 5}MB file size`
        //     );
        //     $(".custom__popup__image img").attr(
        //         "src",
        //         window.location.origin +
        //         "/web_assets/frontend/images/new-icon/limit-size-image.svg"
        //     );
        //     missFileToUpload = missFileToUpload + 1;
        //     return;
        // }

        key = uploadFileCount;
        // key = key - missFileToUpload;
        var reader = new FileReader();
        reader.onload = function (e) {
            var customImage = `<div class="image_card image_card_${key}" data-index="${key}">
            <div>
                <div>
                    <img src="${e.currentTarget.result}" alt="">
                </div>
                <div>
                    <p>${getLimitChar(image.name, 20)}</p>
                    <span>${(image.size / (1024 * 1024)).toFixed(2)}MB</span>
                </div>
            </div>
            <button class="remove_image" data-size='${image.size}'>
                <img src="${window.location.origin}/asset_files/frontend/images/close-icon.svg" alt="">
            </button>
        </div>`;


            setTimeout(() => {
                $(".image_card_wrapper").prepend(customImage);
            }, key);
        };
        reader.readAsDataURL(image);
        uploadFileCount = uploadFileCount + 1;
        convertingFiles = true;
        if (image.name.toLowerCase().endsWith('.heic')) {
            try {
                const convertedBlob = await heic2any({
                    blob: image
                });
                image = new File([convertedBlob], image.name, {
                    type: 'image/jpeg'
                });
            } catch (error) {}
        }
        uploadedImagesList.push(image);
        convertingFiles = false;
    });
    $("#images__count").text(uploadFileCount);
}


$(document).on("click", ".remove_image", function () {
    // var premiumUser = isPremium == 1;
    // if (!premiumUser && uploadFileCount <= maxUploadFile) {
    //     $(".maxFileUploaded").removeClass("d-none");
    //     $(".uploadMaxFiles").addClass("d-none");
    // }
    // uploadFileCount = uploadFileCount - 1;

    $(this).closest(".image_card").remove();
    var imageSize = $(this).data("size");
    var latestUploadedImages = [];

    uploadedImagesList.forEach((element) => {
        if (element.size != imageSize) latestUploadedImages.push(element);
    });
    uploadedImagesList = latestUploadedImages;
    if (uploadedImagesList.length == 0) {
        $(".output_sec").addClass('d-none');
        $(".input_sec").animate({
            width: "100%"
        }, 100);
    }
    uploadFileCount = uploadedImagesList.length;
});
