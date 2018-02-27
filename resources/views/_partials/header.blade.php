<div class="bg-white">
    <div class="container mx-auto">
        <div class="flex items-center justify-start h-12">
            <div>
                <a href="{{ url('/') }}" class="no-underline">
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>
            <!-- <div class="flex-1 text-right">
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
            </div> -->
        </div>
    </div>
</div>