    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    {{-- <a href="{{route('dashboard')}}"> --}}
                    <a href="{{url('/')}}">
                        <h1>My Library</h1>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:mx-auto sm:flex">
                    <a href="#" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition">
                        <i class='bx bx-category-alt text-lg me-1'></i> Categories
                    </a>
                    <a href="#" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition">
                        <i class='bx bx-user text-lg me-1'></i> Authors
                    </a>
                    <a href="#" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition">
                        <i class='bx bx-library text-lg me-1'></i> Publishers
                    </a>
                    @auth
                    <a href="#" class="inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition">
                        <i class='bx bx-cart text-lg me-1'></i> Cart
                    </a>
                    @endauth
                </div>
                @auth
                    
               
                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <div class="ms-3 relative">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <x-dropdown-link href="{{ route('profile.show') }}">
                                    {{ __('Profile') }}
                                </x-dropdown-link>

                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <x-dropdown-link href="{{ route('logout') }}"
                                        @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>
                @endauth
                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-500 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:text-gray-700 focus:bg-gray-100 transition">
                    <i class='bx bx-category-alt text-lg me-1'></i> Categories
                </a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-500 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:text-gray-700 focus:bg-gray-100 transition">
                    <i class='bx bx-user text-lg me-1'></i> Authors
                </a>
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-500 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:text-gray-700 focus:bg-gray-100 transition">
                    <i class='bx bx-library text-lg me-1'></i> Publishers
                </a>
                @auth
                <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-500 hover:text-gray-700 hover:bg-gray-100 focus:outline-none focus:text-gray-700 focus:bg-gray-100 transition">
                    <i class='bx bx-cart text-lg me-1'></i> Cart
                </a> 
                @endauth
               
            </div>
        </div>
    </nav>
