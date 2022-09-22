<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Network</title>

    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/sass/app.scss'])

    @stack('styles')
</head>
<body>
    @include('blocks.header')

    <div class="wrapper">
        @yield('content')
    </div>

    @include('blocks.footer')

    @stack('scripts')
</body>
</html>
