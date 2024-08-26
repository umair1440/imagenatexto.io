<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Letras Cursivas</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('asset_files/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('asset_files/admin/css/bootstrap-icons.css') }}" rel="stylesheet">



    <link rel="stylesheet" href="{{ asset('asset_files/admin/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset_files/admin/remixicon/remixicon.css') }}">

    <link rel="stylesheet" href="{{ asset('asset_files/admin/css/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('asset_files/admin/css/data-tables.css') }}">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js"
        integrity="sha512-6JR4bbn8rCKvrkdoTJd/VFyXAN4CE9XMtgykPWgKiHjou56YDJxWsi90hAeMTYxNwUnKSQu9JPc3SQUg+aGCHw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <link href="{{ asset('asset_files/admin/css/style.css') }}" rel="stylesheet">

</head>

<body>

    @include('admin.inc.header')
    @include('admin.inc.sidebar')
    @yield('content')
    @include('admin.inc.footer')



    {{-- jquery cdn --}}
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>


    <script src="{{ asset('asset_files/admin/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset_files/admin/js/quill.min.js') }}"></script>
    <script src="{{ asset('asset_files/admin/js/simple-datatables.js') }}"></script>
    {{-- <script src="{{ asset('asset_files/admin/js/tinymce.min.js') }}"></script> --}}
    <script src="{{ asset('asset_files/admin/js/validate.js') }}"></script>
    <script src="{{ asset('asset_files/admin/js/dashboard.js?v1.2') }}
                        "></script>
    <script src="{{ asset('asset_files/admin/js/admin.js?v1.4') }}
                        "></script>

</body>

</html>
