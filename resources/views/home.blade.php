<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Image to text</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets_files/frontend/css/style.css?v1.2') }}">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <meta name="robots" content="noindex , nofollow" />

</head>

<body>
    <div class="container navigation px-10 bg-white mx-auto">
        <header class="flex items-center justify-between py-3" style="background-color: #fff !important">
            <!-- logo - start -->
            <a href="/" class="inline-flex items-center gap-2.5  font-bold text-[#000] webiste_logo site_name"
                aria-label="logo">
                <img width="28px" src="https://humanizar-texto.org/asset_files/frontend/images/logo-icon.png?v1.0"
                    alt="Humanizar Texto">
                <span>Imagen a Texto</span>
            </a>
            <div
                class="-ml-8 hidden flex-col gap-5 items-center sm:flex-row sm:justify-center lg:flex lg:justify-start menu_links">
                <a href="#">Imagen a Texto</a>
                <a href="#">Blog</a>
                <a href="#">Contacto</a>
            </div>

            <button type="button"
                class="menu_icon inline-flex items-center gap-2  px-2.5 py-2 text-sm font-semibold text-gray-500  hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base lg:hidden">
                <img class="w-5 h-5" src="https://humanizar-texto.org/asset_files/frontend/images/nav-icon.svg?v1.1"
                    alt="">
            </button>
            <!-- buttons - end -->
        </header>
    </div>
    <section class="bg_wrapper bg-gradient-to-r from-violet-50 to-pink-50"></section>
    <div class="header_section">
        <h1>Imagen a Texto</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dicta impedit, ipsum amet modi fuga,
            eum
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
                        <div class="browse_sec">
                            <button>Browse Files</button>
                            <button><img width="20px" src="{{ asset('assets_files/frontend/images/link-icon.svg') }}"
                                    alt=""></button>
                        </div>
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
            </div>
        </div>
        <p>
            *Your privacy is protected! No data is transmitted or stored.
        </p>
    </section>

    <section>

    </section>

    <script src="{{ asset('assets_files/frontend/script/script.js?v1.1') }}"></script>
</body>

</html>
