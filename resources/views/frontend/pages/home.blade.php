@extends('frontend.main')
@section('content')
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
                            <img src="{{ asset('asset_files/frontend/images/upload-icon.svg?v1.0') }}" alt="">
                            <span class="drop_text">Drop, Upload or Paste image</span>
                            <span class="supported_files_text">Supported formates: JPG, PNG, GIF, JFIF (JPEG), HEIC,
                                PDF</span>
                            <div class="browse_sec">
                                <button>Browse Files</button>
                                <button><img width="20px"
                                        src="{{ asset('asset_files/frontend/images/link-icon.svg') }}"
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
                <img class="max-w-[350px]" src="{{ asset('asset_files/frontend/images/use-case-1.png') }}"
                    alt="">
                <img class="max-w-[350px]" src="{{ asset('asset_files/frontend/images/use-case-2.png') }}"
                    alt="">
                <img class="max-w-[350px]" src="{{ asset('asset_files/frontend/images/use-case-3.png') }}"
                    alt="">
                <img class="max-w-[350px]" src="{{ asset('asset_files/frontend/images/use-case-4.png') }}"
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
                <img src="{{ asset('asset_files/frontend/images/pre-processing-icon.svg') }}" alt="">
                1.Preprocessing
            </div>
            <div>
                <img src="{{ asset('asset_files/frontend/images/text-detection-icon.svg') }}" alt="">
                2.Text Detection
            </div>
            <div>
                <img src="{{ asset('asset_files/frontend/images/segmentation-icon.svg') }}" alt="">
                3.Segmentation
            </div>
            <div>
                <img src="{{ asset('asset_files/frontend/images/recognition-icon.svg') }}" alt="">
                4.Recognition
            </div>
            <div>
                <img src="{{ asset('asset_files/frontend/images/post-processing-icon.svg') }}" alt="">
                5.Post-Processing
            </div>
            <div>
                <img src="{{ asset('asset_files/frontend/images/conversion-icon.svg') }}" alt="">
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
@endsection
