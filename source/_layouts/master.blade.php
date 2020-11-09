<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="referrer" content="always">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        <title>{{ $page->title }}</title>
        <link rel="stylesheet" href="{{ mix('css/all.css', 'assets/build') }}">
        <script src="{{ mix('js/modernizr-2.6.2.min.js', 'assets/build') }}"></script>
    </head>
    <body>
        @yield('body')

        <script src="{{ mix('js/jquery-3.0.0.min.js', 'assets/build') }} "></script>
        <script src="{{ mix('js/bootstrap.min.js', 'assets/build') }} "></script>
        <script src="{{ mix('js/main.js', 'assets/build') }} "></script>
    </body>
</html>