@extends('landingPage.layout')
@section('titleLandingPage', 'Linear Indonesia')

@section('content')
    <div class="mb-10 ">

        <img class="w-1/2 md:w-1/4 mx-auto mt-10" src="{{ asset('images/logo.png') }}" alt="" width="">

    </div>

    {{-- ============== Our Ongoing Projects ============== --}}

    <div class="py-10 bg-[#3A5EA8]">
        <div class="text-center mb-10 text-white">
            <h1 class="text-2xl md:text-3xl"><span class="font-bold italic">" Project Planning</span> with <span
                    class="font-bold italic">Creative Solution </span> </h1>
            <h1 class="text-2xl md:text-3xl">Product Branding "</h1>
        </div>

        <div class="swiper mySwiper ml-10">
            <div class="swiper-wrapper ml-10">
                @foreach ($unit as $item)
                    <div class="swiper-slide">
                        <div class="max-w-sm w-5/6 sm:w-full bg-[#D4E1FF] border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-4 relative"
                            style="height: 500px; min-width: 280px;">
                            <a href="#" class="image-container">
                                @if ($item->foto)
                                    <img class="rounded-t-lg w-full sm:w-full" src="{{ asset('storage/' . $item->foto) }}"
                                        alt="" />
                                @else
                                    <img src="https://source.unsplash.com/1417x745/?house" class="rounded-t-lg w-full"
                                        alt="...">
                                @endif
                            </a>
                            <div class="p-5">
                                <a href="#">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                        {{ $item->nama_perumahan }}
                                    </h5>
                                </a>
                                <ul class="text-xl">
                                    <li><i class="fa-solid fa-landmark-flag mr-3"></i><label
                                            for="">{{ $item->luas }} m<sup>2</sup></label></li>
                                    <li><i class="fa-solid fa-house mr-3"></i><label for="">{{ $item->unit }}
                                            Unit</label></li>
                                    <li><i class="fa-solid fa-location-dot ml-1 mr-4 "></i><label
                                            for="">{{ $item->lokasi }}, {{ $item->kota }}</label></li>
                                </ul>
                                <div class="absolute bottom-0 left-0 right-0 text-center mb-4">
                                    @if ($item->status !== 'sold out')
                                        <a href="/form/{{ $item->id }}"
                                            class="inline-block w-full sm:w-5/6 px-3 py-2 text-xl font-medium text-white bg-blue-700 rounded-2xl hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                                            style="margin-right:10px;">
                                            Download Marketing Kit
                                        </a>
                                    @else
                                        <button disabled
                                            class="inline-block w-full sm:w-5/6 px-3 py-2 text-xl font-medium text-white bg-gray-400 rounded-2xl cursor-not-allowed">
                                            Sold Out
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>



    </div>



@endsection
