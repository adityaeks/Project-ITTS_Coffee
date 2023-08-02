<!DOCTYPE html>
<html lang="en">

<head>
    <title>Responsive Sidebar</title>
    <!-- Link Styles -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    @vite('resources/sass/app.scss')
    @vite('resources/css/app.css')
</head>

<body>
    <div class="sidebar">
        <div class="logo_details">
            <div class="logo_name">ITTS Coffee</div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <a href="{{ route('suggestion.index') }}">
                    <i class=" bx bx-chat"></i>
                    <span class="link_name">Feedback</span>
                </a>
                <span class="tooltip">Feedback</span>
            </li>
            <li>
            <li>
                <a href="{{ route('products.index') }}">
                    <i class="bx bx-folder"></i>
                    <span class="link_name">Products</span>
                </a>
                <span class="tooltip">Products</span>
            </li>
            <li>
                <a href="{{ route('home') }}">
                    <i class="bi bi-house-door-fill"></i>
                    <span class="link_name">Home</span>
                </a>
                <span class="tooltip">Home</span>
            </li>
            <li class="profile">
                <div class="profile_details">
                    <div class="profile_content">
                        <div class="name">{{ Auth::user()->name }}</div>
                    </div>
                </div>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="bx bx-log-out" id="log_out"></i>{{ __('') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

        </ul>
    </div>
    <section class="home-section">
        <div class="text">Dashboard Admin</div>
        @yield('content')
    </section>
    @vite('resources/sass/app.scss')
    @vite('resources/js/app.js')
    @include('sweetalert::alert')
    @stack('scripts')
</body>

</html>
