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

                </div>
            </a>
        </div>
    </div>
    {{-- ============== /Who Are We/ ============== --}}

    {{-- <============== Our Services ==============>  --}}
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
                        <a href="/form"
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

    {{-- ============== /Company Portofolio/ ============== --}}

    {{-- ============== Chekout Youtube ============== --}}
    {{-- ============== Chekout Youtube ============== --}}

    {{-- ============== /Chekout Youtube/ ============== --}}

    {{-- ============== Let's Get Work ============== --}}
    \
    {{-- ============== /Let's Get Work/ ============== --}}

    {{-- ============== Contact Us ============== --}}
    <div class="py-24">
        <div class="flex items-center justify-center gap-10">
            <div class="text-center ">
                <Label class="text-3xl font-bold">Have a Question?<br>Don't Hesitate To Contact Us</Label><br>
                <div class="mt-2">
                    <label class="text-md font-medium">You Can message us by Whatsapp</label><br>
                </div>
                <button type="button"
                    class="text-white mt-3 items-center text-center bg-[#1FAF38] hover:bg-green-500 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"><i
                        class="fa-brands fa-whatsapp mr-4"style="font-size:20px;"></i>0857-1001-1145</button>
            </div>
            <div>
                <img src="{{ asset('images/rafiki.png') }}" alt="">
            </div>
        </div>
    </div>
    {{-- ============== /Contact Us/ ============== --}}

@endsection
