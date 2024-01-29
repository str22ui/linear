@extends('landingPage.layout')
@section('titleLandingPage', 'Linear Indonesia')

@section('content')
    <div class="mb-10">
        <img class="w-full" src="{{ asset('images/home.jpg') }}" alt="">
    </div>

    {{-- <============== Who Are WE ==============>  --}}
    <div class="mx-auto py-5">
        <div class="mx-auto max-w-screen-xl ">
            <a href="#"
                class="flex flex-col items-center bg-white   md:flex-row hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-1/2 md:rounded-none md:rounded-s-lg"
                    src="{{ asset('images/areWe.png') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal ml-10 w-full">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Who Are We?</h5>
                    <p class="mb-3 font-normal text-xl text-gray-700 dark:text-gray-400">Linear Indonesia merupakan sebuah
                        perusahaan yang
                        didirikan pada tahun 2022, Linear Indonesia merupakan perusahaan yang bergerak di bidang "Creative
                        Solution
                        Product Branding". Dengan adanya Linear Indonesia, harapan kami dapat memberikan peningkatan dari
                        setiap
                        produk yang anda miliki baik dari "Value dan Brand Image" maupun dari produk itu sendiri. Kami
                        mengemas
                        produk anda dengan desain yang sederhana dan kreatif, yang akan didukung strategi pemasaran yang
                        terarah dan
                        sistematis, sehingga dapat meningkatkan awerness dan sales akan produk itu sendiri.</p>
                    <div>
                        <button type="button"
                            class="text-white bg-blue-700 text-xl rounded-full hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium  px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Read
                            More<i class="fa-solid fa-arrow-right pl-2"></i>
                    </div></button>
                </div>
            </a>
        </div>
    </div>
    {{-- ============== /Who Are We/ ============== --}}

    {{-- <============== Our Services ==============>  --}}
    <div class="bg-[#D4E1FF] pt-10 ">

        <div class="text-center">
            <h1 class="text-3xl font-bold mb-10">Our Services</h1>
        </div>

        <div class="flex space-x-4 justify-center items-center text-center text-[#3A5EAA]">
            {{-- ===== Card 1 ===== --}}
            <div class="max-w-sm   rounded-lg  dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg object-cover h-40 mx-auto" src="{{ asset('images/services-project.png') }}"
                        alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight  dark:text-white">Project Development</h5>
                    </a>

                    <a href="#"
                        class="inline-flex items-center mt-5 px-3 py-2 text-xl font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Learn More
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            {{-- ===== /Card 1/ ===== --}}

            {{-- ===== Card 2 ===== --}}
            <div class="max-w-sm  dark:bg-gray-800 dark:border-gray-700">
                <a href="#" class="">
                    <img class="rounded-t-lg object-cover h-40 mx-auto " src="{{ asset('images/services-digital.png') }}"
                        alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight  dark:text-white">Digital Media Development</h5>
                    </a>

                    <a href="#"
                        class="inline-flex items-center mt-5 px-3 py-2 text-xl font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Learn More
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- ===== /Card 2/ ===== --}}

            {{-- ===== Card 3 ===== --}}

            <div class="max-w-sm  dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg  object-cover h-40 mx-auto "
                        src="{{ asset('images/services-advertising.png') }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight  dark:text-white">Advertising Development</h5>
                    </a>

                    <a href="#"
                        class="inline-flex items-center mt-5 px-3 py-2 text-xl font-medium text-center text-white bg-blue-700 rounded-full hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Learn More
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>
            </div>
            {{-- ===== /Card 3/ ===== --}}
        </div>
    </div>
    {{-- ============== /Our Services/ ============== --}}

    {{-- ============== Our Ongoing Projects ============== --}}
    <div class="py-10">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold">Our Ongoing Projects</h1>
        </div>
        <div class="flex space-x-3 justify-center items-center">

            {{-- ===== Card 1 ===== --}}
            <div
                class="max-w-sm bg-[#D4E1FF] border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('images/gevana.png') }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Gevana Residence
                        </h5>
                    </a>
                    <ul class="text-xl ">
                        <li><i class="fa-solid fa-landmark-flag mr-3"></i><label for="">3.500 m2</label></li>
                        <li><i class="fa-solid fa-house mr-3"></i><label for="">28 Unit</label></li>
                        <li><i class="fa-solid fa-location-dot ml-1 mr-4 "></i><label for="">Cirendeu, Tangerang
                                Selatan</label></li>
                    </ul>
                    <div class="text-center mt-8 ">
                        <a href="#"
                            class="flex w-full  items-center justify-center px-3 py-2 text-xl font-medium  text-white bg-blue-700 rounded-2xl hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Download Marketing Kit

                        </a>
                    </div>

                </div>
            </div>
            {{-- ===== /Card 1/ ===== --}}

            {{-- ===== Card 2 ===== --}}
            <div
                class="max-w-sm bg-[#D4E1FF] border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('images/naputa.png') }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Naputa
                        </h5>
                    </a>
                    <ul class="text-xl ">
                        <li><i class="fa-solid fa-landmark-flag mr-3"></i><label for="">1.383 m2</label></li>
                        <li><i class="fa-solid fa-house mr-3"></i><label for="">14 Unit</label></li>
                        <li><i class="fa-solid fa-location-dot ml-1 mr-4 "></i><label for="">Cirendeu, Tangerang
                                Selatan</label></li>
                    </ul>
                    <div class="text-center mt-8 ">
                        <a href="#"
                            class="flex w-full  items-center justify-center px-3 py-2 text-xl font-medium  text-white bg-blue-700 rounded-2xl hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Download Marketing Kit

                        </a>
                    </div>

                </div>
            </div>
            {{-- ===== /Card 2/ ===== --}}

            {{-- ===== Card 3 ===== --}}

            <div
                class="max-w-sm bg-[#D4E1FF] border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <a href="#">
                    <img class="rounded-t-lg" src="{{ asset('images/tahomi.png') }}" alt="" />
                </a>
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tahomi
                        </h5>
                    </a>
                    <ul class="text-xl ">
                        <li><i class="fa-solid fa-landmark-flag mr-3"></i><label for="">3.500 m2</label></li>
                        <li><i class="fa-solid fa-house mr-3"></i><label for="">28 Unit</label></li>
                        <li><i class="fa-solid fa-location-dot ml-1 mr-4 "></i><label for="">Cirendeu, Tangerang
                                Selatan</label></li>
                    </ul>
                    <div class="text-center mt-8 ">
                        <a href="#"
                            class="flex w-full  items-center justify-center px-3 py-2 text-xl font-medium rounded-2xl text-white bg-blue-700  hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Download Marketing Kit

                        </a>
                    </div>

                </div>
            </div>
            {{-- ===== /Card 3/ ===== --}}
        </div>
    </div>
    {{-- ============== /Our Ongoing Projects/ ============== --}}

    {{-- ============== Company Portofolio ============== --}}

    <div class="py-5">
        <div class="text-center">
            <h1 class="text-3xl font-bold">Company Portofolio</h1>
        </div>
        <div class="flex justify-center items-center mt-4 mb-4 ">
            <ul class="flex space-x-44 text-2xl">
                <li class="underline">Project Development</li>

                <li>Digital Media Development</li>
                <li>Advertising Development</li>
            </ul>
        </div>
        <div>
            <div class="flex space-x-3 justify-center items-center">

                {{-- ===== Card 1 ===== --}}
                <div
                    class="max-w-sm bg-[#D4E1FF] border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('images/grand.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Grand Amarylis
                            </h5>
                        </a>
                        <ul class="text-xl ">
                            <li><i class="fa-solid fa-landmark-flag mr-3"></i><label for="">3.500 m2</label></li>
                            <li><i class="fa-solid fa-house mr-3"></i><label for="">28 Unit</label></li>
                            <li><i class="fa-solid fa-location-dot ml-1 mr-4 "></i><label for="">Cirendeu,
                                    Tangerang
                                    Selatan</label></li>
                        </ul>


                    </div>
                </div>
                {{-- ===== /Card 1/ ===== --}}

                {{-- ===== Card 2 ===== --}}
                <div
                    class="max-w-sm bg-[#D4E1FF] border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('images/linnaya.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">LINAYA
                                Community Living
                            </h5>
                        </a>
                        <ul class="text-xl ">
                            <li><i class="fa-solid fa-landmark-flag mr-3"></i><label for="">1.383 m2</label></li>
                            <li><i class="fa-solid fa-house mr-3"></i><label for="">14 Unit</label></li>
                            <li><i class="fa-solid fa-location-dot ml-1 mr-4 "></i><label for="">Cirendeu,
                                    Tangerang
                                    Selatan</label></li>
                        </ul>

                    </div>
                </div>
                {{-- ===== /Card 2/ ===== --}}

                {{-- ===== Card 3 ===== --}}

                <div
                    class="max-w-sm bg-[#D4E1FF] border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg" src="{{ asset('images/tahomi.png') }}" alt="" />
                    </a>
                    <div class="p-5">
                        <a href="#">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Tahomi
                            </h5>
                        </a>
                        <ul class="text-xl ">
                            <li><i class="fa-solid fa-landmark-flag mr-3"></i><label for="">3.500 m2</label></li>
                            <li><i class="fa-solid fa-house mr-3"></i><label for="">28 Unit</label></li>
                            <li><i class="fa-solid fa-location-dot ml-1 mr-4 "></i><label for="">Cirendeu,
                                    Tangerang
                                    Selatan</label></li>
                        </ul>


                    </div>
                </div>
                {{-- ===== /Card 3/ ===== --}}
            </div>
        </div>
    </div>
    {{-- ============== /Company Portofolio/ ============== --}}

    {{-- ============== Chekout Youtube ============== --}}
    {{-- ============== Chekout Youtube ============== --}}
    <div class="py-5">
        <div class="text-center">
            <h1 class="text-3xl font-bold">Check Out Our Youtube Videos</h1>
        </div>
        <div class="flex justify-center items-center mt-4">
            {{-- ===== Card 1 ===== --}}
            <div
                class="card max-w-md mx-2 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <iframe width="100%" height="180" src="https://www.youtube.com/embed/YOUR_VIDEO_ID_1"
                    frameborder="0" allowfullscreen></iframe>
            </div>
            {{-- ===== /Card 1/ ===== --}}

            {{-- ===== Card 2 ===== --}}
            <div
                class="card max-w-md mx-2 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <iframe width="100%" height="180" src="https://www.youtube.com/embed/YOUR_VIDEO_ID_2"
                    frameborder="0" allowfullscreen></iframe>
            </div>
            {{-- ===== /Card 2/ ===== --}}

            {{-- ===== Card 3 ===== --}}
            <div
                class="card max-w-md mx-2 p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                <iframe width="100%" height="180" src="https://www.youtube.com/embed/YOUR_VIDEO_ID_3"
                    frameborder="0" allowfullscreen></iframe>
            </div>
            {{-- ===== /Card 3/ ===== --}}
        </div>
    </div>
    {{-- ============== /Chekout Youtube/ ============== --}}

    {{-- ============== Let's Get Work ============== --}}
    <div class="py-5">
        <div class="text-center ">
            <h1 class="text-3xl font-bold">Let's Get Work Together</h1>
        </div>
        <section class="swiper mySwiper mt-10">
            <div class="swiper-wrapper ">
                <div class="card swiper-slide w-1/4 h-full text-center bg-[#D4E1FF] shadow-lg pt-5 pl-5 pr-5 rounded-md">
                    <div class="card__image w-full">
                        <img src="{{ asset('images/works1.png') }}" alt="card image" class="w-64  justify-center items-center mx-auto">
                    </div>
                    <div class="card__content my-4">
                        <span class="text-2xl font-semibold">Land Owner</span><br>
                        {{-- <span class="card__name">Rully Cahyadi</span> --}}
                        <p class="card-text text-justify mb-4">Memiliki lahan tidak terpakai dan ingin lahan tersebut menghasilkan uang? Bekerja sama dengan kami!</p>
                        <button type="button"
                            class="text-white w-2/3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Contact Us</button>
                    </div>
                </div>
                <div class="card swiper-slide w-1/4 h-full text-center bg-[#D4E1FF] shadow-lg pt-5 pl-5 pr-5 rounded-md">
                    <div class="card__image w-full">
                        <img src="{{ asset('images/works2.png') }}" alt="card image" class="w-64 h-64 justify-center items-center mx-auto">
                    </div>
                    <div class="card__content my-4">
                        <span class="text-2xl font-semibold">Investor</span><br>
                        {{-- <span class="card__name">Rully Cahyadi</span> --}}
                        <p class="card-text text-justify mb-4">Ingin menghasilkan keuntungan berkali kali lipat? Bekerja sama dengan kami! </p>
                        <button type="button"
                            class="text-white w-2/3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Contact Us</button>
                    </div>
                </div> 
                <div class="card swiper-slide w-1/4 h-full text-center bg-[#D4E1FF] shadow-lg pt-5 pl-5 pr-5 rounded-md">
                    <div class="card__image w-full">
                        <img src="{{ asset('images/works3.png') }}" alt="card image" class="w-64 h-64 justify-center items-center mx-auto">
                    </div>
                    <div class="card__content my-4">
                        <span class="text-2xl font-semibold">Telemarketing/Affiliate</span><br>
                        {{-- <span class="card__name">Rully Cahyadi</span> --}}
                        <p class="card-text text-justify mb-4">Memiliki keahlian dalam bidang pemasaran? Bekerja sama dengan kami!</p>
                        <button type="button"
                            class="text-white w-2/3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Contact Us</button>
                    </div>
                </div>
            </div>
        </section>
        {{-- <div class="mt-4">
            <div class="flex justify-center gap-10">
                <a href="#"
                    class="flex flex-col items-center pt-5 bg-[#72E08A] border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="{{ asset('images/work1.png') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Be Our Investor</h5>
                        <p class="mb-3 font-medium text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <div class="w-full mt-2">
                                <button type="button" class="text-white w-full bg-[#29754C] hover:bg-green-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-2xl text-lg px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Hubungi Kami</button>
                            </div>
                    </div>
                    
                </a>

                <a href="#"
                    class="flex flex-col items-center pt-5 bg-[#D4E1FF] border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="{{ asset('images/work2.png') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Land Owner</h5>
                        <p class="mb-3 font-medium text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <div class="w-full mt-2">
                                <button type="button" class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-2xl text-lg px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Hubungi Kami</button>
                            </div>
                    </div>
                </a>
                
            </div>
            <div class="flex justify-center mt-10 gap-10">
                <a href="#"
                    class="flex flex-col items-center pt-5 bg-[#EDA7FF] border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="{{ asset('images/work3.png') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Telemarketing/Affiliater</h5>
                        <p class="mb-3 font-medium text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <div class="w-full mt-2">
                                <button type="button" class="text-white w-full bg-[#9218B1] hover:bg-purple-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-2xl text-lg px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Hubungi Kami</button>
                            </div>
                    </div>
                </a>

                <a href="#"
                    class="flex flex-col items-center pt-5 bg-[#D4E1FF] border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl  dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                        src="{{ asset('images/work4.png') }}" alt="">
                    <div class="flex flex-col justify-between p-4 leading-normal">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Product Content</h5>
                        <p class="mb-3 font-medium text-gray-700 dark:text-gray-400">Here are the biggest enterprise
                            technology acquisitions of 2021 so far, in reverse chronological order.</p>
                            <div class="w-full mt-2">
                                <button type="button" class="text-white w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-2xl text-lg px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Hubungi Kami</button>
                            </div>
                    </div>
                </a>
                
            </div>
        </div> --}}

    </div>
    {{-- ============== /Let's Get Work/ ============== --}}
    
    {{-- ============== Contact Us ============== --}}
    <div class="py-24">
        <div class="flex items-center justify-center gap-10">
            <div class="text-center ">
                <Label class="text-3xl font-bold">Have a Question?<br>Don't Hesitate To Contact Us</Label><br>
                <div class="mt-2">
                    <label class="text-md font-medium">You Can message us by Whatsapp</label><br>
                </div>
                <button type="button" class="text-white mt-3 items-center text-center bg-[#1FAF38] hover:bg-green-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i class="fa-brands fa-whatsapp mr-4"style="font-size:20px;" ></i>0857-1001-1145</button>
            </div>
            <div>
                <img src="{{asset('images/rafiki.png')}}" alt="">
            </div>
        </div>
    </div>
    {{-- ============== /Contact Us/ ============== --}}

@endsection
