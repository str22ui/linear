@extends('landingPage.layout')
@section('titleLandingPage', 'Our Services')

@section('content')
    <div class="mt-24 py-5">
        <div class="mx-5">
            <ul class="flex justify-between text-2xl font-bold text-[#21448E]">
                <li>Project Development</li>
                <li>Digital Media Development</li>
                <li>Advertising Development</li>
            </ul>
        </div>
        <div class="mx-5 mt-5">
            <h2 class="text-xl font-bold">Management Development Project</h2>
            <span>Kami mengembangkan dan mengelola lahan dan modal yang klien miliki untuk dijadikan proyek properti (perumahan)</span>
        </div>
        <div class="flex gap-12 mx-5">
            <div class="w-1/6 ">
                <div class="bg-[#D4E1FF] rounded-lg">
                    <img src="{{asset('images/services1.png')}}" alt="">
                </div>
                <div class="bg-[#B3CBFF] text-center text-2xl font-semibold">
                    <span>Full Development</span>
                </div>
            </div>
            <div class="w-1/6 ">
                <div class="bg-[#D4E1FF] rounded-lg">
                    <img src="{{asset('images/services1.png')}}" alt="">
                </div>
                <div class="bg-[#B3CBFF] text-center text-2xl font-semibold">
                    <span>Half Development A</span>
                </div>
            </div>
            <div class="w-1/6 ">
                <div class="bg-[#D4E1FF] rounded-lg">
                    <img src="{{asset('images/services1.png')}}" alt="">
                </div>
                <div class="bg-[#B3CBFF] text-center text-2xl font-semibold">
                    <span>Half Development B</span>
                </div>
            </div>
        </div>
        <div class="mx-5 mt-5">
            <h2 class="text-xl font-bold">Developer Property</h2>
            <span>Kami menyiapkan lahan yang nantinya akan dikembangkan dan dikelola untuk menjadi proyek properti (perumahan) dan akan bekerjasama dengan beberapa Investor</span>
        </div>
        <div class="flex gap-12 mx-5">
            <div class="w-1/6 ">
                <div class="bg-[#D4E1FF] rounded-lg">
                    <img src="{{asset('images/services1.png')}}" alt="">
                </div>
                <div class="bg-[#B3CBFF] text-center text-2xl font-semibold">
                    <span>Full Development</span>
                </div>
            </div>
            <div class="w-1/6 ">
                <div class="bg-[#D4E1FF] rounded-lg">
                    <img src="{{asset('images/services1.png')}}" alt="">
                </div>
                <div class="bg-[#B3CBFF] text-center text-2xl font-semibold">
                    <span>Full Development</span>
                </div>
            </div>
            <div class="w-1/6 ">
                <div class="bg-[#D4E1FF] rounded-lg">
                    <img src="{{asset('images/services1.png')}}" alt="">
                </div>
                <div class="bg-[#B3CBFF] text-center text-2xl font-semibold">
                    <span>Full Development</span>
                </div>
            </div>
        </div>
    </div>
    
@endsection