<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body class="bg-grey-lighter h-screen">
    <div id="app">
        <nav class="bg-white shadow mb-4">
            @include('_partials.header')
            @include('_partials.navigation')
        </nav>
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row -mx-2">
                <div class="w-full lg:w-2/3 px-2">
                    @yield('content')
                </div>
                <div class="w-full lg:w-1/3 px-2 mt-4 lg:mt-0">
                    @include('sidebar')
                </div>
            </div>
        </div>
        <div class="bg-white h-12 mt-4 shadow">
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
