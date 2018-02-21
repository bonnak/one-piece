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
        <nav class="bg-white h-12 shadow mb-4">
            <div class="container mx-auto h-full">
                <div class="flex items-center justify-center h-12">
                    <div class="mr-6">
                        <a href="{{ url('/') }}" class="no-underline">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                    </div>
                    <div class="flex-1 text-right">
                        @guest
                            <a class="no-underline hover:underline text-grey-darker pr-3 text-sm" href="{{ url('/login') }}">Login</a>
                            <a class="no-underline hover:underline text-grey-darker text-sm" href="{{ url('/register') }}">Register</a>
                        @else
                            <span class="text-grey-darker text-sm pr-4">{{ Auth::user()->name }}</span>

                            <a href="{{ route('logout') }}"
                                class="no-underline hover:underline text-grey-darker text-sm"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">Logout</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endguest
                    </div>
                </div>
            </div>
        </nav>
        <div class="container mx-auto">
            <div class="flex flex-col lg:flex-row -mx-2">
                <div class="w-full lg:w-2/3 px-2">
                    @yield('content')
                </div>
                <div class="w-full lg:w-1/3 px-2 mt-4 lg:mt-0">
                    <div class="bg-white rounded shadow p-4">
                        Sidebar
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
