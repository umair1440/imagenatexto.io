@extends('frontend.main')
@section('content')
    <section class="container blogs">
        <h1 class="text-5xl">Blog</h1>
        @foreach (get_blogs_by_limit(1) as $blog)
        <div class="blogs_top_blog">
            <div>
                <img src="{{ asset('asset_files/blogs_img/'.@$blog['img_url']) }}" alt="">
            </div>
            <div>

                <div>
                    <p>{{ @$blog['created_at'] }}</p>
                    <a href="{{ route('blog.single', @$blog['slug']) }}">
                        <h3>{{ @$blog['title'] }}</h3>
                    </a>
                    <p>The New Fonts From Letras Cursivas for Instagram YouTube twitter facebook and other platforms.The New
                        Fonts From Letras Cursivas for Instagram YouTube twitter facebook and other platforms.The New Fonts
                        From Letras Cursivas for Instagram YouTube twitter facebook and other platforms.</p>
                </div>

                <p class="read_more">Read More <img src="{{ asset('asset_files/frontend/images/blog-icon.svg') }}" alt=""></p>
            </div>
        </div>
        @endforeach
    </section>
    <section class="container more_blogs">
        {{-- <h2>Other BLog</h2> --}}
        <div class="blog_cards">
            @foreach (get_blogs_by_limit(10) as $blog)
                <div class="blog_card">
                    <div>
                        <img src="{{ asset('asset_files/blogs_img/'.@$blog['img_url']) }}" alt="">
                    </div>
                    <div>
                        <a href="{{ route('blog.single', @$blog['slug']) }}">
                            <h5>{{ @$blog['title'] }}</h5>
                        </a>
                        {{-- <p>{!! @$blog['detail'] !!}</p> --}}
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor quisquam atque veniam sint modi quod amet nulla tempore perferendis voluptatem...</p>
                        <div>
                            <p>{{ @$blog['created_at'] }}</p>
                            <img src="{{ asset('asset_files/frontend/images/blog-icon.svg') }}" alt="">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
