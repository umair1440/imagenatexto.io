<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{ csrf_token() }}" />
    <link href="{{ url('/') }}/favicon.ico?v1.2" rel="icon" type="image/x-icon" />
    <title>{{ @$tool['tool_meta_title'] ?? (@$tool_meta_title ?? 'Imagen a texto') }}</title>
    <meta name="description" content="{{ @$tool['tool_meta_description'] }}">

    <link rel="canonical" href="{{ request()->url() }}" />
    <link rel="alternate" hreflang="x-default" href="{{ request()->url() }}" />
    <link rel="alternate" hreflang="es" href="{{ request()->url() }}" />
    <meta name="robots" content="noindex , nofollow" />
    <link rel="stylesheet" href="{{ asset('asset_files/frontend/css/style.css?v2.3.9.1') }}">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    @include('frontend.header')
    @yield('content')
    @include('frontend.footer')
</body>

</html>
