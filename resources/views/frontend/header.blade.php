<div class="mx-auto max-w-screen-2xl container navigation">
    <header class="flex items-center justify-between py-3" style="background-color: #fff !important">
        <!-- logo - start -->
        <a href="/" class="inline-flex items-center gap-2.5  font-bold text-[#000] webiste_logo site_name"
            aria-label="logo">
            <span>Humanizar Texto</span>
        </a>
        <div
            class="-ml-8 hidden flex-col gap-5 items-center sm:flex-row sm:justify-center lg:flex lg:justify-start menu_links">
            <a href="{{ route('home') }}">Humanizar Texto</a>
            <a href="{{ route('blogs') }}">Blog</a>
            <a href="{{ route('contact-us') }}">Contacto</a>
        </div>

        <button type="button"
            class="menu_icon inline-flex items-center gap-2  px-2.5 py-2 text-sm font-semibold text-gray-500  hover:bg-gray-300 focus-visible:ring active:text-gray-700 md:text-base lg:hidden">
            <img class="w-5 h-5" src="{{ asset('asset_files/frontend/images/nav-icon.svg?v1.1') }}" alt="">
        </button>
        <!-- buttons - end -->
    </header>
</div>
