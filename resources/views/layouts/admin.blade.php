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
        <nav class="bg-white shadow flex items-center">
            <div class="flex-auto">
                @include('admin._partials.nav')
            </div>
            <div class="flex items-center">
                <span>{{ auth()->user()->name }}</span>
                <form action="{{ url('logout') }}" method="post">
                    @csrf
                    <button type="submit" 
                        class="bbg-transparent text-blue hover:text-blue-dark py-2 px-4 rounded ml-2">
                        <i class="fas fa-sign-out-alt"></i>
                    </button>
                </form>
            </div>
        </nav>
        <div class="container mx-auto py-4">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
