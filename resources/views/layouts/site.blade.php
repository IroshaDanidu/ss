<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Coffo</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- font css -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
</head>

<body>
<div class="header_section" >
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ '/' }}"><img src="images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="coffees.html">Coffees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">Shodssdp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <div class="login_bt">
                        <ul>
                            @if (Route::has('login'))
                                @auth
                                    <div class="hidden sm:flex sm:items-center sm:ms-6">
                                        <!-- Teams Dropdown -->
                                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                            <div class="ms-3 relative">
                                                <x-dropdown align="right" width="60">
                                                    <x-slot name="trigger">
                                                            <span class="inline-flex rounded-md">
                                                                <button type="button"
                                                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                                    {{ Auth::user()->currentTeam->name }}

                                                                    <svg class="ms-2 -me-0.5 h-4 w-4"
                                                                         xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                         viewBox="0 0 24 24" stroke-width="1.5"
                                                                         stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                              d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                                                    </svg>
                                                                </button>
                                                            </span>
                                                    </x-slot>

                                                    <x-slot name="content">
                                                        <div class="w-60">
                                                            <!-- Team Management -->
                                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                                {{ __('Manage Team') }}
                                                            </div>

                                                            <!-- Team Settings -->
                                                            <x-dropdown-link
                                                                href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                                                {{ __('Team Settings') }}
                                                            </x-dropdown-link>

                                                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                                                <x-dropdown-link href="{{ route('teams.create') }}">
                                                                    {{ __('Create New Team') }}
                                                                </x-dropdown-link>
                                                            @endcan

                                                            <!-- Team Switcher -->
                                                            @if (Auth::user()->allTeams()->count() > 1)
                                                                <div class="border-t border-gray-200"></div>

                                                                <div class="block px-4 py-2 text-xs text-gray-400">
                                                                    {{ __('Switch Teams') }}
                                                                </div>

                                                                @foreach (Auth::user()->allTeams() as $team)
                                                                    <x-switchable-team :team="$team" />
                                                                @endforeach
                                                            @endif
                                                        </div>
                                                    </x-slot>
                                                </x-dropdown>
                                            </div>
                                        @endif

                                        <!-- Settings Dropdown -->
                                        <div class="ms-3 relative">
                                            <x-dropdown align="right" width="48">
                                                <x-slot name="trigger">
                                                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                        <button
                                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                            <img class="h-8 w-8 rounded-full object-cover"
                                                                 src="{{ Auth::user()->profile_photo_url }}"
                                                                 alt="{{ Auth::user()->name }}" />
                                                        </button>
                                                    @else
                                                        <span class="inline-flex rounded-md">
                                                                <button type="button"
                                                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                                    {{ Auth::user()->name }}

                                                                    <svg class="ms-2 -me-0.5 h-4 w-4"
                                                                         xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                         viewBox="0 0 24 24" stroke-width="1.5"
                                                                         stroke="currentColor">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                              d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                                    </svg>
                                                                </button>
                                                            </span>
                                                    @endif
                                                </x-slot>

                                                <x-slot name="content">
                                                    <!-- Account Management -->
                                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                                        {{ __('Manage Account') }}
                                                    </div>

                                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                                        {{ __('Profile') }}
                                                    </x-dropdown-link>

                                                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                        <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                                            {{ __('API Tokens') }}
                                                        </x-dropdown-link>
                                                    @endif

                                                    <div class="border-t border-gray-200"></div>
                                                </x-slot>
                                            </x-dropdown>
                                        </div>
                                    </div>

                                    <!-- Hamburger -->
                                    <div class="-me-2 flex items-center sm:hidden">
                                        <button @click="open = ! open"
                                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                            <svg class="h-6 w-6" stroke="currentColor" fill="none"
                                                 viewBox="0 0 24 24">
                                                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M4 6h16M4 12h16M4 18h16" />
                                                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                                      stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
                                        <div class="pt-2 pb-3 space-y-1">
                                            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                                                {{ __('Dashboard') }}
                                            </x-responsive-nav-link>
                                        </div>

                                        <!-- Responsive Settings Options -->
                                        <div class="pt-4 pb-1 border-t border-gray-200">
                                            <div class="flex items-center px-4">
                                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                    <div class="shrink-0 me-3">
                                                        <img class="h-10 w-10 rounded-full object-cover"
                                                             src="{{ Auth::user()->profile_photo_url }}"
                                                             alt="{{ Auth::user()->name }}" />
                                                    </div>
                                                @endif

                                                <div>
                                                    <div class="font-medium text-base text-gray-800">
                                                        {{ Auth::user()->name }}</div>
                                                    <div class="font-medium text-sm text-gray-500">
                                                        {{ Auth::user()->email }}</div>
                                                </div>
                                            </div>

                                            <div class="mt-3 space-y-1">
                                                <!-- Account Management -->
                                                <x-responsive-nav-link href="{{ route('profile.show') }}"
                                                                       :active="request()->routeIs('profile.show')">
                                                    {{ __('Profile') }}
                                                </x-responsive-nav-link>

                                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}"
                                                                           :active="request()->routeIs('api-tokens.index')">
                                                        {{ __('API Tokens') }}
                                                    </x-responsive-nav-link>
                                                @endif

                                                <!-- Authentication -->
                                                <form method="POST" action="{{ route('logout') }}" x-data>
                                                    @csrf

                                                    <x-responsive-nav-link href="{{ route('logout') }}"
                                                                           @click.prevent="$root.submit();">
                                                        {{ __('Log Out') }}
                                                    </x-responsive-nav-link>
                                                </form>

                                                <!-- Team Management -->
                                                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                                    <div class="border-t border-gray-200"></div>

                                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                                        {{ __('Manage Team') }}
                                                    </div>

                                                    <!-- Team Settings -->
                                                    <x-responsive-nav-link
                                                        href="{{ route('teams.show', Auth::user()->currentTeam->id) }}"
                                                        :active="request()->routeIs('teams.show')">
                                                        {{ __('Team Settings') }}
                                                    </x-responsive-nav-link>

                                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                                        <x-responsive-nav-link href="{{ route('teams.create') }}"
                                                                               :active="request()->routeIs('teams.create')">
                                                            {{ __('Create New Team') }}
                                                        </x-responsive-nav-link>
                                                    @endcan

                                                    <!-- Team Switcher -->
                                                    @if (Auth::user()->allTeams()->count() > 1)
                                                        <div class="border-t border-gray-200"></div>

                                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                                            {{ __('Switch Teams') }}
                                                        </div>

                                                        @foreach (Auth::user()->allTeams() as $team)
                                                            <x-switchable-team :team="$team"
                                                                               component="responsive-nav-link" />
                                                        @endforeach
                                                    @endif
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <li><a href="{{ route('login') }}"><span class="user_icon"><i class="fa fa-user"
                                                                                                  aria-hidden="true"></i></span>Login</a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                @endauth
                            @endif
                        </ul>
                    </div>
                </form>
            </div>
        </nav>
    </div>
    {{ $slot }}
</div>
<!-- contact section end -->
<!-- footer section start -->
<div class="footer_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer_social_icon">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="location_text">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">+01
                                        1234567890</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-envelope" aria-hidden="true"></i><span
                                    class="padding_left_10">demo@gmail.com</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="form-group">
                    <textarea class="update_mail" placeholder="Your Email" rows="5" id="comment" name="Your Email"></textarea>
                    <div class="subscribe_bt"><a href="#"><i class="fa fa-arrow-right"
                                                             aria-hidden="true"></i></a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free
                        Html
                        Templates</a>
                    Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
            </div>
        </div>
    </div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>

@livewireScripts
</body>

</html>
