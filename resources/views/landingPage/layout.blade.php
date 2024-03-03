<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])



    <title>@yield('titleLandingPage')</title>

</head>

<body>
    <header>
        <nav class="bg-[#D4E1FF] bg-opacity-60 dark:bg-gray-900 fixed w-full z-20 top-0 start-0  dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('images/logo.png') }}" class="h-12" alt="Flowbite Logo">

                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    {{-- @if (Auth::user('guest'))
                        <a href="/logout"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Logout
                        </a>
                    @else
                        <a href="/loginUser"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Login
                        </a>
                    @endif --}}
                    {{-- <button type="button"
                        class="text-white   bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        href="/loginUser">Login</button> --}}
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col  text-lg p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 ">
                        <li>
                            <a href="/"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                                aria-current="page">Home</a>
                        </li>
                        <li>
                            <a href="/about"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About
                                Us</a>
                        </li>
                        {{-- <li>
                            <a href="/services"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Our
                                Services</a>
                        </li> --}}
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Our
                                Projects</a>
                        </li>
                        {{-- <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Relations</a>
                        </li> --}}
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>



    @yield('content')
    </div>

    <footer class="bg-[#D4E1FF] dark:bg-gray-900 pt-5">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0 items-center pt-6">
                    <a href="#" class="flex items-center">
                        <img src="{{ asset('images/logo.png') }}" class="h-24 me-3" />

                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-3 text-lg font-semibold text-gray-900 uppercase dark:text-white">Projects</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="">
                                <a href="https://flowbite.com/" class="hover:underline">Gevana Residence</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Naputa</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Tahomi</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-3 ext-lg font-semibold text-gray-900 uppercase dark:text-white">Services</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Project
                                    Development</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Digital Media
                                    Development</a>
                            </li>
                            
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-3 text-lg font-semibold text-gray-900 uppercase dark:text-white">Our Social Media
                        </h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="">
                                <a href="#" class="hover:underline">
                                    <i class="fa-brands fa-square-instagram mr-2"
                                        style="color: #bc2a8d;"></i>@linearindonesia
                                </a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">
                                    <i class="fa-brands fa-youtube mr-2" style="color: red;"></i>Linear Indonesia
                                </a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">
                                    <i class="fa-brands fa-tiktok mr-3" style="color: #000;"></i>linear.indonesia
                                </a>
                            </li>
                        </ul>
                        <div class="mt-6">
                            <h2 class=" text-sm font-semibold text-gray-900 uppercase dark:text-white">Email us at</h2>
                            <label for=""><i
                                    class="fa-regular fa-envelope"></i>Businesslinear.id.@gmail.com</label>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="text-center bg-[#3A5EAA] py-3">
            <span class="text-md text-white sm:text-center dark:text-gray-400">2023 © Linear Indonesia Company
            </span>

        </div>
    </footer>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 300,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
        });

        // === agent ===
        var infoInput = document.getElementById('info-input');

        var agentDiv = document.querySelector('.agent');

        agentDiv.style.display = 'none';

        infoInput.addEventListener('change', function() {
            if (infoInput.value === 'agent') {
                agentDiv.style.display = 'flex';
            } else {
                agentDiv.style.display = 'none';
            }
        });
    </script>
   

</body>

</html>
