@extends('landingPage.layout')
@section('titleLandingPage', 'Download pdf')

@section('content')
<div class="mt-24">
    <a href="{{ url('/download-brosur/' . $unit->id) }}" target="_blank"
        class="text-white mx-auto w-1/4 bg-[#3A5EAA] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Download
        PDF</a>
</div>
@endsection