<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Image to text</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets_files/frontend/css/style.css?v1.0') }}">
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
            <div class="input_sec expand_input">
                <label for="uploadFile" class="uploadSection">
                    <div class="upload_label">
                        <img src="{{ asset('assets_files/frontend/images/upload-icon.svg') }}" alt="">
                        <span class="drop_text">Drop, Upload or Paste image</span>
                        <span class="supported_files_text">Supported formates: JPG, PNG, GIF, JFIF (JPEG), HEIC,
                            PDF</span>
                    </div>
                    <input type="file" accept=".jpg, .png, .jpeg" multiple name="file" hidden id="uploadFile">
                </label>
            </div>
            <div class="output_sec d-none">
                <div class="image_card_wrapper">
                </div>
                <div class="output__options">
                    <button class="clear_all">Clear All</button>
                    <button class="convert_all">Convert</button>
                </div>
            </div>
            <div class="output_results d-none">
                {{-- <div class=""> --}}
                    {{-- <div class="result_card">
                        <div class="result_data">
                            <div>
                                <img src="{{ asset('uploads/image.png') }}" alt="">
                            </div>
                            <textarea name="" id="" cols="30" rows="10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi animi error minima esse culpa accusantium quasi, harum totam eveniet? Assumenda?</textarea>
                        </div>
                        <div class="result_card_options">
                            <button>
                                <img src="{{ asset('/assets_files/frontend/images/close-icon.svg') }}" alt="">
                            </button>
                            <button>
                                <img src="{{ asset('/assets_files/frontend/images/close-icon.svg') }}" alt="">
                            </button>
                        </div>
                    </div> --}}
                {{-- </div> --}}
            </div>
        </div>
        {{-- <button class="convert">Convert</button> --}}
    </section>
    <script src="{{ asset('assets_files/frontend/script/script.js?v1.0') }}"></script>
</body>

</html>
