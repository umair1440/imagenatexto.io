@extends('admin.admin')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add New Tool</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Add Tool</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section>
            <div class="card">
                <div class="card-body">
                    <!-- <h5 class="card-title">Add New Blog</h5> -->

                    <!-- Multi Columns Form -->
                    <form action="{{ route('tool.store') }}" class="row g-3 pt-3" method="post">
                        @csrf
                        <div class="col-md-6 mb-2">
                            <label class="form-label"><small>Tool Name</small></label>
                            <input type="text" name="tool_name" class="p-2 form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><small>Tool Slug</small></label>
                            <input type="text" name="tool_slug" class="p-2 form-control" required>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label"><small>Meta Title</small></label>
                            <input type="text" name="tool_meta_title" class="p-2 form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><small>Meta Description</small></label>
                            <input type="text" name="tool_meta_description" class="p-2 form-control" required>
                        </div>
                        <div class="row">
                            <div>
                                <input name="is_home" value="1" type="checkbox"> Is Home?
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label"><small>Language</small></label>
                            <select id="inputState" class="p-2 form-select" name="tool_lang">
                                <option selected value="en">English</option>
                                <option value="es">spanish</option>
                                <option value="in">Indonesia</option>
                            </select>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><small>Parent</small></label>
                            <select id="inputState" class="p-2 form-select" name="tool_parent">
                                <option value="0">This is Parent</option>
                                {{-- <option>false</option> --}}
                            </select>

                            {{-- {"":{"type":"inputField","value":null}} --}}
                        </div>
                        <h4 class="mt-5">Content:</h4>
                        <div class="content__tags ">
                            <div class="row">
                                <input type="text" value="inputField" hidden name="inputType[]">
                                <div class="col-md-3">
                                    <input type="text" name="contentKey[]" class="p-2 form-control" placeholder="Key" >
                                </div>
                                <div class="col-md-9 mb-4">
                                    <input type="text" name="contentValue[]" class="form-control p-2"
                                        placeholder="Value">
                                </div>
                            </div>
                        </div>
                        <div class="add__new__tags row mt-5">
                            <div class="col-md-9">
                                <select id="content__row__type" class="p-2 form-select">
                                    <option selected value="input">Input</option>
                                    <option value="textarea">Textarea</option>
                                    <option value="editor">Rich Editor</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <button type="button" class="py-2 w-100 btn btn-primary" id="add__content__row"
                                    data-margin="1">Add Row</button>
                            </div>
                        </div>

                        <div class="">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form><!-- End Multi Columns Form -->
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
