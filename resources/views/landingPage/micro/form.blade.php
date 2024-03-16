@extends('landingPage.layout')
@section('titleLandingPage', 'Form')

@section('content')
    <div class="mx-5 mt-24 mb-10  ">

        <div class="md:mb-10 text-center pt-18">
            <img class="w-3/4 mx-auto md:w-1/4" src="{{ asset('images/logo.png') }}" alt="">
            {{-- <h2 class="text-2xl text-center font-bold mb-6">Please Fill This Form Below </h2> --}}
            <h2 class="text-xl font-bold mt-6 text-blue-700 "><label for="" class="text-blue-900 uppercase">[
                    {{ $units->nama_perumahan }}]</label> E-Booklet & Pricelist Request</h2>

        </div>
        <form method="POST" action="/form-create/{{ $units->id }}"
            class="px-5 py-5 grid grid-cols-1 md:grid-cols-2 gap-4 text-col rounded-md">
            @csrf
            <!-- Bagian kiri form -->
            <div class="text-blue-700 mx-5  ">
                {{-- <button type="button" name="button"
                    class="text-blue-500 w-full md:w-1/4 bg-white hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">{{ $units->nama_perumahan }}</button> --}}
                <div class="mb-5 relative">
                    <label for="nama" class="form-label block mb-2 text-sm font-medium dark:text-white">Nama</label>
                    <div class="input-with-icon">
                        <input type="text" id="name-input" name="nama"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 pl-10 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukkan nama" required>
                        <span class="icon">

                            <i class="fas fa-user text-gray-400"></i>
                        </span>
                    </div>
                </div>

                <div class="mb-5 relative">
                    <label for="email" class="form-label block mb-2 text-sm font-medium  dark:text-white">Email</label>
                    <div class="input-with-icon">
                        <input type="email" id="email-input" name="email"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 "
                            placeholder="Masukkan email">
                        <span class="icon">

                            <i class="fas fa-envelope text-gray-400"></i>
                        </span>
                    </div>
                </div>
                <div class="mb-5 relative">
                    <label for="no_hp" class="form-label block mb-2 text-sm font-medium  dark:text-white">Nomor
                        Telepon</label>
                    <div class="input-with-icon">
                        <input type="tel" id="phone-input" name="no_hp"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukkan no hp" required>
                        <span class="icon">

                            <i class="fas fa-phone text-gray-400"></i>
                        </span>
                    </div>
                </div>
                <div class="mb-5 relative">
                    <label for="domisili" class="form-label block mb-2 text-sm font-medium  dark:text-white">Kota Tempat
                        Tinggal</label>
                    <div class="input-with-icon">
                        <input type="text" id="city-input" name="domisili"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukkan Kota" required>
                        <span class="icon">

                            <i class="fas fa-city text-gray-400"></i>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Bagian kanan form -->
            <div class="text-blue-700 mx-5  ">

                <div class="mb-5">
                    <label for="pekerjaan"
                        class="form-label block mb-2 text-sm font-medium  dark:text-white">Pekerjaan</label>
                    <select id="pekerjaaan" name="pekerjaan"
                        class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">-- Pilih --</option>
                        <option value="ASN">ASN</option>
                        <option value="BUMN">BUMN</option>
                        <option value="Pegawai Swasta">Pegawai Swasta</option>
                        <option value="Wiraswasta">Wiraswasta</option>
                        <option value="Dll">Dll</option>

                    </select>
                    {{-- <input type="text" id="occupation-input" name="pekerjaan"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"> --}}
                </div>

                {{-- ===== Perlu Ditambah ====== --}}
                <div class="mb-5 relative">
                    <label for="domisili" class="form-label block mb-2 text-sm font-medium  dark:text-white">Nama Kantor
                    </label>
                    <div class="input-with-icon">

                        <input type="text" id="city-input" name="nama_kantor"
                            class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Masukkan nama kantor" required>
                        <span class="icon">

                            <i class="fas fa-briefcase text-gray-400"></i>
                        </span>
                    </div>
                </div>
                <div class="mb-5 hidden">

                    <input type="text" id="city-input" name="perumahan" value=" {{ $units->nama_perumahan }}"
                        class="form-control bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                {{-- ===== Perlu Ditambah === --}}
                <div class="mb-5">
                    <label for="sumber_informasi" class="form-label block mb-2 text-sm font-medium  dark:text-white">Dapat
                        Informasi Dari</label>

                    <div id="info-input" class="flex flex-wrap ">
                        <label><input type="radio" name="sumber_informasi" value="Instagram Linear"
                                class="mr-2">Instagram
                            Linear</label>
                        <label><input type="radio" name="sumber_informasi"
                                value="Tiktok"class="
                                                                                                                                                                                    mr-2">Tiktok</label>
                        <label><input type="radio" name="sumber_informasi" value="Brosur"class="mr-2">Brosur</label>
                        <label><input type="radio" name="sumber_informasi" value="Spanduk"class="mr-2">Spanduk</label>
                        <label><input type="radio" name="sumber_informasi" value="Youtube Linear"
                                class="mr-2">Youtube
                            Linear</label>


                        <label><input type="radio" name="sumber_informasi" value="Instagram Perumahan"
                                class="mr-2">Instagram
                            Perumahan</label>
                        <label><input type="radio" name="sumber_informasi" value="Walk in"class="mr-2">Walk in
                            Customer</label>
                        <label><input type="radio" name="sumber_informasi" value="agent"class="mr-2">Agent</label>
                        <label><input type="radio" name="sumber_informasi" value="Dll"class="mr-2">Dll</label>
                    </div>
                </div>
                <div class="agent flex w-full gap-4">
                    <div class="w-full">
                        <label for="agent_id" class="form-label block mb-2 text-sm font-medium dark:text-white">Nama
                            Agent</label>
                        <select id="agent_id" name="agent_id"
                            class="form-select bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="pilih">-- Pilih --</option>
                            @foreach ($agents as $agent)
                                <option value="{{ $agent->id }}">{{ $agent->nama }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="w-full">
                        <label for="kantor"
                            class="form-label block mb-2 text-sm font-medium dark:text-white">Kantor</label>
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

            <div class="w-full flex justify-center md:justify-start md:ml-5  ">
                <button type="submit" name="submit"
                    class="text-white w-3/4 bg-blue-700 hover:bg-blue-800 hover:text-white focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Submit</button>
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
