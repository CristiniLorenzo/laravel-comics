<header>
    <div class="container">
        <div class="logo">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
        </div>
        <nav>
            <ul>
                <li class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
                    <a href="{{ route('home')}}">home</a>
                </li>
                <li class="{{ Route::currentRouteName() === 'comics' ? 'active' : '' }}">
                    <a href="{{ route('comics')}}">comics</a>
                </li>
                <li>
                    <a href="">about us</a>
                </li>
            </ul>
        </nav>
    </div>
    
</header>