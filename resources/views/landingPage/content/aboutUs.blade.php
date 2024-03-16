@extends('landingPage.layout')
@section('titleLandingPage', 'About Us')

@section('content')
    <div class="mt-18 py-5">
        <div class="">
            <img src="{{ asset('images/who1.jpg') }}" class="w-full"alt="">
            <img src="{{ asset('images/who2.jpg') }}"class="w-full" alt="">
            <img src="{{ asset('images/who3.jpg') }}"class="w-full" alt="">
            <img src="{{ asset('images/who4.jpg') }}" class="w-full" alt="">
        </div>
    </div>

@endsection
