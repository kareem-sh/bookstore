<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>My Library</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Custom CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f0f0f0;
        }

        /* Adjustments for the navbar layout */
        .navbar-custom {
            background-color: #ffffff; /* White background for a clean look */
            border-bottom: 1px solid #ddd; /* Subtle border for separation */
        }

        .navbar-custom a {
            color: #4a4a4a; /* Neutral text color */
            font-weight: 500;
            margin: 0 10px; /* Spacing between items */
        }

        .navbar-custom a:hover {
            color: #007bff; /* Highlighted color on hover */
        }

        .navbar-logo h1 {
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0;
        }

        .navbar-actions img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        /* Responsive design adjustments */
        @media (max-width: 768px) {
            .navbar-logo h1 {
                font-size: 1.25rem; /* Smaller logo font size on mobile */
            }

            .navbar-actions img {
                width: 35px;
                height: 35px; /* Adjust profile photo size for smaller screens */
            }
        }
    </style>
 @vite(['resources/css/app.css', 'resources/js/app.js'])

 <!-- Styles -->
 @livewireStyles
    @yield('head')
</head>
<body>
    @livewire('navigation-menu')
    <!-- Navigation -->
    {{-- <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container">
            <!-- Logo Section -->
            <div class="navbar-logo">
                <a href="{{ url('/') }}" class="navbar-brand">
                    <h1>My Library</h1>
                </a>
            </div>

            <!-- Toggle Button for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible Menu -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <!-- Center Navigation Links -->
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class='bx bx-category-alt'></i> Categories</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class='bx bx-library'></i> Publishers</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class='bx bx-user'></i> Authors</a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a href="#" class="nav-link"><i class='bx bxs-cart'></i> Cart</a>
                    </li>
                    @endauth
                </ul>

                <!-- User Actions Section -->
                <ul class="navbar-nav">
                    @auth
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="userMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userMenu">
                            <li><a href="{{ route('profile.show') }}" class="dropdown-item">Profile</a></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Log Out</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Signup</a>
                    </li>
                    @endif
                    @endauth
                </ul>
            </div>
        </div>
    </nav> --}}

    <!-- Main Content -->
    <main class="py-4">
        @yield('content')
    </main>

    <!-- BoxIcons -->
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-K+ctZQ9n6SQ4qwM2vMOr/+hx1h4A+0UwFfxD8euvZxK/Jz9fWx6xWzIz5j8AnfiCXBlh3x22aZx7Z5CRk8+9dQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-rnbEXEXovmKnSewlAZeViWbwNkFB7Biw11Fw4EaFfliC30w6F3nnXOwC/Uw45W+hnDi1UpmevGU5ayojhawKpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        @if(session('success'))
        toastr.success("{{ session('success') }}");
        @endif
        @if(session('error'))
        toastr.error("{{ session('error') }}");
        @endif
    </script>
@stack('modals')

@livewireScripts
    @yield('scripts')
</body>
</html>
