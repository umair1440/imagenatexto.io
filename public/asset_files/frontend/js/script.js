$(document).ready(function () {
function getLimitChar(inputString, numCharacters) {
    return inputString.slice(0, numCharacters);
}
    $(".convert_all").on('click', function () {
        var uploadedImages = $('#uploadFile')[0].files;
        $(".convert").text('converting...');
        if (!uploadedImages) {
            console.error("No file selected.");
            return;
        }

        $(".input_sec, .output_sec").addClass('d-none');
        $(".output_results").removeClass('d-none')
        let uploadPromises = [];

        Object.values(uploadedImages).forEach((file, key) => {
            var reader = new FileReader();
            reader.onloadend = function () {
                var imageData = reader.result;
                var imgName = file.name;
                var imgNameArr = (imgName).split('.');
                var imgExt = imgNameArr[imgNameArr.length - 1];
                imgName = getLimitChar(imgNameArr[0], 5) +'.'+ imgExt;
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


    $("#uploadFile").on('change', function () {
        // $(".input_sec").removeClass('expand_input');
        $(".output_sec").removeClass('d-none');
        $(".input_sec").animate({
            width: "200px"
        }, 100);

        setTimeout(() => {
            var uploadedImages = $(this)[0].files;
            Object.values(uploadedImages).forEach((file, key) => {
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

    $(".clear_all").on('click', function(){
        $(".image_card_wrapper").html('');
        $(".output_sec").addClass('d-none');
        $(".input_sec").animate({
            width: "100%"
        }, 100);
    });

});
