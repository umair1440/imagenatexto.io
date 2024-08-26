@extends('admin.admin')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add New Blog</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Add Blog</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section>
            <div class="card">
                <div class="card-body">
                    <!-- <h5 class="card-title">Add New Blog</h5> -->

                    <!-- Multi Columns Form -->
                    <form  action="{{ route('blog.store') }}" enctype="multipart/form-data"  class="row g-3 pt-3" id="blog__form" method="post">
                        @csrf

                        <div class="col-md-12 mb-2">
                            <label for="inputEmail5" class="form-label"><small>Title</small></label>
                            <input type="file" name="blog_img" class="p-2 form-control" id="inputEmail5">
                        </div>

                        <div class="col-md-6 mb-2">
                            <label for="inputEmail5" class="form-label"><small>Title</small></label>
                            <input type="text" name="blog_title" class="p-2 form-control" id="inputEmail5">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword5" class="form-label"><small>Meta Title</small></label>
                            <input type="text" name="blog_meta_title" class="p-2 form-control" id="inputPassword5">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label for="inputEmail5" class="form-label"><small>Meta Description</small></label>
                            <input type="text" name="blog_meta_desc" class="p-2 form-control" id="inputEmail5">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword5" class="form-label"><small>Slug</small></label>
                            <input type="text" name="blog_slug" class="p-2 form-control" id="inputPassword5">
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label"><small>Language</small></label>
                            <select name="blog_lang" id="inputState" class="p-2 form-select">
                                <option selected>English</option>
                                <option>spanish</option>
                                <option>Indonesia</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="inputPassword5" class="form-label"><small>Status</small></label>
                            <select name="status" id="inputState" class="p-2 form-select">
                                <option selected>true</option>
                                <option>false</option>
                            </select>
                        </div>



                        <label for="inputPassword5" class="form-label"><small>Details</small></label>
                        <div class="quill-editor-full">
                        </div>
                        <!-- End TinyMCE Editor -->
                        <div class="">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form><!-- End Multi Columns Form -->

                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
