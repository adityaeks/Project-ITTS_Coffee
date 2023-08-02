
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
                        <a class="nav-link" href="#">Drink</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Snack</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('suggestion.create') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">User</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
{{-- end navbar --}}

