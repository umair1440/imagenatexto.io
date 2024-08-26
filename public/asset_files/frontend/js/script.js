$(document).ready(function () {
    $("#humanize").on('click', function () {
        $('.loader_wrapper').removeClass('d-none');
        var input = $("#input").val();
        console.log(input);
        input = input.replaceAll(/(\r\n|\r|\n)/g, "<br>")
        console.log(input);
        $("#ouput").text('');
        if (input == '') {
            alert('content empty');
            return;
        }
        var mode = $(".modes button.active").data('mode');
        $.ajax({
            type: "POST",
            url: rephreaseURL,
            data: {
                text: input,
                mode: mode,
                _token: $('meta[name="_token"]').attr('content')
            },
            success: function (response) {
                $('#output').removeClass('hide_mini');
                $('.loader_wrapper').addClass('d-none');
                $(".loader-wrapper").addClass('d-none');
                $(".outputSection").removeClass('hide-output');
                response = response.replaceAll('\\n', '<br>');
                response = response.replaceAll('\\n', '<br>');
                response = response.replaceAll('\\n', '<br>');
                response = response.replaceAll('\\n', 'br>');
                $("#output").html(response);
                const words = $("#output").text().split(/\s+/).filter(word => word !== '');
            }
        });
    });

    $('.modes button').on('click', function (){
        $(this).addClass('active').siblings().removeClass('active');
    });


    $(".menu_icon").on('click', function () {
        $(".menu_links").toggleClass('show');
    });

    $(".active_language").on('click', () => $(".langauge_options").removeClass('d-none'));

    $(".langauge_options p").on('click' , function(){
        $(".active_language span").text($(this).text())
        $(".active_language div img").attr('src', $(this).find('img').attr('src'))
        $(".langauge_options").addClass('d-none');
    });

});

