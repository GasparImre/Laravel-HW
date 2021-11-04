
<!DOCTYPE html>
<html lang="en">
<head>
    <title>WWF</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <style>

        /* ––––––––––––––––––––––––––––––––––––––––––––––––––
          Based on: https://codepen.io/nickelse/pen/YGPJQG
          Influenced by: https://sproutsocial.com/
        –––––––––––––––––––––––––––––––––––––––––––––––––– */


        /* #Mega Menu Styles
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .mega-menu {
            display: none;
            left: 0;
            position: absolute;
            text-align: left;
            width: 100%;
        }



        /* #hoverable Class Styles
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .hoverable {
            position: static;
        }

        .hoverable > a:after {
            content: "\25BC";
            font-size: 10px;
            padding-left: 6px;
            position: relative;
            top: -1px;
        }

        .hoverable:hover .mega-menu {
            display: block;
        }


        /* #toggle Class Styles
        –––––––––––––––––––––––––––––––––––––––––––––––––– */

        .toggleable > label:after {
            content: "\25BC";
            font-size: 10px;
            padding-left: 6px;
            position: relative;
            top: -1px;
        }

        .toggle-input {
            display: none;
        }
        .toggle-input:not(checked) ~ .mega-menu {
            display: none;
        }

        .toggle-input:checked ~ .mega-menu {
            display: block;
        }

        .toggle-input:checked + label {
            color: white;
            background: #2c5282; /*@apply bg-blue-800 */
        }

        .toggle-input:checked ~ label:after {
            content: "\25B2";
            font-size: 10px;
            padding-left: 6px;
            position: relative;
            top: -1px;
        }

    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">
</head>

<body class="bg-gray-200 font-sans leading-normal tracking-normal">
<nav class="relative bg-white border-b-2 border-gray-300 text-gray-900" style="z-index: 1;">
    <div class="container mx-auto flex justify-between">
        <div class="relative block p-4 lg:p-6 text-xl text-blue-600 font-bold">WWF</div>
        <ul class="flex">

            <!--Regular Link-->
            @if (Route::has('login'))

                    <li class="hover:bg-blue-800 hover:text-white">
                        @auth

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a href="{{ route('logout') }}" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                    </li>

                    @else
                        <li class="hover:bg-blue-800 hover:text-white">
                            <a href="{{ route('login') }}" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Log in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="hover:bg-blue-800 hover:text-white">
                            <a href="{{ route('register') }}" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Register</a>
                            </li>
                        @endif
                    @endauth
            @endif
            <li class="hover:bg-blue-800 hover:text-white">
                <a href="https://www.worldwildlife.org/" target="_blank" class="relative block py-6 px-2 lg:p-6 text-sm lg:text-base font-bold">Original Site</a>
            </li>

            <!--Toggleable Link-->
            <li class="toggleable hover:bg-blue-800 hover:text-white">
                <input type="checkbox" value="selected" id="toggle-one" class="toggle-input">
                <label for="toggle-one" class="block cursor-pointer py-6 px-4 lg:p-6 text-sm lg:text-base font-bold">Menu</label>
                <div role="toggle" class="p-6 mega-menu mb-16 sm:mb-0 shadow-xl bg-blue-800">
                    <div class="container mx-auto w-full flex flex-wrap justify-between mx-2">
                        <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                            <h3 class="font-bold text-xl text-white text-bold mb-2">Galery</h3>
                            <li>
                                <a href="{{route('image-gallery')}}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white"> Photos</a>
                            </li>
                            <li>
                                <a href="{{route('play')}}" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Videos</a>
                            </li>
                        </ul>
                        <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-r-0 lg:border-r lg:border-b-0 pb-6 pt-6 lg:pt-3">
                            <h3 class="font-bold text-xl text-white text-bold mb-2">About</h3>
                            <li>
                                <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Contact us</a>
                            </li>
                            <li>
                                <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">About us</a>
                            </li>
                            <li>
                                <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Our Plans</a>
                            </li>
                        </ul>
                        @if(Route::has('login'))
                        <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 border-b sm:border-b-0 sm:border-r md:border-b-0 pb-6 pt-6 lg:pt-3">
                            <h3 class="font-bold text-xl text-white text-bold">For Users</h3>
                            @auth
                            <li>
                                <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Upload Photo</a>

                            </li>
                            <li>
                                <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Join us!</a>
                            </li>
                            @else
                                <li>
                                    <a href="#" class="block p-3 hover:bg-blue-600 text-gray-300 hover:text-white">Please Log In</a>
                                </li>
                            @endauth
                        </ul>
                        @endif
                        <ul class="px-4 w-full sm:w-1/2 lg:w-1/4 border-gray-600 pb-6 pt-6 lg:pt-3">
                            <h3 class="font-bold text-xl text-white text-bold mb-2">WWF</h3>
                            <li class="pt-3">
                                <img src="{{url('/images/owl.jpg')}}" style="height: 300px;width: 250px;">
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="container shadow-lg mx-auto bg-white mt-24 md:mt-16 ">
@yield('content')
</div>

</body>
</html>
