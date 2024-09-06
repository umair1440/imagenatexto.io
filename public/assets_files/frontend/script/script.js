$(".convert").on('click', function () {
    var fileInput = $('#uploadFile')[0].files[0];

    $(".convert").text('converting...');
    // Check if a file is selected
    if (!fileInput) {
        console.error("No file selected.");
        return; // Exit if no file is selected
    }

    // Create a FileReader to convert the file to Base64
    var reader = new FileReader();

    // Set up the onloadend event to send the Base64 data
    reader.onloadend = function () {
        var imageData = reader.result; // Base64 string
        //    $.ajaxSetup({
        //        headers: {
        //            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Correct header name
        //        }
        //    });

        // Send the Base64 image data and CSRF token via AJAX
        $.ajax({
            url: '/upload', // URL of your Laravel route handling the upload
            type: 'POST',
            data: {
                image: imageData, // Base64 data
                _token: $('meta[name="_token"]').attr('content') // CSRF token
            },
            success: function (response) {
                $(".convert").text('convert');
                $(".output_sec textarea").val(response);
            },
            error: function (xhr, status, error) {
                console.log(error); // Handle error response
            }
        });
    };

    // Read the file as a data URL (Base64 string)
    reader.readAsDataURL(fileInput);
});
