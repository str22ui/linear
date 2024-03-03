@extends('landingPage.layout')
@section('titleLandingPage', 'Form')

@section('content')
    <div class="mx-5 mt-24 mb-10  ">
        <h2 class="text-2xl text-center font-bold mb-6">Please Fill This Form Below </h2>
        <form method="POST" action="/form-create/{{ $units->id }}"
            class=" bg-[#3A5EAA] px-5 py-5 grid grid-cols-2 gap-4 text-col rounded-md">
            @csrf
            <!-- Bagian kiri form -->
            <div class="text-white mx-5 bg-[#3A5EAA] ">
                <button type="submit" name="submit"
                    class="text-blue-500 w-1/4  bg-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">{{ $units->nama_perumahan }}</button>
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
                <div class="mb-5">
                    <label for="domisili" class="form-label block mb-2 text-sm font-medium  dark:text-white">Kota Tempat
                        Tinggal</label>
                    <input type="text" id="city-input" name="domisili"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>

            <!-- Bagian kanan form -->
            <div class="text-white mx-5 mt-11 ">

                <div class="mb-5">
                    <label for="pekerjaan"
                        class="form-label block mb-2 text-sm font-medium  dark:text-white">Pekerjaan</label>
                    <select id="pekerjaaan" name="pekerjaan"
                        class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">-- Pilih --</option>
                        <option value="ASN">ASN</option>
                        <option value="BUMN">BUMN</option>
                        <option value="Swasta">Swasta</option>
                        <option value="Dll">Dll</option>

                    </select>
                    {{-- <input type="text" id="occupation-input" name="pekerjaan"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> --}}
                </div>

                {{-- ===== Perlu Ditambah ====== --}}
                <div class="mb-5">
                    <label for="domisili" class="form-label block mb-2 text-sm font-medium  dark:text-white">Nama Kantor
                    </label>
                    <input type="text" id="city-input" name="nama_kantor"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5 hidden">

                    <input type="text" id="city-input" name="perumahan" value=" {{ $units->nama_perumahan }}"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                {{-- ===== Perlu Ditambah === --}}
                <div class="mb-5">
                    <label for="sumber_informasi" class="form-label block mb-2 text-sm font-medium  dark:text-white">Dapat
                        Informasi Dari</label>
                    <select id="info-input" name="sumber_informasi"
                        class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">-- Pilih --</option>
                        <option value="Instagram Linear">Instagram Linear</option>
                        <option value="Instagram Perumahan">Instagram Perumahan</option>
                        <option value="Youtube Linear">Youtube Linear</option>
                        <option value="Tiktok">Tiktok</option>
                        <option value="Brosur">Brosur</option>
                        <option value="Spanduk">Spanduk</option>
                        <option value="Walk in">Walk in Customer</option>
                        <option value="agent">Agent</option>
                        <option value="Dll">Dll</option>
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
                        <label for="kantor"
                            class="form-label block mb-2 text-sm font-medium  dark:text-white">Kantor</label>
                        <select id="kantor" name="kantor"
                            class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="pilih">-- Pilih --</option>
                            @foreach ($agents as $agent)
                                <option value="{{ $agent->kantor }}">{{ $agent->kantor }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class=" w-full mx-auto  text-left r">
                <button type="submit" name="submit"
                    class="text-blue-500 w-1/4 ml-5 bg-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Submit</button>
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
        if (infoInput.value === 'Agent') {
            agentDiv.style.display = 'flex'; // Menampilkan div dengan class 'agent'
        } else {
            agentDiv.style.display = 'none'; // Menyembunyikan div dengan class 'agent'
        }
    });
</script>
