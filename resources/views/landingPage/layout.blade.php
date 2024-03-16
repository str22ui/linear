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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>



    <title>@yield('titleLandingPage')</title>

</head>

<body class="bg-gray-50">



    @yield('content')

    <footer class="items-center justify-center text-center mb-10">
        <div class="justify-center items-center mx-auto">
            <div>
                <h1 class="text-3xl text-[#3B5CAA] font-bold mt-5">REACH US :
                </h1>
            </div>
            <div class="flex items-center mx-auto justify-center mt-5">
                <ul class="text-gray-500 dark:text-gray-400 font-medium flex">
                    <li class="mr-3">
                        <a href="#" class="hover:underline">
                            <i class="fab fa-whatsapp-square mr-2 text-3xl rounded-full" style="color: #3B5CAA;"></i>
                        </a>
                    </li>
                    <li class="mr-3">
                        <a href="#" class="hover:underline">
                            <i class="fab fa-instagram mr-2 text-3xl" style="color: #3B5CAA;"></i>
                        </a>
                    </li>
                    <li class="mr-3">
                        <a href="#" class="hover:underline">
                            <i class="fab fa-tiktok mr-2 text-3xl" style="color: #3B5CAA;"></i>
                        </a>
                    </li>
                    <li class="mr-3">
                        <a href="#" class="hover:underline">
                            <i class="fab fa-youtube mr-2 text-3xl" style="color: #3B5CAA;"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline">
                            <i class="fa fa-envelope mr-2 text-3xl" style="color: #3B5CAA;"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>


    </footer>



    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    {{-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script> --}}

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            centeredSlides: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 4,
                    centeredSlides: false,
                },
            },
            // Nonaktifkan responsif swiper
            resizeReInit: false,
        });


        var radioInputs = document.querySelectorAll('#info-input input[type="radio"]');
        var agentDiv = document.querySelector('.agent');

        agentDiv.style.display = 'none';

        radioInputs.forEach(function(input) {
            input.addEventListener('change', function() {
                if (this.value === 'agent') {
                    agentDiv.style.display = 'block';
                } else {
                    agentDiv.style.display = 'none';
                }
            });
        });

        // === agent ===
        // var infoInput = document.getElementById('info-input');

        // var agentDiv = document.querySelector('.agent');

        // agentDiv.style.display = 'none';

        // infoInput.addEventListener('change', function() {
        //     if (infoInput.value === 'agent') {
        //         agentDiv.style.display = 'flex';
        //     } else {
        //         agentDiv.style.display = 'none';
        //     }
        // });
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>


</body>

</html>
