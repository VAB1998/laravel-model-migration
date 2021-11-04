<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <title>@yield('title', 'Travel') </title>
    {{-- CDNs Entrypoint --}}
    @yield('cdn-entrypoint')
</head>
<body>

    <main>
        @yield('content')
    </main>


    {{-- Scripts Section --}}
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('script-entrypoint')
</body>
</html>