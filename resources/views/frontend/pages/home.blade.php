@extends('frontend.main')
@section('content')
    <section class="bg_wrapper"></section>

    <section class="main__wrapper mt-[20px]">
        <div class="header_section mt-[10px]">
            <h1>{{ @$content['h1']['value'] ?? 'Imagen a Texto' }}</h1>
            <p>{{ @$content['slogan']['value'] ?? 'imagen a texto sit amet consectetur adipisicing elit. Explicabo dicta impedit, ipsum amet modi fuga, eum.' }}
            </p>
        </div>
        {{-- <div class="shape"></div> --}}
        <div class="tool_wrapper">
            <div class="tool">
                <div class="input_sec expand_input">
                    <label for="uploadFile" class="uploadSection">
                        <div class="upload_label">
                            <img src="{{ asset('asset_files/frontend/images/upload-icon.svg?v1.1') }}" alt="">
                            <span
                                class="drop_text">{{ @$content['drop_text']['value'] ?? 'Drop, Upload or Paste image' }}</span>
                            <span
                                class="supported_files_text">{{ @$content['support_files']['value'] ?? 'Supported formates: JPG, PNG, GIF, JFIF (JPEG), HEIC, PDF' }}</span>
                            <div class="browse_sec">
                                <button class="flex gap-2 items-center" id="browse_files">
                                    <img width="18px" src="{{ asset('asset_files/frontend/images/upload-icon.svg') }}" alt="">
                                    {{ @$content['browse_files']['value'] ?? 'Browse Files' }}
                                </button>
                                <button><img width="20px" src="{{ asset('asset_files/frontend/images/link-icon.svg') }}"
                                        alt=""></button>
                            </div>
                        </div>
                        <input type="file" accept=".jpg, .png, .jpeg" multiple name="file" hidden
                            id="uploadFile">
                    </label>
                </div>
                <div class="output_sec d-none">
                    <div class="image_card_wrapper custom-scrollbar">
                    </div>
                    <div class="output__options">
                        <button class="clear_all">{{ @$content['clear_btn']['value'] ?? 'Clear All' }}</button>
                        <button class="convert_all">{{ @$content['convert_btn']['value'] ?? 'Convert' }}</button>
                    </div>
                </div>
                <div class="output_results custom-scrollbar d-none">
                </div>
            </div>
            <p>
                {{ @$content['privacy_text']['value'] ?? '*Your privacy is protected! No data is transmitted or stored.' }}
            </p>
        </div>
    </section>

    <section class="mt-20 max-w-[1280px] w-[80vw] m-auto uses">
        <div class="header_section">
            <h2>{{ @$content['use_heading']['value'] ?? 'How to Use Our Image to text convertor?' }}</h2>
            <p>{{ @$content['use_slogan']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
            </p>
        </div>
        <div class="pt-10 flex gap-x-10 flex-col sm:items-center md:flex-row ">
            <div class="bg-white px-4 py-2 rounded-lg">
                <img class="max-w-[350px] w-[100%]" src="{{ asset('asset_files/frontend/images/use-case-1.png') }}"
                    alt="">
                <img class="max-w-[350px] w-[100%]" src="{{ asset('asset_files/frontend/images/use-case-2.png') }}"
                    alt="">
                <img class="max-w-[350px] w-[100%]" src="{{ asset('asset_files/frontend/images/use-case-3.png') }}"
                    alt="">
                <img class="max-w-[350px] w-[100%]" src="{{ asset('asset_files/frontend/images/use-case-4.png') }}"
                    alt="">
            </div>
            <div class="grid grid-col-1 lg:grid-cols-2 gap-5 mt-5">
                <div class="p-5 lg:border-r lg:border-b border-gray-300 rounded-lg bg-white">
                    <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-white rounded-[100px] px-5 py-1">
                        {{ @$content['use_heading_1']['value'] ?? 'Upload Files' }}</h3>
                    <p>{{ @$content['use_content_1']['value'] ?? 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur dolor molestiae quis laudantium praesentium impedit veniam iusto?' }}
                    </p>
                </div>
                <div class="p-5  lg:border-l lg:border-b border-gray-300 rounded-lg bg-white">
                    <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-white rounded-[100px] px-5 py-1">
                        {{ @$content['use_heading_2']['value'] ?? 'Click On Convert' }}</h3>
                    <p>{{ @$content['use_content_2']['value'] ?? 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur dolor molestiae quis laudantium praesentium impedit veniam iusto?' }}
                    </p>
                </div>
                <div class="p-5 lg:border-t lg:border-r border-gray-300 rounded-lg bg-white">
                    <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-white rounded-[100px] px-5 py-1">
                        {{ @$content['use_heading_3']['value'] ?? 'Optical Recognation Process' }}</h3>
                    <p>{{ @$content['use_content_3']['value'] ?? 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur dolor molestiae quis laudantium praesentium impedit veniam iusto?' }}
                    </p>
                </div>
                <div class="p-5 lg:border-t lg:border-l border-gray-300 rounded-lg bg-white">
                    <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-white rounded-[100px] px-5 py-1">
                        {{ @$content['use_heading_4']['value'] ?? 'Result With Options' }}</h3>
                    <p>{{ @$content['use_content_4']['value'] ?? 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos nobis dolore, consequatur dolor molestiae quis laudantium praesentium impedit veniam iusto?' }}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-20 max-w-[1280px] w-[80vw] m-auto">
        <div class="header_section">
            <h2>{{ @$content['features_heading']['value'] ?? 'Key features of Image to text' }}</h2>
            <p>{{ @$content['features_slogan']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
            </p>
        </div>
        <div class=" md:max-w-[70vw] m-auto mt-5">
            <div class="feature_card bg-white transition flex-col md:flex-row  flex gap-x-5 p-2 rounded-lg items-center">
                <div>
                    1
                </div>
                <div>
                    <div>
                        <img src="" alt="">
                        <h3 class="">{{ @$content['feature_heading_1']['value'] ?? 'Low-resolution image extractor:' }}
                        </h3>
                    </div>
                    <p>{{ @$content['feature_content_1']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum odit nisi veritatis repellendus, provident voluptatum officiis praesentium dignissimos quae!lorem5 Lorem ipsum dolor sit amet.' }}
                    </p>
                </div>
            </div>
            <div class="feature_card bg-white transition flex-col md:flex-row  flex gap-x-5 p-2 rounded-lg items-center">
                <div>
                    2
                </div>
                <div>
                    <div>
                        <img src="" alt="">
                        <h3 class="">{{ @$content['feature_heading_2']['value'] ?? 'Detect mathematical syntax:' }}</h3>
                    </div>
                    <p>{{ @$content['feature_content_2']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum odit nisi veritatis repellendus, provident voluptatum officiis praesentium dignissimos quae!lorem5 Lorem ipsum dolor sit amet.' }}
                    </p>
                </div>
            </div>
            <div class="feature_card bg-white transition flex-col md:flex-row  flex gap-x-5 p-2 rounded-lg items-center">
                <div>
                    3
                </div>
                <div>
                    <div>
                        <img src="" alt="">
                        <h3 class="">{{ @$content['feature_heading_3']['value'] ?? 'Free to use:' }}</h3>
                    </div>
                    <p>{{ @$content['feature_content_3']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum odit nisi veritatis repellendus, provident voluptatum officiis praesentium dignissimos quae!lorem5 Lorem ipsum dolor sit amet.' }}
                    </p>
                </div>
            </div>
            <div class="feature_card bg-white transition flex-col md:flex-row  flex gap-x-5 p-2 rounded-lg items-center">
                <div>
                    4
                </div>
                <div>
                    <div>
                        <img src="" alt="">
                        <h3 class="">{{ @$content['feature_heading_4']['value'] ?? 'Handles multiple languages:' }}</h3>
                    </div>
                    <p>{{ @$content['feature_content_4']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum odit nisi veritatis repellendus, provident voluptatum officiis praesentium dignissimos quae!lorem5 Lorem ipsum dolor sit amet.' }}
                    </p>
                </div>
            </div>
            <div class="feature_card bg-white transition flex-col md:flex-row  flex gap-x-5 p-2 rounded-lg items-center">
                <div>
                    5
                </div>
                <div>
                    <div>
                        <img src="" alt="">
                        <h3 class="">{{ @$content['feature_heading_5']['value'] ?? 'Support multiple file formats' }}
                        </h3>
                    </div>
                    <p>{{ @$content['feature_content_5']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum odit nisi veritatis repellendus, provident voluptatum officiis praesentium dignissimos quae!lorem5 Lorem ipsum dolor sit amet.' }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-20 max-w-[1280px] w-[80vw] m-auto">
        <div class="header_section">
            <h2>{{ @$content['uses_heading']['value'] ?? 'Uses of Image to text' }}</h2>
            <p>{{ @$content['uses_slogan']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad ipsum odit nisi veritatis repellendus, provident voluptatum officiis praesentium dignissimos quae!lorem5 Lorem ipsum dolor sit amet.' }}
            </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mt-8">
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>{{ @$content['uses_heading_1']['value'] ?? 'Data extraction:' }}</h3>
                <p>{{ @$content['uses_content_1']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio incidunt repellat.' }}
                </p>
            </div>
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>{{ @$content['uses_heading_2']['value'] ?? 'Digitizing books:' }}</h3>
                <p>{{ @$content['uses_content_2']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio incidunt repellat.' }}
                </p>
            </div>
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>{{ @$content['uses_heading_3']['value'] ?? 'Searchable PDFs:' }}</h3>
                <p>{{ @$content['uses_content_3']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio incidunt repellat.' }}
                </p>
            </div>
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>{{ @$content['uses_heading_4']['value'] ?? 'Editing text:' }}</h3>
                <p>{{ @$content['uses_content_4']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio incidunt repellat.' }}
                </p>
            </div>
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>{{ @$content['uses_heading_5']['value'] ?? 'Data analysis:' }}</h3>
                <p>{{ @$content['uses_content_5']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio incidunt repellat.' }}
                </p>
            </div>
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>{{ @$content['uses_heading_6']['value'] ?? 'Educational purposes:' }}</h3>
                <p>{{ @$content['uses_content_6']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio incidunt repellat.' }}
                </p>
            </div>
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>{{ @$content['uses_heading_7']['value'] ?? 'Legal and compliance:' }}</h3>
                <p>{{ @$content['uses_content_7']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio incidunt repellat.' }}
                </p>
            </div>
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>{{ @$content['uses_heading_8']['value'] ?? 'Business automation:' }}</h3>
                <p>{{ @$content['uses_content_8']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio incidunt repellat.' }}
                </p>
            </div>
            <div class="uses_card flex flex-col gap-1 bg-white rounded-lg p-5">
                <h3>{{ @$content['uses_heading_9']['value'] ?? 'Data extraction:' }}</h3>
                <p>{{ @$content['uses_content_9']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque, tenetur minima quo numquam consequuntur dicta eius eum non corporis veniam, suscipit vitae. Alias iste dignissimos sequi odio incidunt repellat.' }}
                </p>
            </div>
        </div>
    </section>

    <section class="mt-20 max-w-[1280px] w-[80vw] m-auto">
        <div class="header_section">
            <h2>{{ @$content['working_heading']['value'] ?? 'Working Mechanism of the Image to Text Converter' }}</h2>
            <p>{{ @$content['working_slogan']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
            </p>
        </div>
        <div class="working">
            <div>
                <img src="{{ asset('asset_files/frontend/images/pre-processing-icon.svg') }}" alt="">
                1.{{ @$content['working_1']['value'] ?? 'Preprocessing' }}
            </div>
            <div>
                <img src="{{ asset('asset_files/frontend/images/text-detection-icon.svg') }}" alt="">
                2.{{ @$content['working_2']['value'] ?? 'Text Detection' }}

            </div>
            <div>
                <img src="{{ asset('asset_files/frontend/images/segmentation-icon.svg') }}" alt="">
                3.{{ @$content['working_2']['value'] ?? 'Segmentation' }}
            </div>
            <div>
                <img src="{{ asset('asset_files/frontend/images/recognition-icon.svg') }}" alt="">
                4.{{ @$content['working_4']['value'] ?? 'Recognition' }}
            </div>
            <div>
                <img src="{{ asset('asset_files/frontend/images/post-processing-icon.svg') }}" alt="">
                5.{{ @$content['working_5']['value'] ?? 'Post-Processing' }}
            </div>
            <div>
                <img src="{{ asset('asset_files/frontend/images/conversion-icon.svg') }}" alt="">
                6.{{ @$content['working_6']['value'] ?? 'Conversion' }}
            </div>
        </div>
    </section>
    <section class="mt-20 max-w-[1280px] w-[80vw] m-auto">
        <div class="header_section">
            <h2>{{ @$content['why_heading']['value'] ?? 'Why Use This Picture to Text Converter?' }}</h2>
            <p>{{ @$content['why_slogan']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
            </p>
        </div>
        <div class="why">
            <table class=" w-[100%] md:w-[70%]">
                <tbody>
                    <tr>
                        <td>{{ @$content['why_heading_1']['value'] ?? '🖼️ Supports Formats' }}</td>
                        <td>{{ @$content['why_content_1']['value'] ?? 'PDF, PNG, JPG, WEBP, GIF, BMP, HEIC and TIFF' }}</td>
                    </tr>
                    <tr>
                        <td>{{ @$content['why_heading_2']['value'] ?? '🌐 Language Support' }}</td>
                        <td>{{ @$content['why_content_2']['value'] ?? 'EN, ES, ID, BR, FR, and others' }}</td>
                    </tr>
                    <tr>
                        <td>{{ @$content['why_heading_3']['value'] ?? '🔖 Easier to Use' }}</td>
                        <td>{{ @$content['why_content_3']['value'] ?? 'Free Access' }}</td>
                    </tr>
                    <tr>
                        <td>{{ @$content['why_heading_4']['value'] ?? '🎯 Results' }}</td>
                        <td>{{ @$content['why_content_4']['value'] ?? 'Incredibly Accurate' }}</td>
                    </tr>
                    <tr>
                        <td>{{ @$content['why_heading_5']['value'] ?? '✍🏻 Working' }}</td>
                        <td>{{ @$content['why_content_5']['value'] ?? 'Super Fast' }}</td>
                    </tr>
                    <tr>
                        <td>{{ @$content['why_heading_6']['value'] ?? '⚡️ Technology' }}</td>
                        <td>{{ @$content['why_content_6']['value'] ?? 'Optical Character Recognition' }}</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </section>



    <section class="mt-20 max-w-[1280px] w-[80vw] m-auto uses">
        <div class="header_section">
            <h2>{{ @$content['where_heading']['value'] ?? 'Where to Use the Online Image to Text Extractor?' }}</h2>
            <p>{{ @$content['where_slogan']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
            </p>
        </div>
        <div class="pt-10 flex gap-x-10 flex-col">
            <div class="md:px-4 py-2 rounded-lg">
                <ul class="grid md:grid-cols-2 grid-cols-1 gap-5 mt-5 where__cards">
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            {{ @$content['where_heading_1']['value'] ?? 'Digitize Office Documents' }}</h3>
                        <p>{{ @$content['where_content_1']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
                        </p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            {{ @$content['where_heading_2']['value'] ?? 'Effortlessly Manage Data' }}</h3>
                        <p>{{ @$content['where_content_2']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
                        </p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            {{ @$content['where_heading_3']['value'] ?? 'Convert Screenshots to Text' }}</h3>
                        <p>{{ @$content['where_content_3']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
                        </p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            {{ @$content['where_heading_4']['value'] ?? 'Extract and Translate Text' }}</h3>
                        <p>{{ @$content['where_content_4']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
                        </p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            {{ @$content['where_heading_5']['value'] ?? 'Enhance Research Workflows' }}</h3>
                        <p>{{ @$content['where_content_5']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
                        </p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            {{ @$content['where_heading_6']['value'] ?? 'Secure Document Handling' }}</h3>
                        <p>{{ @$content['where_content_6']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
                        </p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            {{ @$content['where_heading_7']['value'] ?? 'Break Down Language Barriers' }}</h3>
                        <p>{{ @$content['where_content_7']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
                        </p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            {{ @$content['where_heading_8']['value'] ?? 'Streamline Legal Workflows' }}</h3>
                        <p>{{ @$content['where_content_8']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
                        </p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            {{ @$content['where_heading_9']['value'] ?? 'Enhance Productivity' }}</h3>
                        <p>{{ @$content['where_content_9']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
                        </p>
                    </li>
                    <li class="p-5 border-gray-300 rounded-lg bg-white">
                        <h3 class="text-[16px] mb-2 bg-[#5e4dff] w-fit text-center text-white rounded-[7px] px-5 py-1">
                            {{ @$content['where_heading_10']['value'] ?? 'Improve Accessibility' }}</h3>
                        <p>{{ @$content['where_content_10']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="mt-20 max-w-[1280px] w-[80vw] m-auto pb-24">
        <div class="header_section">
            <h2>{{ @$content['faq_heading']['value'] ?? 'Frequently Asked Questions' }}</h2>
            <p>{{ @$content['faq_slogan']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
            </p>
        </div>
        <div class="relative w-full sm:rounded-lg px-0 md:px-10 ">
            <div class="mx-auto md:px-5">
                <div
                    class="mx-auto mt-8 grid max-w-[900px] bg-white px-5 md:px-10 py-5 w-[90%] divide-y divide-neutral-200 faq_card">
                    <div class="py-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span> {{ @$content['faq_question_1']['value'] ?? 'How does the billing work?' }}</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                                {{ @$content['faq_answer_1']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
                            </p>
                        </details>
                    </div>
                    <div class="py-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span>
                                    {{ @$content['faq_question_2']['value'] ?? 'Can I get a refund for my subscription?' }}</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                                {{ @$content['faq_answer_2']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
                            </p>
                        </details>
                    </div>
                    <div class="py-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span>{{ @$content['faq_question_3']['value'] ?? 'How do I cancel my subscription?' }}</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                                {{ @$content['faq_answer_3']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
                            </p>
                        </details>
                    </div>
                    <div class="py-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span>{{ @$content['faq_question_4']['value'] ?? 'Is there a free trial?' }}</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                                {{ @$content['faq_answer_4']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
                            </p>
                        </details>
                    </div>
                    <div class="py-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span>{{ @$content['faq_question_5']['value'] ?? 'How do I contact support?' }}</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                                {{ @$content['faq_answer_5']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
                            </p>
                        </details>
                    </div>
                    <div class="py-5">
                        <details class="group">
                            <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                                <span> {{ @$content['faq_question_6']['value'] ?? 'Do you offer any discounts or promotions?' }}</span>
                                <span class="transition group-open:rotate-180">
                                    <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                        stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                        <path d="M6 9l6 6 6-6"></path>
                                    </svg>
                                </span>
                            </summary>
                            <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                                {{ @$content['faq_answer_6']['value'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, aliquid! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ab, dolor! Lorem ipsum dolor sit amet.' }}
                            </p>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
