<link rel="stylesheet" href="/css/menu/me.css">

<nav> 
    
        <x-application-logo class=imagen/>
        <li class="nav_li"><span><i class="fas fa-home"></i><a href="/welcome" class="nav_a">Home</a></span></li>
        <li class="nav_li"><span><i class="fas fa-user-friends"></i><a href="/nosotros" class="nav_a">About us</a></span></li>
        <li class="nav_li"><span><i class="fas fa-solid fa-car-side"></i><a href="/productos" class="nav_a">Products</a></span></li>
        <li class="nav_li"><span><i class="fas fa-solid fa-wrench"></i><a href="/news" class="nav_a">News</a></span></li>

        @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 nav_a">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 nav_a">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 nav_a">Register</a>
                        @endif
                    @endauth
                
        @endif
</nav>