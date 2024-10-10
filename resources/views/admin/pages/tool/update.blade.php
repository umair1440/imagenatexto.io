@extends('admin.admin')
@section('content')
    <style>
        .tox.tox-tinymce {
            max-height: 300px !important;
        }
    </style>
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
                    <form class="row g-3 pt-3" method="post" action="{{ route('tool.update', $tool['id']) }}">
                        @csrf
                        <input type="hidden" value="{{ $tool['id'] }}" name='toolId'>
                        <div class="col-md-6 mb-2">
                            <label class="form-label"><small>Tool Name</small></label>
                            <input type="text" name="tool_name" class="p-2 form-control"
                                value="{{ $tool['tool_name'] }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><small>Tool Slug</small></label>
                            <input type="text" name="tool_slug" class="p-2 form-control"
                                value="{{ $tool['tool_slug'] }}">
                        </div>
                        <div class="col-md-6 mb-2">
                            <label class="form-label"><small>Meta Title</small></label>
                            <input type="text" name="tool_meta_title" class="p-2 form-control"
                                value="{{ $tool['tool_meta_title'] }}">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><small>Meta Description</small></label>
                            <input type="text" name="tool_meta_description" class="p-2 form-control"
                                value="{{ $tool['tool_meta_description'] }}">
                        </div>
                        <div class="row">
                            <div>
                                <input name="is_home" value="1" type="checkbox"
                                    {{ $tool['is_home'] == '1' ? 'checked' : '' }}> Is Home?
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail5" class="form-label"><small>Language</small></label>
                            <select id="inputState" class="p-2 form-select" name="tool_lang">
                                <option {{ $tool['tool_lang'] == 'en' ? 'selected' : '' }} value="en">English</option>
                                <option {{ $tool['tool_lang'] == 'es' ? 'selected' : '' }} value="es">spanish</option>
                                <option {{ $tool['tool_lang'] == 'id' ? 'selected' : '' }} value="in">Indonesia</option>
                            </select>

                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label"><small>Parent</small></label>
                            <select id="inputState" class="p-2 form-select" name="tool_parent">
                                <option value="0">This is Parent</option>
                            </select>
                        </div>
                        <h4 class="mt-5">Content:</h4>
                        <div class="content__tags">
                            @php
                                $content = json_decode($tool['tool_content'], true);
                            @endphp
                            @foreach ($content as $key => $element)
                                @if ($element['type'] == 'inputField')
                                    <div class="row flex gap-3">
                                        <input type="text" value="inputField" hidden name="inputType[]">
                                        <button class="btn col-md-2  btn-danger w-fit"
                                            style="width: fit-content; height: fit-content" type="button">
                                            X
                                        </button>

                                        <div class="col-md-3">
                                            <input type="text" value="{{ $key }}" name="contentKey[]"
                                                class="p-2 form-control" placeholder="Key">
                                        </div>
                                        <div class="col-md-8 mb-4">
                                            <input type="text" value="{{ $element['value'] }}" name="contentValue[]"
                                                class="form-control p-2" placeholder="Value">
                                        </div>
                                    </div>
                                @elseif($element['type'] == 'richTextField')
                                    <div class="row">
                                        <button class="btn col-md-2 flex gap-3 btn-danger w-fit"
                                            style="width: fit-content; height: fit-content" type="button">
                                            X
                                        </button>
                                        <input type="text" hidden value="richTextField" name="inputType[]">
                                        <div class="col-md-3 mt-${margin}">
                                            <input type="text" class="p-2 form-control" name="contentKey[]"
                                                value="{{ $key }}" placeholder="Key">
                                        </div>
                                        <div class="col-md-8 mb-4 mt-${margin}">
                                            <textarea name="contentValue[]" class="form-control textarea" cols="30" rows="2"
                                                placeholder="Rich Text">{{ $element['value'] }}</textarea>
                                        </div>
                                    </div>
                                @else
                                    <div class="row"><input type="text" hidden value="textField"
                                            name="inputType[]">
                                        <button class="btn col-md-2 btn-danger flex gap-3 w-fit"
                                            style="width: fit-content; height: fit-content" type="button">
                                            X
                                        </button>
                                        <div class="col-md-3">
                                            <input type="text" value="{{ $key }}" class="p-2 form-control"
                                                name="contentKey[]" placeholder="Key">
                                        </div>
                                        <div class="col-md-8 mb-4 mt-${margin}">
                                            <textarea class="form-control" name="contentValue[]" cols="10" rows="3" placeholder="Value">{{ $element['value'] }}</textarea>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        <div class="add__new__tags row mt-5">
                            <div class="col-md-9 flex gap-6 selection_container"
                                style="display: flex;align-items: center; justify-content: center: gap: 20px !important;">
                                <label for="input_sec" class="radio-container">
                                    <input type="radio" id="input_sec" name="selection" value="input" checked>
                                    <span class="checkmark">Input</span>

                                </label>
                                <label for="textarea_sec" class="radio-container">
                                    <input type="radio" name="selection" id="textarea_sec" value="textarea">
                                    <span class="checkmark">Textarea</span>
                                </label>
                                <label for="editor_sec" class="radio-container">
                                    <input type="radio" name="selection" id="editor_sec" value="editor">
                                    <span class="checkmark">Editor</span>
                                </label>

                                {{-- <input type="textarea">
                                <input type="editor">
                                <select id="content__row__type" class="p-2 form-select">
                                    <option selected value="input">Input</option>
                                    <option value="textarea">Textarea</option>
                                    <option value="editor">Rich Editor</option>
                                </select> --}}
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
