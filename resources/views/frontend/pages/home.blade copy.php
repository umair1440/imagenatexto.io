@extends('frontend.main')
@section('content')
    <div class="mx-auto ">
        <div class="header_section">
            <h1 class="text-5xl mb-2 w-fit mx-auto">{{ $content->h1->value ?? "Random Letter Generator" }}</h1>
            <p class="mx-auto max-w-screen-md text-center md:text-lg">{{ $content->slogan->value ?? 'This is a section of some simple
                filler text, also known as placeholder text. It shares some characteristics of a real written text
                but is random or otherwise generated.'}}</p>
        </div>
        <section class="tool_wrapper">
            <div class="tool">
                <div class="tool_options">
                    <div class="">
                        <p>Select Options</p>
                        <div class="flex space-x-6">
                            <x-checkbox id='lowercase' text='abc' />
                            <x-checkbox id='useUppercase' text='ABC' />
                        </div>
                    </div>
                    <div>
                        <p>Select Numbers</p>
                        <div class="flex space-x-6">
                            <input type="number" id="numLetters" min="1"  value="10">
                        </div>
                    </div>
                    <div>
                        <p>Seperator: </p>
                        <div class="flex space-x-6">
                            <select name="" id="seperator">
                                <option value="<br>" selected>New Line</option>
                                <option value=",">,</option>
                                <option value=";">;</option>
                                <option value="-">-</option>
                                <option value="|">|</option>
                                <option value=".">.</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <p>Language: </p>
                        <div class="flex space-x-6">
                            <select name="" id="">
                                <option value="" selected>English</option>
                                <option value="">,</option>
                                <option value="">;</option>
                                <option value="">-</option>
                                <option value="">|</option>
                                <option value="">.</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="generate_wrapper">
                    <button id="reset">Reset</button>
                    <button id="generate">Generate</button>
                </div>
            </div>
            <div class="result_wrapper fix">
                <p id="result">U</p>
            </div>
        </section>

    </div>



    <section class="text-gray-600 body-font">
        <div class="container px-5 py-12 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h2 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">{{ $content->use_heading->value ?? "Master Cleanse Reliac Heirloom" }}</h2>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">{{ $content->use_slogan->value ?? "Whatever cardigan tote bag tumblr hexagon brooklyn
                    asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man
                    bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag." }}</p>
            </div>
        </div>
    </section>

    <section class="py-12">
        <div class="">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2 class="text-3xl mx-auto text-center mb-3">{{ $content->features_heading->value ?? "Our Competitve advantage" }}</h2>
                <p class="mx-auto max-w-screen-md text-center md:text-lg">{{ $content->features_slogan->value ?? "This is a section of some simple
                    filler text, also known as placeholder text. It shares some characteristics of a real written text
                    but is random or otherwise generated."}}</p>
            </div>
            <!-- text - end -->

            <div class="grid gap-12 sm:grid-cols-2 xl:grid-cols-3 xl:gap-16">
                <!-- feature - start -->
                <div class="flex flex-col items-center">
                    <div class="mb-2 flex h-12 w-12 items-center justify-center primary-color sm:mb-4 md:h-14 md:w-14">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                        </svg>
                    </div>

                    <h3 class="mb-2 text-center text-lg font-semibold md:text-xl">{{ $content->feature_1_heading->value ?? "Growth" }}</h3>
                    <p class="mb-2 text-center">{{ $content->feature_1_detail->value ?? "Filler text is dummy text which has no meaning however
                        looks very similar to real text."}}</p>
                    <a href="#"
                        class="font-bold primary-color transition duration-100 hover:text-indigo-600 active:text-indigo-700">More</a>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col items-center">
                    <div class="mb-2 flex h-12 w-12 items-center justify-center primary-color sm:mb-4 md:h-14 md:w-14">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                    </div>

                    <h3 class="mb-2 text-center text-lg font-semibold md:text-xl">{{ $content->feature_2_heading->value ?? "Security" }}</h3>
                    <p class="mb-2 text-center">{{ $content->feature_2_detail->value ?? "Filler text is dummy text which has no meaning however
                        looks very similar to real text."}}</p>
                    <a href="#"
                        class="font-bold primary-color transition duration-100 hover:text-indigo-600 active:text-indigo-700">More</a>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col items-center">
                    <div class="mb-2 flex h-12 w-12 items-center justify-center primary-color sm:mb-4 md:h-14 md:w-14">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                        </svg>
                    </div>

                    <h3 class="mb-2 text-center text-lg font-semibold md:text-xl">{{ $content->feature_3_heading->value ?? "Cloud" }}</h3>
                    <p class="mb-2 text-center">{{ $content->feature_3_detail->value ?? "Filler text is dummy text which has no meaning however
                        looks very similar to real text."}}</p>
                    <a href="#"
                        class="font-bold primary-color transition duration-100 hover:text-indigo-600 active:text-indigo-700">More</a>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col items-center">
                    <div class="mb-2 flex h-12 w-12 items-center justify-center primary-color sm:mb-4 md:h-14 md:w-14">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>

                    <h3 class="mb-2 text-center text-lg font-semibold md:text-xl">Speed</h3>
                    <p class="mb-2 text-center">Filler text is dummy text which has no meaning however
                        looks very similar to real text.</p>
                    <a href="#"
                        class="font-bold primary-color transition duration-100 hover:text-indigo-600 active:text-indigo-700">More</a>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col items-center">
                    <div class="mb-2 flex h-12 w-12 items-center justify-center primary-color sm:mb-4 md:h-14 md:w-14">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                        </svg>
                    </div>

                    <h3 class="mb-2 text-center text-lg font-semibold md:text-xl">Support</h3>
                    <p class="mb-2 text-center">Filler text is dummy text which has no meaning however
                        looks very similar to real text.</p>
                    <a href="#"
                        class="font-bold primary-color transition duration-100 hover:text-indigo-600 active:text-indigo-700">More</a>
                </div>
                <!-- feature - end -->

                <!-- feature - start -->
                <div class="flex flex-col items-center">
                    <div class="mb-2 flex h-12 w-12 items-center justify-center primary-color sm:mb-4 md:h-14 md:w-14">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                        </svg>
                    </div>

                    <h3 class="mb-2 text-center text-lg font-semibold md:text-xl">Dark Mode</h3>
                    <p class="mb-2 text-center">Filler text is dummy text which has no meaning however
                        looks very similar to real text.</p>
                    <a href="#"
                        class="font-bold primary-color transition duration-100 hover:text-indigo-600 active:text-indigo-700">More</a>
                </div>
                <!-- feature - end -->
            </div>
        </div>
    </section>


    <section class="text-gray-600 body-font">
        <div class="container px-5 py-12 mx-auto">
            <div class="flex flex-col text-center w-full mb-20">
                <h2 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">{{ $content->where_heading->value ?? "Master Cleanse Reliac Heirloom" }}
                </h2>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">{{ $content->where_slogan->value ?? "Whatever cardigan tote bag tumblr hexagon brooklyn
                    asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man
                    bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag."}}</p>
            </div>
            <div class="flex flex-wrap">
                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                    <h3 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">{{ $content->where_1_heading->value ?? "Shooting Stars" }}</h3>
                    <p class="leading-relaxed text-base mb-4">{{ $content->where_1_detail->value ?? "Fingerstache flexitarian street art 8-bit waistcoat.
                        Distillery hexagon disrupt edison bulbche."}}</p>
                    <a class="text-green-500 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                    <h3 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">{{ $content->where_2_heading->value ?? "Shooting Stars" }}</h3>
                    <p class="leading-relaxed text-base mb-4">{{ $content->where_2_detail->value ?? "Fingerstache flexitarian street art 8-bit waistcoat.
                        Distillery hexagon disrupt edison bulbche."}}</p>
                    <a class="text-green-500 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                    <h3 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">{{ $content->where_3_heading->value ?? "Shooting Stars" }}</h3>
                    <p class="leading-relaxed text-base mb-4">{{ $content->where_3_detail->value ?? "Fingerstache flexitarian street art 8-bit waistcoat.
                        Distillery hexagon disrupt edison bulbche."}}</p>
                    <a class="text-green-500 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
                <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 border-l-2 border-gray-200 border-opacity-60">
                    <h3 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">{{ $content->where_3_heading->value ?? "Shooting Stars" }}</h3>
                    <p class="leading-relaxed text-base mb-4">{{ $content->where_4_detail->value ?? "Fingerstache flexitarian street art 8-bit waistcoat.
                        Distillery hexagon disrupt edison bulbche."}}</p>
                    <a class="text-green-500 inline-flex items-center">Learn More
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class=" py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-xl px-4 md:px-8">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">{{ $content->faq_heading->value ?? "Frequently asked
                    questions"}}</h2>

                <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">{{ $content->faq_slogan->value ?? "This is a section of some simple
                    filler text, also known as placeholder text. It shares some characteristics of a real written text but
                    is random or otherwise generated."}}</p>
            </div>
            <!-- text - end -->

            <div class="grid gap-4 sm:grid-cols-2 md:gap-8 faq_list">
                <!-- question - start -->
                <div class="p-5">
                    <div class="mb-4 flex items-center justify-between gap-4 border-b pb-4">
                        <h3 class="font-semibold text-black sm:text-lg md:text-xl">{{ $content->faq_1_heading->value ?? "How does the product work?" }}</h3>
                        <span
                            class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-gray-300 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>

                    <p class="text-gray-500">{{ $content->faq_1_detail->value ?? "This is a section of some simple filler text, also known as placeholder text.
                        It shares some characteristics of a real written text but is random or otherwise generated."}}</p>
                </div>
                <!-- question - end -->

                <!-- question - start -->
                <div class="p-5">
                    <div class="mb-4 flex items-center justify-between gap-4 border-b pb-4">
                        <h3 class="font-semibold text-black sm:text-lg md:text-xl">{{ $content->faq_2_heading->value ?? "How does the product work?" }}</h3>

                        <span
                            class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-gray-300 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>

                    <p class="text-gray-500">{{ $content->faq_2_detail->value ?? "This is a section of some simple filler text, also known as placeholder text.
                        It shares some characteristics of a real written text but is random or otherwise generated."}}</p>
                </div>
                <!-- question - end -->

                <!-- question - start -->
                <div class="p-5">
                    <div class="mb-4 flex items-center justify-between gap-4 border-b pb-4">
                        <h3 class="font-semibold text-black sm:text-lg md:text-xl">{{ $content->faq_3_heading->value ?? "How does the product work?" }}</h3>

                        <span
                            class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-gray-300 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>

                    <p class="text-gray-500">{{ $content->faq_3_detail->value ?? "This is a section of some simple filler text, also known as placeholder text.
                        It shares some characteristics of a real written text but is random or otherwise generated."}}</p>
                </div>
                <!-- question - end -->

                <!-- question - start -->
                <div class="p-5">
                    <div class="mb-4 flex items-center justify-between gap-4 border-b pb-4">
                        <h3 class="font-semibold text-black sm:text-lg md:text-xl">{{ $content->faq_4_heading->value ?? "How does the product work?" }}</h3>

                        <span
                            class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-gray-300 text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </span>
                    </div>

                    <p class="text-gray-500">{{ $content->faq_4_detail->value ?? "This is a section of some simple filler text, also known as placeholder text.
                        It shares some characteristics of a real written text but is random or otherwise generated."}}</p>
                </div>
                <!-- question - end -->
            </div>
        </div>
    </section>

    <section class=" py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
            <!-- text - start -->
            <div class="mb-10 md:mb-16">
                <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Blog</h2>

                <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">This is a section of some simple
                    filler text, also known as placeholder text. It shares some characteristics of a real written text but
                    is random or otherwise generated.</p>
            </div>
            <!-- text - end -->

            <div class="grid gap-4 sm:grid-cols-2 md:gap-6 lg:grid-cols-3 xl:grid-cols-3 xl:gap-8 articles_list">
                <!-- article - start -->
                <div class="flex flex-col overflow-hidden  border bg-white">
                    <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                        <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&q=75&fit=crop&w=600"
                            loading="lazy" alt="Photo by Minh Pham"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    </a>

                    <div class="flex flex-1 flex-col p-4 sm:p-6">
                        <h2 class="mb-2 text-lg font-semibold text-gray-800">
                            <a href="#" class="transition duration-100 hover:text-black active:text-indigo-600">New
                                trends in
                                Tech</a>
                        </h2>

                        <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as
                            placeholder text. It shares some characteristics of a real written text.</p>

                        <div class="mt-auto flex items-end justify-between">
                            <div class="flex items-center gap-2">
                                <div>
                                    <span class="block text-sm text-gray-400">July 19, 2021</span>
                                </div>
                            </div>

                            <span class="rounded border px-2 py-1 text-sm text-gray-500">Article</span>
                        </div>
                    </div>
                </div>
                <!-- article - end -->

                <!-- article - start -->
                <div class="flex flex-col overflow-hidden  border bg-white">
                    <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                        <img src="https://images.unsplash.com/photo-1550745165-9bc0b252726f?auto=format&q=75&fit=crop&w=600"
                            loading="lazy" alt="Photo by Lorenzo Herrera"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    </a>

                    <div class="flex flex-1 flex-col p-4 sm:p-6">
                        <h2 class="mb-2 text-lg font-semibold text-gray-800">
                            <a href="#"
                                class="transition duration-100 hover:text-black active:text-indigo-600">Working with
                                legacy stacks</a>
                        </h2>

                        <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as
                            placeholder text. It shares some characteristics of a real written text.</p>

                        <div class="mt-auto flex items-end justify-between">
                            <div class="flex items-center gap-2">

                                <div>
                                    <span class="block text-sm text-gray-400">April 07, 2021</span>
                                </div>
                            </div>

                            <span class="rounded border px-2 py-1 text-sm text-gray-500">Article</span>
                        </div>
                    </div>
                </div>
                <!-- article - end -->

                <!-- article - start -->
                <div class="flex flex-col overflow-hidden  border bg-white">
                    <a href="#" class="group relative block h-48 overflow-hidden bg-gray-100 md:h-64">
                        <img src="https://images.unsplash.com/photo-1542759564-7ccbb6ac450a?auto=format&q=75&fit=crop&w=600"
                            loading="lazy" alt="Photo by Magicle"
                            class="absolute inset-0 h-full w-full object-cover object-center transition duration-200 group-hover:scale-110" />
                    </a>

                    <div class="flex flex-1 flex-col p-4 sm:p-6">
                        <h2 class="mb-2 text-lg font-semibold text-gray-800">
                            <a href="#" class="transition duration-100 hover:text-black active:text-indigo-600">10
                                best
                                smartphones for devs</a>
                        </h2>

                        <p class="mb-8 text-gray-500">This is a section of some simple filler text, also known as
                            placeholder text. It shares some characteristics of a real written text.</p>

                        <div class="mt-auto flex items-end justify-between">
                            <div class="flex items-center gap-2">
                                <div>
                                    <span class="block text-sm text-gray-400">March 15, 2021</span>
                                </div>
                            </div>

                            <span class="rounded border px-2 py-1 text-sm text-gray-500">Article</span>
                        </div>
                    </div>
                </div>
                <!-- article - end -->
            </div>
        </div>
    </section>
@endsection
