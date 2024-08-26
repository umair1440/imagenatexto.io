@extends('frontend.main')
@section('content')
    <section class="container single_blog">
        <div>

        </div>
        <h1>{{ @$blog['title'] }}</h1>
        <img src="{{ asset('asset_files/blogs_img/'.@$blog['img_url']) }}" alt="">
        <p>{{ @$blog['created_at'] }}</p>
        <p>
            {!! @$blog['detail'] !!}
        </p>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta laudantium architecto in numquam odit a perferendis impedit dolorem doloribus suscipit, nostrum neque eum voluptate ut quisquam atque tenetur quam doloremque consectetur? Veniam dolorem, error eos repellat delectus repudiandae magni officiis magnam doloremque, animi dolorum. Eos corrupti beatae iste voluptatibus quisquam quis illum non repellat delectus sunt dolore, dolor labore, rerum facere molestiae ratione. Est, exercitationem eos reiciendis laborum placeat quae fuga sapiente esse cumque. Vero laboriosam corrupti, aut reiciendis necessitatibus magnam beatae molestias debitis natus fuga a harum ex optio? Eum, temporibus! Ipsa voluptates cum unde facilis, molestiae voluptatem itaque distinctio hic soluta perferendis modi culpa consectetur nobis qui rerum sequi. Libero tempore iure dolorum fugiat? Dolorum velit quas quaerat!
            <br>
            <br>
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus rerum provident suscipit aut impedit, facilis nam. Eius unde deleniti magnam laboriosam maiores architecto pariatur quae dolore ad beatae, cupiditate, possimus quis illum! Expedita veniam neque at natus optio maxime harum fuga, dolore voluptate illo quos fugit alias, rerum iure fugiat officiis blanditiis vero minus molestiae incidunt error voluptates officia accusamus. Nobis eligendi odit, corrupti numquam quis aperiam voluptatibus, exercitationem hic laboriosam minus dicta modi aspernatur magnam non magni autem? Officiis, accusamus atque qui placeat aliquid alias delectus et, aut unde aliquam culpa reiciendis laboriosam rerum soluta. Libero mollitia voluptate asperiores cum illum sapiente. Laudantium iste corporis autem. Reiciendis optio beatae, maiores in dolorum a hic minus ipsam expedita corrupti praesentium?
        </p>
    </section>
    <section class="container more_blogs">
        <h2>Our More BLogs</h2>
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
