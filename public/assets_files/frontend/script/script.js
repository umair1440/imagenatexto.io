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

            var template = `<div class="result_card">
            <div class="result_data result_${key}">
                <div>
                    <img src="${imageData}" alt="">
                </div>
                <div class="shimer_effect">
                    <div class="shimer_wrapper">
                        <span class="stroke animate"></span>
                        <span class="stroke animate"></span>
                        <span class="stroke animate"></span>
                        <span class="stroke animate"></span>
                    </div>
                </div>
                <textarea style="display:none" name="" id="" cols="30" rows="10">Processing...</textarea>
            </div>
            <div class="result_card_options">
                <button>
                    <img src="${window.location.origin}/assets_files/frontend/images/copy-icon.svg" alt="">
                </button>
                <button>
                    <img src="${window.location.origin}/assets_files/frontend/images/download-icon.svg" alt="">
                </button>
                <button>
                    <img src="${window.location.origin}/assets_files/frontend/images/expand-icon.svg" alt="">
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
            if (result.status === "fulfilled") {
            } else {
            }
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
                        <p>${file.name}</p>
                        <span>${(file.size / (1024 * 1024)).toFixed(2)}MB</span>
                    </div>
                </div>
                <button>
                    <img src="${window.location.origin}/assets_files/frontend/images/close-icon.svg" alt="">
                </button>
            </div>`;
                    $(".image_card_wrapper").prepend(image);
                }
                reader.readAsDataURL(file);
            }, 100 * key);
        });
    }, 100);
})
