@extends('landingPage.layout')
@section('titleLandingPage', 'Form')

@section('content')
    <div class="mx-5 mt-24 mb-10  ">
        @foreach ($errors->all() as $error)
            <h1>{{ $error }}</h1>
        @endforeach
        <h2 class="text-2xl text-center font-bold mb-6">Form Perumahan {{ $units->nama_perumahan }} </h2>
        <form method="POST" action="/form/{id}/create" class=" bg-[#3A5EAA] px-5 py-5 grid grid-cols-2 gap-4 text-col rounded-md">
            @csrf
            <!-- Bagian kiri form -->
            <div class="text-white mx-5 bg-[#3A5EAA] ">
                <div class="mb-5">
                    <label for="nama" class="form-label block mb-2 text-sm font-medium  dark:text-white">Nama</label>
                    <input type="text" id="name-input" name="nama"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="email" class="form-label block mb-2 text-sm font-medium  dark:text-white">Email</label>
                    <input type="email" id="email-input" name="email"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="no_hp" class="form-label block mb-2 text-sm font-medium  dark:text-white">Nomor
                        Telepon</label>
                    <input type="tel" id="phone-input" name="no_hp"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>

            <!-- Bagian kanan form -->
            <div class="text-white mx-5 ">
                <div class="mb-5">
                    <label for="domisili" class="form-label block mb-2 text-sm font-medium  dark:text-white">Kota Tempat
                        Tinggal</label>
                    <input type="text" id="city-input" name="domisili"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="pekerjaan" class="form-label block mb-2 text-sm font-medium  dark:text-white">Pekerjaan</label>
                    <input type="text" id="occupation-input" name="pekerjaan"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="sumber_informasi" class="form-label block mb-2 text-sm font-medium  dark:text-white">Dapat
                        Informasi Dari</label>
                    <select id="info-input" name="sumber_informasi"
                        class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="instagram">-- Pilih --</option>
                        <option value="instagram">Instagram</option>
                        <option value="youtube">Youtube</option>
                        <option value="tiktok">Tiktok</option>
                        <option value="brosur">Brosur</option>
                        <option value="spanduk">Spanduk</option>
                        <option value="walk">Walk in Customer</option>
                        <option value="agent">Agent</option>
                    </select>
                </div>
                <div class="agent flex w-full gap-2">
                    <div class="w-1/2">
                        <label for="agent_id" class="form-label block mb-2 text-sm font-medium  dark:text-white">Nama
                            Agent</label>
                            <select id="agent_id" name="agent_id"
                                class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="pilih">-- Pilih --</option>
                                @foreach ($agents as $agent)
                                    <option value="{{ $agent->id }}">{{ $agent->nama }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="w-1/2">
                        <label for="kantor" class="form-label block mb-2 text-sm font-medium  dark:text-white">Kantor</label>
                            <select id="kantor" name="kantor"
                                class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option value="pilih">-- Pilih --</option>
                                @foreach ($agents as $agent)
                                    <option value="{{ $agent->id }}">{{ $agent->kantor }}</option>
                                @endforeach
                            </select>
                    </div>
                </div>
            </div>

            <div class=" w-full mx-auto mt-8 text-center">
                <button type="submit" name="submit"
                    class="text-white  mx-auto w-1/4 bg-[#3A5EAA] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Submit</button>
                <a href="{{ route('download.brosur', ['id' => $units->id]) }}" target="_blank" class="text-white mx-auto w-1/4 bg-[#3A5EAA] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Download PDF</a>
            </div>
        </form>
    </div>

@endsection
<script>
    // Mendapatkan elemen dropdown
    var infoInput = document.getElementById('info-input');

    // Mendapatkan elemen div dengan class 'agent'
    var agentDiv = document.querySelector('.agent');

    // Menyembunyikan div dengan class 'agent' secara default
    agentDiv.style.display = 'none';

    // Menambahkan event listener untuk mendeteksi perubahan pada dropdown
    infoInput.addEventListener('change', function() {
        // Jika opsi yang dipilih adalah 'Agent', maka tampilkan div dengan class 'agent', jika tidak, sembunyikan
        if (infoInput.value === 'agent') {
            agentDiv.style.display = 'flex'; // Menampilkan div dengan class 'agent'
        } else {
            agentDiv.style.display = 'none'; // Menyembunyikan div dengan class 'agent'
        }
    });
</script>