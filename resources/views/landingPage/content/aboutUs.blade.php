@extends('landingPage.layout')
@section('titleLandingPage', 'About Us')

@section('content')
    <div class="mt-24 py-5">
        <div class="flex mx-auto  justify-center items-center gap-14">
            <div class="w-1/2">
                <h1 class="text-3xl font-bold">Who Are We?</h1>
                <p class="text-lg">Linear Indonesia merupakan sebuah perusahaan yang didirikan pada tahun 2022, Linear
                    Indonesia merupakan
                    perusahaan yang bergerak di bidang "Creative Solution Product Branding". Dengan adanya Linear Indonesia,
                    harapan kami dapat memberikan peningkatan dari setiap produk yang anda miliki baik dari "Value dan Brand
                    Image" maupun dari produk itu sendiri. Kami mengemas produk anda dengan desain yang sederhana dan
                    kreatif, yang akan didukung strategi pemasaran yang terarah dan sistematis, sehingga dapat meningkatkan
                    awerness dan sales akan produk itu sendiri</p>
            </div>
            <div class="flex">
                <img src="{{ asset('images/about1.png') }}" alt="">
            </div>
        </div>
        <div class="flex mx-auto  justify-center items-center gap-14 mt-10 ">
            <div class="flex">
                <img src="{{ asset('images/about2.png') }}" alt="">
            </div>
            <div class="w-1/2 text-right text-lg b">
                <h1 class="text-3xl font-bold">Our Mission</h1>
                <h3 class="text-xl font-semibold">We want to make a positive impact on your business!</h3>
                {{-- <div class="w-4/5 float-end"> --}}
                <p>Kami Jadikan produk Anda memiliki nilai dan Brand Image yang baik, dengan mengemasnya secara
                    sederhana
                    dalam keindahan sebuah desain. Dan pasarkan dengan strategi yang sistematis, terarah, dan flexible
                    baik
                    dalam produk ataupun pelayanan</p>
                {{-- </div> --}}
            </div>
        </div>

        <div class="mt-4">
            <div class="text-center">
                <h1 class="text-3xl font-bold">Meet Our Team</h1>
            </div>
            <section class="swiper mySwiper">
                <div class="swiper-wrapper ">
                    <div class="card swiper-slide w-1/4 text-center bg-[#D4E1FF] shadow-lg pt-5 pl-5 pr-5 rounded-md">
                        <div class="card__image w-full">
                            <img src="{{ asset('images/photo.jpg') }}" alt="card image" class="w-64 rounded-full justify-center items-center mx-auto">
                        </div>
                        <div class="card__content my-4">
                            <span class="text-2xl font-semibold">Rully Cahyadi</span><br>
                            {{-- <span class="card__name">Rully Cahyadi</span> --}}
                            <p class="card-text text-justify mb-4">Kelahiran Jakarta 1974. Lulusan Manajemen Informatika.
                                Berpengalaman 10
                                Tahun di bank swasta nasional di IT Grup di Bank Rama dan Bank Bumiputera, terakhir
                                membidangi Elektronik Banking sebagai IT Elektronik Banking Unit Head. </p>
                            <button type="button"
                                class="text-white w-2/3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">View
                                More</button>
                        </div>
                    </div>
                    <div class="card swiper-slide w-1/4 text-center bg-[#D4E1FF] shadow-lg pt-5 pl-5 pr-5 rounded-md">
                        <div class="card__image w-full">
                            <img src="{{ asset('images/photo.jpg') }}" alt="card image" class="w-64 rounded-full justify-center items-center mx-auto">
                        </div>
                        <div class="card__content my-4">
                            <span class="text-2xl font-semibold">Reza Rangkuti</span><br>
                            {{-- <span class="card__name">Rully Cahyadi</span> --}}
                            <p class="card-text text-justify mb-4">Kelahiran Jakarta 1974. Lulusan Manajemen Informatika.
                                Berpengalaman 10
                                Tahun di bank swasta nasional di IT Grup di Bank Rama dan Bank Bumiputera, terakhir
                                membidangi Elektronik Banking sebagai IT Elektronik Banking Unit Head. </p>
                            <button type="button"
                                class="text-white w-2/3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">View
                                More</button>
                        </div>
                    </div> <div class="card swiper-slide w-1/4 text-center bg-[#D4E1FF] shadow-lg pt-5 pl-5 pr-5 rounded-md">
                        <div class="card__image w-full">
                            <img src="{{ asset('images/photo.jpg') }}" alt="card image" class="w-64 rounded-full justify-center items-center mx-auto">
                        </div>
                        <div class="card__content my-4">
                            <span class="text-2xl font-semibold">Rangga Sadikin</span><br>
                            {{-- <span class="card__name">Rully Cahyadi</span> --}}
                            <p class="card-text text-justify mb-4">Kelahiran Jakarta 1974. Lulusan Manajemen Informatika.
                                Berpengalaman 10
                                Tahun di bank swasta nasional di IT Grup di Bank Rama dan Bank Bumiputera, terakhir
                                membidangi Elektronik Banking sebagai IT Elektronik Banking Unit Head. </p>
                            <button type="button"
                                class="text-white w-2/3 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-lg px-5 py-2 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">View
                                More</button>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
    </div>

@endsection
