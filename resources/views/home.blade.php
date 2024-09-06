<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Image to text</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets_files/frontend/css/style.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="header_section">
        <h1>Image to text</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dicta impedit, ipsum amet modi fuga, eum
            error numquam ab asperiores vel laboriosam officia reiciendis repellendus voluptatem nulla iste quas
            tenetur?</p>
    </div>
    <section class="tool_wrapper">
        <div class="tool">
            <div class="input_sec">
                <label for="uploadFile">
                    <div class="upload_label">
                        <img src="{{ asset('assets_files/frontend/images/upload-icon.svg') }}" alt="">
                        <span>Upload Your File</span>
                    </div>
                    <input type="file" name="file" hidden id="uploadFile">
                </label>
            </div>
            <div class="output_sec">
                <textarea name="" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <button class="convert">Convert</button>
    </section>
    <script src="{{ asset('assets_files/frontend/script/script.js') }}"></script>
</body>

</html>
