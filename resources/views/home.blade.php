<!DOCTYPE html>
<html lang="en" class="custom-scrollbar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}">
    <title>Image to text</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('assets_files/frontend/css/style.css?v1.6') }}">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <meta name="robots" content="noindex , nofollow" />

</head>

<body>
    <div class=" bg-white mx-auto p-2 shadow">
        <header class=" navigation px-10 flex items-center justify-between py-1" style="background-color: #fff !important">
            <!-- logo - start -->
            <a href="/" class="inline-flex items-center gap-2.5  font-bold text-[#000] webiste_logo site_name"
                aria-label="logo">
                <img width="24px" src="{{ asset('assets_files/frontend/images/logo-icon.svg') }}"
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
    <section class="bg_wrapper"></section>

    <section class="main__wrapper mt-[20px]">
        <div class="header_section mt-[10px]">
            <h1>Imagen a Texto</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo dicta impedit, ipsum amet modi fuga,
                eum
                error numquam ab asperiores vel laboriosam officia reiciendis repellendus voluptatem nulla iste quas
                tenetur?</p>
        </div>
        <div class="shape"></div>
        <div class="tool_wrapper">
            <div class="tool">
                <div class="input_sec expand_input">
                    <label for="uploadFile" class="uploadSection">
                        <div class="upload_label">
                            <img src="{{ asset('assets_files/frontend/images/upload-icon.svg?v1.0') }}" alt="">
                            <span class="drop_text">Drop, Upload or Paste image</span>
                            <span class="supported_files_text">Supported formates: JPG, PNG, GIF, JFIF (JPEG), HEIC,
                                PDF</span>
                            <div class="browse_sec">
                                <button>Browse Files</button>
                                <button><img width="20px"
                                        src="{{ asset('assets_files/frontend/images/link-icon.svg') }}"
                                        alt=""></button>
                            </div>
                        </div>
                        <input type="file" accept=".jpg, .png, .jpeg, .svg" multiple name="file" hidden
                            id="uploadFile">
                    </label>
                </div>
                <div class="output_sec d-none">
                    <div class="image_card_wrapper custom-scrollbar">
                    </div>
                    <div class="output__options">
                        <button class="clear_all">Clear All</button>
                        <button class="convert_all">Convert</button>
                    </div>
                </div>
                <div class="output_results custom-scrollbar d-none">
                </div>
            </div>
            <p>
                *Your privacy is protected! No data is transmitted or stored.
            </p>
        </div>
    </section>

    <section class="mt-20 max-w-[1280px] w-[80vw] m-auto uses">
        <div class="header_section">
            <h2>How to Use Our Image to text convertor?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet
                consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="pt-10 flex gap-x-10">
            <div class="bg-white px-4 py-2 rounded-lg">
                <img class="max-w-[350px]" src="{{ asset('assets_files/frontend/images/use-case-1.png') }}"
                    alt="">
                <img class="max-w-[350px]" src="{{ asset('assets_files/frontend/images/use-case-2.png') }}"
                    alt="">
                <img class="max-w-[350px]" src="{{ asset('assets_files/frontend/images/use-case-3.png') }}"
                    alt="">
                <img class="max-w-[350px]" src="{{ asset('assets_files/frontend/images/use-case-4.png') }}"
                    alt="">
            </div>
            <div class="grid grid-cols-2 gap-5 mt-5">
                <div class="p-5 border-r border-b border-gray-300 rounded-lg bg-white">
                    <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-white rounded-[100px] px-5 py-1">Upload Files
                    </h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur dolor
                        molestiae quis laudantium praesentium impedit veniam iusto?</p>
                </div>
                <div class="p-5  border-l border-b border-gray-300 rounded-lg bg-white">
                    <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-white rounded-[100px] px-5 py-1">Click On
                        Convert</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur dolor
                        molestiae quis laudantium praesentium impedit veniam iusto?</p>
                </div>
                <div class="p-5 border-t border-r border-gray-300 rounded-lg bg-white">
                    <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-white rounded-[100px] px-5 py-1">Optical
                        Recognation Process</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur dolor
                        molestiae quis laudantium praesentium impedit veniam iusto?</p>
                </div>
                <div class="p-5 border-t border-l border-gray-300 rounded-lg bg-white">
                    <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-white rounded-[100px] px-5 py-1">Result With
                        Options</h3>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur dolor
                        molestiae quis laudantium praesentium impedit veniam iusto?</p>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-20 max-w-[1280px] w-[80vw] m-auto">
        <div class="header_section">
            <h2>Key features of Image to text</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet
                consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="max-w-[70vw] m-auto mt-5">
            <div class="feature_card bg-white transition  flex gap-x-5 p-2 rounded-lg items-center">
                <div>
                    1
                </div>
                <div>
                    <div>
                        <img src="" alt="">
                        <h3 class="">Low-resolution image extractor:</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum odit nisi veritatis
                        repellendus, provident voluptatum officiis praesentium dignissimos quae!lorem5 Lorem ipsum dolor
                        sit amet.</p>
                </div>
            </div>
            <div class="feature_card bg-white transition  flex gap-x-5 p-2 rounded-lg items-center">
                <div>
                    2
                </div>
                <div>
                    <div>
                        <img src="" alt="">
                        <h3 class="">Detect mathematical syntax:</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum odit nisi veritatis
                        repellendus, provident voluptatum officiis praesentium dignissimos quae!lorem5 Lorem ipsum dolor
                        sit amet.</p>
                </div>
            </div>
            <div class="feature_card bg-white transition  flex gap-x-5 p-2 rounded-lg items-center">
                <div>
                    3
                </div>
                <div>
                    <div>
                        <img src="" alt="">
                        <h3 class="">Free to use:</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum odit nisi veritatis
                        repellendus, provident voluptatum officiis praesentium dignissimos quae!lorem5 Lorem ipsum dolor
                        sit amet.</p>
                </div>
            </div>
            <div class="feature_card bg-white transition  flex gap-x-5 p-2 rounded-lg items-center">
                <div>
                    4
                </div>
                <div>
                    <div>
                        <img src="" alt="">
                        <h3 class="">Handles multiple languages:</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum odit nisi veritatis
                        repellendus, provident voluptatum officiis praesentium dignissimos quae!lorem5 Lorem ipsum dolor
                        sit amet.</p>
                </div>
            </div>
            <div class="feature_card bg-white transition  flex gap-x-5 p-2 rounded-lg items-center">
                <div>
                    5
                </div>
                <div>
                    <div>
                        <img src="" alt="">
                        <h3 class="">Support multiple file formats</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum odit nisi veritatis
                        repellendus, provident voluptatum officiis praesentium dignissimos quae!lorem5 Lorem ipsum dolor
                        sit amet.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-20 max-w-[1280px] w-[80vw] m-auto">
        <div class="header_section">
            <h2>Uses of Image to text</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet
                consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="grid grid-cols-3 gap-5 mt-8">
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>Data extraction:</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam
                    consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio
                    incidunt repellat.</p>
            </div>
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>Accessibility:</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam
                    consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio
                    incidunt repellat.</p>
            </div>
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>Digitizing books:</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam
                    consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio
                    incidunt repellat.</p>
            </div>
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>Searchable PDFs:</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam
                    consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio
                    incidunt repellat.</p>
            </div>
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>Editing text:</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam
                    consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio
                    incidunt repellat.</p>
            </div>
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>Data analysis:</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam
                    consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio
                    incidunt repellat.</p>
            </div>
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>Educational purposes:</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam
                    consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio
                    incidunt repellat.</p>
            </div>
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>Legal and compliance:</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam
                    consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio
                    incidunt repellat.</p>
            </div>
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>Business automation:</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam
                    consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio
                    incidunt repellat.</p>
            </div>
        </div>
    </section>

    <section class="mt-20 max-w-[1280px] w-[80vw] m-auto">
        <div class="header_section">
            <h2>Working Mechanism of the Image to Text Converter</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet
                consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="working">
            <div>
                <img src="{{ asset('assets_files/frontend/images/pre-processing-icon.svg') }}" alt="">
                1.Preprocessing
            </div>
            <div>
                <img src="{{ asset('assets_files/frontend/images/text-detection-icon.svg') }}" alt="">
                2.Text Detection
            </div>
            <div>
                <img src="{{ asset('assets_files/frontend/images/segmentation-icon.svg') }}" alt="">
                3.Segmentation
            </div>
            <div>
                <img src="{{ asset('assets_files/frontend/images/recognition-icon.svg') }}" alt="">
                4.Recognition
            </div>
            <div>
                <img src="{{ asset('assets_files/frontend/images/post-processing-icon.svg') }}" alt="">
                5.Post-Processing
            </div>
            <div>
                <img src="{{ asset('assets_files/frontend/images/conversion-icon.svg') }}" alt="">
                6.Conversion
            </div>
        </div>
    </section>
    <section class="mt-20 max-w-[1280px] w-[80vw] m-auto">
        <div class="header_section">
            <h2>Why Use This Picture to Text Converter?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet
                consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="why">
            <table>
                <tbody>
                    <tr>
                        <td>🖼️
                            Supports Formats</td>
                        <td>PDF, PNG, JPG, WEBP, GIF, BMP, HEIC and TIFF</td>
                    </tr>
                    <tr>
                        <td>🌐
                            Language Support</td>
                        <td>EN, ES, ID, BR, FR, and others</td>
                    </tr>
                    <tr>
                        <td>🔖
                            Easier to Use</td>
                        <td>Free Access</td>
                    </tr>
                    <tr>
                        <td>🎯
                            Results</td>
                        <td>Incredibly Accurate</td>
                    </tr>
                    <tr>
                        <td>✍🏻
                            Working</td>
                        <td>Super Fast</td>
                    </tr>
                    <tr>
                        <td>⚡️
                            Technology</td>
                        <td>Optical Character Recognition</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </section>



    <section class="mt-20 max-w-[1280px] w-[80vw] m-auto uses">
        <div class="header_section">
            <h2>Where to Use the Online Image to Text Extractor?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet
                consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="pt-10 flex gap-x-10 flex-col">
            <div class="px-4 py-2 rounded-lg">
                <ul class="grid grid-cols-2 gap-5 mt-5 where__cards">
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            Digitize
                            Office Documents</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur
                            dolor molestiae quis laudantium praesentium impedit veniam iusto?</p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            Effortlessly Manage Data</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur
                            dolor molestiae quis laudantium praesentium impedit veniam iusto?</p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            Convert
                            Screenshots to Text</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur
                            dolor molestiae quis laudantium praesentium impedit veniam iusto?</p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            Extract
                            and Translate Text</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur
                            dolor molestiae quis laudantium praesentium impedit veniam iusto?</p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            Enhance
                            Research Workflows</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur
                            dolor molestiae quis laudantium praesentium impedit veniam iusto?</p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            Secure Document Handling</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur
                            dolor molestiae quis laudantium praesentium impedit veniam iusto?</p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            Break Down
                            Language Barriers</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur
                            dolor molestiae quis laudantium praesentium impedit veniam iusto?</p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            Streamline
                            Legal Workflows</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur
                            dolor molestiae quis laudantium praesentium impedit veniam iusto?</p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            Enhance
                            Productivity</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur
                            dolor molestiae quis laudantium praesentium impedit veniam iusto?</p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            Improve
                            Accessibility</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur
                            dolor molestiae quis laudantium praesentium impedit veniam iusto?</p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            Facilitate
                            Collaborative Work</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur
                            dolor molestiae quis laudantium praesentium impedit veniam iusto?</p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            Optimize
                            Storage Space</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur
                            dolor molestiae quis laudantium praesentium impedit veniam iusto?</p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            Analyze Historical Documents</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur
                            dolor molestiae quis laudantium praesentium impedit veniam iusto?</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="mt-20 max-w-[1280px] w-[80vw] m-auto pb-24">
        <div class="header_section">
            <h2>Frequently Asked Questions</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet
                consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="relative w-full sm:rounded-lg sm:px-10 ">
            <div class="mx-auto px-5">
                <div
                    class="mx-auto mt-8 grid max-w-[900px] bg-white px-10 py-5 w-[90%] divide-y divide-neutral-200 faq_card">
                    <div class="py-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span> How does the billing work?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600">Springerdata offers a variety of
                                billing options, including monthly and annual subscription plans, as well as
                                pay-as-you-go
                                pricing for certain services. Payment is typically made through a credit card or other
                                secure online payment method.
                            </p>
                        </details>
                    </div>
                    <div class="py-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span> Can I get a refund for my subscription?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600">We offer a 30-day money-back
                                guarantee for most of its subscription plans. If you are not satisfied with your
                                subscription within the first 30 days, you can request a full refund. Refunds for
                                subscriptions that have been active for longer than 30 days may be considered on a
                                case-by-case basis.
                            </p>
                        </details>
                    </div>
                    <div class="py-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span> How do I cancel my subscription?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600">To cancel your subscription, you
                                can
                                log in to your account and navigate to the subscription management page. From there, you
                                should be able to cancel your subscription and stop future billing.
                            </p>
                        </details>
                    </div>
                    <div class="py-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span> Is there a free trial?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600">We offer a free trial of our
                                software
                                for a limited time. During the trial period, you will have access to a limited set of
                                features and functionality, but you will not be charged.
                            </p>
                        </details>
                    </div>
                    <div class="py-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span> How do I contact support?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600">If you need help with our
                                platform or
                                have any other questions, you can contact the company's support team by submitting a
                                support
                                request through the website or by emailing support@ourwebsite.com.
                            </p>
                        </details>
                    </div>
                    <div class="py-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span> Do you offer any discounts or promotions?</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600">We may offer discounts or
                                promotions
                                from time to time. To stay up-to-date on the latest deals and special offers, you can
                                sign
                                up for the company's newsletter or follow it on social media.
                            </p>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-white pt-4 sm:pt-10 lg:pt-12 footer_div default-border">
        <footer class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <div class="flex flex-col items-center justify-between gap-4 border-t border-b py-6 md:flex-row">
                <!-- nav - start -->
                <nav class="flex flex-wrap justify-center gap-x-4 gap-y-2 md:justify-start md:gap-6">
                    <a href="https://humanizar-texto.org/politica-de-privacidad"
                        class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">
                        Politica de Privacidad</a>
                    <a href="https://humanizar-texto.org/terminos-y-condiciones"
                        class="text-gray-500 transition duration-100 hover:text-indigo-500 active:text-indigo-600">
                        Terminos y Condiciones</a>
                </nav>


                <!-- nav - end -->

                <!-- social - start -->
                <div class="flex gap-4 footer_icon">
                    <a href="https://www.facebook.com/humanizartexto1/" target="_blank"
                        class="text-gray-400 transition duration-100">
                        <svg fill="#1d1e56" width="64px" height="64px" viewBox="0 0 32 32" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>facebook</title>
                                <path
                                    d="M30.996 16.091c-0.001-8.281-6.714-14.994-14.996-14.994s-14.996 6.714-14.996 14.996c0 7.455 5.44 13.639 12.566 14.8l0.086 0.012v-10.478h-3.808v-4.336h3.808v-3.302c-0.019-0.167-0.029-0.361-0.029-0.557 0-2.923 2.37-5.293 5.293-5.293 0.141 0 0.281 0.006 0.42 0.016l-0.018-0.001c1.199 0.017 2.359 0.123 3.491 0.312l-0.134-0.019v3.69h-1.892c-0.086-0.012-0.185-0.019-0.285-0.019-1.197 0-2.168 0.97-2.168 2.168 0 0.068 0.003 0.135 0.009 0.202l-0.001-0.009v2.812h4.159l-0.665 4.336h-3.494v10.478c7.213-1.174 12.653-7.359 12.654-14.814v-0z">
                                </path>
                            </g>
                        </svg> </a>

                    <a href="https://x.com/humanizartexto" target="_blank"
                        class="text-gray-400 transition duration-100">
                        <svg fill="#1d1e56" height="64px" width="64px" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="-143 145 512 512" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M215.2,361.2 c0.1,2.2,0.1,4.5,0.1,6.8c0,69.5-52.9,149.7-149.7,149.7c-29.7,0-57.4-8.7-80.6-23.6c4.1,0.5,8.3,0.7,12.6,0.7 c24.6,0,47.3-8.4,65.3-22.5c-23-0.4-42.5-15.6-49.1-36.5c3.2,0.6,6.5,0.9,9.9,0.9c4.8,0,9.5-0.6,13.9-1.9 C13.5,430-4.6,408.7-4.6,383.2v-0.6c7.1,3.9,15.2,6.3,23.8,6.6c-14.1-9.4-23.4-25.6-23.4-43.8c0-9.6,2.6-18.7,7.1-26.5 c26,31.9,64.7,52.8,108.4,55c-0.9-3.8-1.4-7.8-1.4-12c0-29,23.6-52.6,52.6-52.6c15.1,0,28.8,6.4,38.4,16.6 c12-2.4,23.2-6.7,33.4-12.8c-3.9,12.3-12.3,22.6-23.1,29.1c10.6-1.3,20.8-4.1,30.2-8.3C234.4,344.5,225.5,353.7,215.2,361.2z">
                                </path>
                            </g>
                        </svg>
                    </a>

                    <a href="https://www.linkedin.com/company/humanizar-texto" target="_blank"
                        class="text-gray-400 transition duration-100">
                        <svg fill="#1d1e56" height="64px" width="64px" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="-143 145 512 512" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M41.4,508.1H-8.5V348.4h49.9 V508.1z M15.1,328.4h-0.4c-18.1,0-29.8-12.2-29.8-27.7c0-15.8,12.1-27.7,30.5-27.7c18.4,0,29.7,11.9,30.1,27.7 C45.6,316.1,33.9,328.4,15.1,328.4z M241,508.1h-56.6v-82.6c0-21.6-8.8-36.4-28.3-36.4c-14.9,0-23.2,10-27,19.6 c-1.4,3.4-1.2,8.2-1.2,13.1v86.3H71.8c0,0,0.7-146.4,0-159.7h56.1v25.1c3.3-11,21.2-26.6,49.8-26.6c35.5,0,63.3,23,63.3,72.4V508.1z ">
                                </path>
                            </g>
                        </svg>
                    </a>

                    <a href="https://www.reddit.com/user/humanizartexto/" target="_blank"
                        class="text-gray-400 transition duration-100">
                        <svg fill="#1d1e56" width="64px" height="64px" viewBox="0 0 32 32" version="1.1"
                            xmlns="http://www.w3.org/2000/svg">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>reddit</title>
                                <path
                                    d="M12.606 20.986c-0.225 0.001-0.407 0.183-0.407 0.408 0 0.112 0.045 0.214 0.118 0.288l-0-0c0.952 0.716 2.155 1.146 3.457 1.146 0.085 0 0.17-0.002 0.255-0.006l-0.012 0c0.081 0.004 0.175 0.006 0.27 0.006 1.294 0 2.488-0.431 3.445-1.158l-0.014 0.010c0.077-0.081 0.124-0.19 0.124-0.311 0-0.101-0.033-0.194-0.089-0.269l0.001 0.001c-0.074-0.074-0.177-0.119-0.29-0.119s-0.215 0.045-0.29 0.119l0-0c-0.799 0.575-1.798 0.919-2.877 0.919-0.092 0-0.184-0.003-0.275-0.007l0.013 0.001c-0.082 0.005-0.178 0.008-0.274 0.008-1.075 0-2.070-0.345-2.88-0.93l0.014 0.010c-0.074-0.073-0.175-0.119-0.287-0.119-0.001 0-0.002 0-0.003 0h0zM19.436 16c-0.861 0.001-1.56 0.699-1.56 1.561s0.699 1.561 1.561 1.561 1.561-0.699 1.561-1.561v0c-0.002-0.862-0.7-1.56-1.562-1.561h-0zM12.563 16c0.861 0 1.56 0.699 1.56 1.56s-0.699 1.56-1.56 1.56-1.56-0.699-1.56-1.56c0-0.861 0.698-1.56 1.56-1.56h0zM22.261 6.933c0.852 0.006 1.54 0.698 1.54 1.551 0 0.857-0.694 1.551-1.551 1.551-0.828 0-1.505-0.65-1.549-1.467l-0-0.004-3.245-0.684-1 4.682c2.185 0.049 4.201 0.737 5.878 1.884l-0.037-0.024c0.38-0.379 0.905-0.614 1.485-0.614 0.008 0 0.017 0 0.025 0h-0.001c1.21 0.001 2.191 0.982 2.192 2.192v0c-0.007 0.88-0.513 1.64-1.249 2.011l-0.013 0.006c0.033 0.191 0.052 0.412 0.052 0.637 0 0.005 0 0.009-0 0.014v-0.001c0 3.367-3.911 6.086-8.752 6.086s-8.752-2.719-8.752-6.086c0-0.001 0-0.003 0-0.005 0-0.234 0.020-0.463 0.057-0.687l-0.003 0.024c-0.771-0.35-1.298-1.114-1.298-2.001 0-1.21 0.981-2.191 2.191-2.191 0 0 0.001 0 0.001 0h-0c0.586 0.006 1.116 0.238 1.509 0.613l-0.001-0.001c1.66-1.148 3.711-1.841 5.924-1.858l0.004-0 1.106-5.226c0.028-0.103 0.090-0.189 0.173-0.245l0.002-0.001c0.063-0.037 0.139-0.059 0.22-0.059 0.027 0 0.054 0.003 0.080 0.007l-0.003-0 3.631 0.771c0.247-0.522 0.77-0.876 1.375-0.876 0.003 0 0.007 0 0.010 0h-0.001zM16 1.004c0 0 0 0-0 0-8.282 0-14.996 6.714-14.996 14.996s6.714 14.996 14.996 14.996c8.282 0 14.996-6.714 14.996-14.996 0-4.141-1.678-7.89-4.392-10.604v0c-2.714-2.714-6.463-4.392-10.604-4.392v0z">
                                </path>
                            </g>
                        </svg>
                    </a>

                    <a href="https://www.pinterest.com/humanizartexto/" target="_blank"
                        class="text-gray-400 transition duration-100">
                        <svg fill="#1d1e56" height="64px" width="64px" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="-143 145 512 512" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M113,528.3 c-12.6,0-24.8-1.9-36.3-5.3c4.9-7.7,10.2-17.6,12.9-27.4c1.6-5.7,9-35.2,9-35.2c4.4,8.5,17.4,15.9,31.3,15.9 c41.2,0,69.1-37.5,69.1-87.7c0-38-32.2-73.3-81-73.3c-60.8,0-91.5,43.6-91.5,80c0,22,8.3,41.6,26.2,48.9c2.9,1.2,5.5,0,6.4-3.2 c0.6-2.2,2-7.9,2.6-10.3c0.9-3.2,0.5-4.3-1.8-7.1c-5.1-6.1-8.4-13.9-8.4-25.1c0-32.3,24.2-61.3,63-61.3c34.4,0,53.3,21,53.3,49 c0,36.9-16.3,68-40.6,68c-13.4,0-23.4-11.1-20.2-24.6c3.8-16.2,11.3-33.7,11.3-45.4c0-10.5-5.6-19.2-17.3-19.2 c-13.7,0-24.7,14.2-24.7,33.1c0,12.1,4.1,20.2,4.1,20.2s-14,59.4-16.5,69.7c-2.3,9.7-2.6,20.5-2.2,29.4 C16.5,497.8-15,452.7-15,400.3c0-70.7,57.3-128,128-128s128,57.3,128,128S183.7,528.3,113,528.3z">
                                </path>
                            </g>
                        </svg> </a>

                    <a href="https://www.youtube.com/@HumanizarTexto" target="_blank"
                        class="text-gray-400 transition duration-100">
                        <svg fill="#1d1e56" height="64px" width="64px" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="-143 145 512 512" xml:space="preserve">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g>
                                    <polygon points="78.9,450.3 162.7,401.1 78.9,351.9 "></polygon>
                                    <path
                                        d="M113,145c-141.4,0-256,114.6-256,256s114.6,256,256,256s256-114.6,256-256S254.4,145,113,145z M241,446.8L241,446.8 c0,44.1-44.1,44.1-44.1,44.1H29.1c-44.1,0-44.1-44.1-44.1-44.1v-91.5c0-44.1,44.1-44.1,44.1-44.1h167.8c44.1,0,44.1,44.1,44.1,44.1 V446.8z">
                                    </path>
                                </g>
                            </g>
                        </svg>
                    </a>

                    <a href="https://github.com/humanizar-texto" target="_blank">
                        <svg width="64px" height="64px" viewBox="0 0 20 20" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            fill="#1d1e56">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <title>github [#142]</title>
                                <desc>Created with Sketch.</desc>
                                <defs> </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Dribbble-Light-Preview" transform="translate(-140.000000, -7559.000000)"
                                        fill="#1d1e56">
                                        <g id="icons" transform="translate(56.000000, 160.000000)">
                                            <path
                                                d="M94,7399 C99.523,7399 104,7403.59 104,7409.253 C104,7413.782 101.138,7417.624 97.167,7418.981 C96.66,7419.082 96.48,7418.762 96.48,7418.489 C96.48,7418.151 96.492,7417.047 96.492,7415.675 C96.492,7414.719 96.172,7414.095 95.813,7413.777 C98.04,7413.523 100.38,7412.656 100.38,7408.718 C100.38,7407.598 99.992,7406.684 99.35,7405.966 C99.454,7405.707 99.797,7404.664 99.252,7403.252 C99.252,7403.252 98.414,7402.977 96.505,7404.303 C95.706,7404.076 94.85,7403.962 94,7403.958 C93.15,7403.962 92.295,7404.076 91.497,7404.303 C89.586,7402.977 88.746,7403.252 88.746,7403.252 C88.203,7404.664 88.546,7405.707 88.649,7405.966 C88.01,7406.684 87.619,7407.598 87.619,7408.718 C87.619,7412.646 89.954,7413.526 92.175,7413.785 C91.889,7414.041 91.63,7414.493 91.54,7415.156 C90.97,7415.418 89.522,7415.871 88.63,7414.304 C88.63,7414.304 88.101,7413.319 87.097,7413.247 C87.097,7413.247 86.122,7413.234 87.029,7413.87 C87.029,7413.87 87.684,7414.185 88.139,7415.37 C88.139,7415.37 88.726,7417.2 91.508,7416.58 C91.513,7417.437 91.522,7418.245 91.522,7418.489 C91.522,7418.76 91.338,7419.077 90.839,7418.982 C86.865,7417.627 84,7413.783 84,7409.253 C84,7403.59 88.478,7399 94,7399"
                                                id="github-[#142]"> </path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                    </a>

                </div>
                <!-- social - end -->
            </div>

            <div class="py-8 text-center text-sm text-gray-400">© 2024 - image to text</div>
        </footer>
    </div>
    <script src="{{ asset('assets_files/frontend/script/script.js?v1.2') }}"></script>
</body>

</html>
