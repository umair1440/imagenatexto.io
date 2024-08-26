@extends('admin.admin')
@section('content')

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Page Settings</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Add Page Settings</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section>
      <div class="card">
        <div class="card-body">
          <!-- <h5 class="card-title">Add New Blog</h5> -->
          <!-- Multi Columns Form -->
          <form class="row g-3 pt-3" method="POST" action="{{ route('update-settings') }}" id="settings__form">
            @csrf
            <h4>Content:</h4>
            <div class="content__tags row">
              <div class="col-md-3">
                <input type="text" name="contentKey[]" class="p-2 form-control" placeholder="Key"
                  value="privacy-policy">
              </div>
              <div class="col-md-9 relative mb-5">
                <input type="hidden" name="inputType[]" value="richField">
                <textarea name="contentValue[]" class="textarea" cols="30" rows="10">{!! @$settings['privacy-policy']['value'] !!}</textarea>
              </div><!-- privacy policy -->

              <div class="col-md-3 my-5">
                <input type="text" name="contentKey[]" class="p-2 form-control" placeholder="Key"
                  value="terms-and-condition">
              </div>
              <div class="col-md-9 relative my-5">
                <input type="hidden" name="inputType[]" value="richField">
                <textarea name="contentValue[]" class="textarea" cols="30" rows="10">{!! @$settings['terms-and-condition']['value'] !!}</textarea>
                {{-- <div class="quill-editor-full quill-editor-full-2">{!! $settings['terms-and-condition']['value'] !!}</div> --}}
              </div><!-- terms-and-conditions -->

              <div class="col-md-3 my-5">
                <input type="text" name="contentKey[]" class="p-2 form-control" placeholder="Key" value="about-us">
              </div>
              <div class="col-md-9 relative my-5">
                {{-- <div class="textarea. quill-editor-full-3">{!! $settings['about-us']['value'] !!}</div> --}}
                <input type="hidden" name="inputType[]" value="richField">
                <textarea name="contentValue[]" class="textarea" cols="30" rows="10">{!! @$settings['about-us']['value'] !!}</textarea>
              </div><!-- about-us -->
              <div class="mb-4"></div>
            </div>

            <!-- <div class="col-md-3">
                <input type="text" name="contentKey[]" class="p-2 form-control" placeholder="Key">
              </div>
              <div class="col-md-9 mb-4">
                <div class="quill-editor-full"></div>
              </div>
               -->

            <!-- </div> -->

            <div class="add__new__tags row mt-5">
              <div class="col-md-9">
                <select id="content__row__type" class="p-2 form-select">
                  <option selected value="input">Input</option>
                  <option value="textarea">Textarea</option>
                </select>
              </div>
              <div class="col-md-3">
                <button type="button" class="py-2 w-100 btn btn-primary" id="add__content__row" data-margin="3">Add Row</button>
              </div>
            </div>

            <div class="mt-5">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form><!-- End Multi Columns Form -->
        </div>
      </div>
    </section>
  </main><!-- End #main -->
@endsection
