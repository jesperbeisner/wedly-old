<header class="pt-2">
    <div class="container d-flex flex-wrap justify-content-center pb-2">
        <a href="{{ route('index') }}" class="d-flex align-items-center mb-2 mb-lg-0 me-lg-auto text-decoration-none">
            <img width="40" height="40" src="{{ asset('img/heart.svg') }}" alt="Wedly.love icon">
            <span class="fs-4">Wedly.love</span>
        </a>

        <div class="d-flex align-items-center justify-content-center col-12 col-lg-auto">
            <a href="{{ route('login') }}" class="text-decoration-none">Login</a>
            <a href="{{ route('register') }}" class="ps-3 text-decoration-none">Sign up</a>
        </div>
    </div>
</header>

<nav class="pb-2 pt-1">
    <div class="container d-flex justify-content-center">
        <ul class="nav">
            <li>
                <a href="{{ route('index') }}" class="nav-link px-2 active" aria-current="page">Home</a>
            </li>
            <li>
                <a href="{{ route('index') }}" class="nav-link px-2">Features</a>
            </li>
            <li>
                <a href="{{ route('index') }}" class="nav-link px-2">Pricing</a>
            </li>
            <li>
                <a href="{{ route('index') }}" class="nav-link px-2">FAQs</a>
            </li>
            <li>
                <a href="{{ route('index') }}" class="nav-link px-2">About</a>
            </li>
        </ul>
    </div>
</nav>
