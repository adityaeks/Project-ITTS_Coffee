@extends('layouts.app')
{{-- navbar --}}
<div class="page-container">
    {{-- awal foto --}}
    <nav class="navbar navbar-expand-lg navbar-light" style="width: 100%; height: 90px; background-color: #A27B5C">
        <div class="">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img class="main-image" src="{{ Vite::asset('resources/images/logoittscoffe.svg') }}" alt="Logo">
                @for ($i = 0; $i < 6; $i++)
                    <img src="{{ Vite::asset('resources/images/bgnavbar.svg') }}" alt="Logo">
                @endfor
                <img src="{{ Vite::asset('resources/images/bgnavbar2.png') }}" alt="Logo">
            </a>
        </div>
    </nav>
    {{-- end foto --}}
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #6F4F36">
        <div class="container">
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.drink') }}">Drink</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.food') }}">Snack</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('suggestion.create') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('suggestion.index') }}">User</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
{{-- end navbar --}}

@yield('content')

<!-- Footer -->
<footer class="footer navbar navbar-expand-lg" style="width: 100%; height: 140px; background-color: #A27B5C">
    <div class="">
        <a class="footer-brand" href="#">
            <div class="position-absolute mt-3" style="left: 40%; top: 1; transform: translateX(-50%); z-index: 2;">
                <ul class="list-unstyled mb-0 text-list text-white small" style="font-family: helvetica;">
                    <li style="text-decoration: underline;">MORE LINKS</li>
                    <li>Home</li>
                    <li>About</li>
                    <li>Drink</li>
                    <li>Snack</li>
                </ul>
            </div>
            <div class="position-absolute mt-3" style="left: 50%; top: 1; transform: translateX(-50%); z-index: 2;">
                <ul class="list-unstyled mb-0 text-list text-white small" style="font-family: helvetica;">
                    <li style="text-decoration: underline;">HELP LINKS</li>
                    <li>Contact</li>
                </ul>
            </div>
            <div class="position-absolute mt-3" style="left: 60%; top: 1; transform: translateX(-50%); z-index: 2;">
                <ul class="list-unstyled mb-0 text-list text-white small" style="font-family: helvetica;">
                    <li style="text-decoration: underline;">PAGE ADMIN</li>
                    <li>Admin</li>
                </ul>
            </div>
            <img class="footer-image" src="{{ Vite::asset('resources/images/logoittscoffe.svg') }}" alt="Logo">
            @for ($i = 0; $i < 3; $i++)
                <img src="{{ Vite::asset('resources/images/bgnavbar.svg') }}" alt="Logo"
                    style="height: 140px; z-index: 1;">
            @endfor
            <img src="{{ Vite::asset('resources/images/bgnavbarfooter.png') }}" alt="Logo"
                style="height: 140px; z-index: 1;">
        </a>
    </div>
</footer>

<div class="footer navbar navbar-expand-lg" style="width: 100%; height: 40px; background-color: #6F4F36 ">
</div>
<!-- End of Footer -->



@vite('resources/js/app.js')
</body>

</html>
@vite('resources/js/app.js')
</body>

</html>
