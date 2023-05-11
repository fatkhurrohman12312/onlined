<header class="header" data-page="home">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
        <div class="logo header_logo">
            <a class="d-inline-flex align-items-center" href="index.html">
                {{-- <span class="logo_picture">
                    <img src="svg/logo.svg" alt="Edison" />
                </span> --}}
                <span class="text">
                    <span class="brand">OnliNed</span>
                    <span class="text_secondary">courses</span>
                </span>
            </a>
        </div>
        <button class="header_trigger" type="button" data-bs-toggle="collapse" data-bs-target="#headerMenu"
            aria-controls="headerMenu">
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>
        <nav class="header_nav collapse" id="headerMenu">
            <ul class="header_nav-list">
                <li class="header_nav-list_item">
                    <a class="nav-item" href="{{ route('home.index') }}" data-page="home">Home</a>
                </li>
                <li class="header_nav-list_item">
                    <a class="nav-item" href="{{ route('product.index') }}" data-page="courses">Courses</a>
                </li>
                <li class="header_nav-list_item">
                    <a class="nav-item" href="{{ route('teacher.index') }}" data-page="teachers">Teachers</a>
                </li>
                <li class="header_nav-list_item">
                    <a class="nav-item" href="about.html" data-page="about">About Us</a>
                </li>
                @if (Route::has('login'))
                    @auth
                        <li class="header_nav-list_item">
                            <a href="{{ route('home.index') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Hi
                                {{ Auth::user()->name }}</a>
                        </li>
                        <li class="header_nav-list_item">
                            <a class="btn btn-dark" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        
                    @else
                        <li class="header_nav-list_item">
                            <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="header_nav-list_item">
                                <a href="{{ route('register') }}" class="btn btn-dark">Register</a>
                            </li>
                        @endif

                    @endauth
                @endif
            </ul>
        </nav>
    </div>
</header>
