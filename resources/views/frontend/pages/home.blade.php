@extends('frontend.main')
@section('content')
    <section class="tool_wrapper">
        <div class="header_section">
            <h1>{{ $content['h1']['value'] ?? 'Humanizer Texto' }}</h1>
            <p>
                Humanizar Texto es un humanizador de texto de IA gratis que te
                ayuda a eliminar la detección de IA de tu contenido generado por ChatGPT, Gemini, Claude, etc.
            </p>
            {{-- <p>{{ $content['slogan']['value'] ??
                'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe quidem quam inventore repellendus Soluta totam praesentium ipsum nam repe.' }}
            </p> --}}
        </div>
        <div class="tool container">
            <div class="topbar_wrapper">
                <div class="topbar modes">
                    <button class="active" data-mode="1">
                        <span>{{ $content['mode_1']['value'] ?? 'Humanize' }}</span>
                    </button>
                    <button class="premium_mode" data-mode="2">
                        <span>{{ $content['mode_2']['value'] ?? 'Humanize Pro' }}</span>
                    </button>
                </div>
                <div class="langauges">
                    <div class="active_language">
                        <div>
                            <img src="{{ asset('asset_files/frontend/images/flags/portuguese.svg') }}" alt="">
                            <span>Portuguese</span>
                        </div>
                        <img src="{{ asset('asset_files/frontend/images/caret.svg') }}" alt="">
                    </div>
                    <div class="langauge_options d-none">
                        <p>
                            <img src="{{ asset('asset_files/frontend/images/flags/portuguese.svg') }}" alt="">
                            <span>Portuguese</span>
                        </p>
                        <p>
                            <img src="{{ asset('asset_files/frontend/images/flags/spanish.svg') }}" alt="">
                            <span>Spanish</span>
                        </p>
                        <p>
                            <img src="{{ asset('asset_files/frontend/images/flags/english.svg') }}" alt="">
                            <span>English</span>
                        </p>
                        <p>
                            <img src="{{ asset('asset_files/frontend/images/flags/french.svg') }}" alt="">
                            <span>French</span>
                        </p>
                        <p>
                            <img src="{{ asset('asset_files/frontend/images/flags/dutch.svg') }}" alt="">
                            <span>Dutch</span>
                        </p>
                        <p>
                            <img src="{{ asset('asset_files/frontend/images/flags/italian.svg') }}" alt="">
                            <span>Italian</span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="tool_text_wrapper">
                <div class="loader_wrapper d-none">
                    <div>
                        <span>Humanizando IA...</span>
                    </div>
                </div>
                <div class="tool_text">
                    <div class="input_section">
                        <textarea name="" cols="30" rows="10" id="input" class="custom-scrollbar"
                            placeholder="{{ $content['input_text']['value'] ?? 'Enter your text here' }}"></textarea>
                        <div class="input_bottom_bar">
                            <p>Words: 00</p>
                            <button id="humanize">
                                <span>{{ $content['submit_btn']['value'] ?? 'Humanize ai' }}</span>
                            </button>
                        </div>
                    </div>
                    <div class="output_section">
                        <div contenteditable="" id="output" class="custom-scrollbar hide_mini">
                            {{ $content['output_text']['value'] ?? 'El texto humanizado se mostrará aquí...' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
