@extends('landingPage.layout')
@section('titleLandingPage', 'Form')

@section('content')
    <div class="mx-5 mt-24 mb-10  ">
        <h2 class="text-2xl text-center font-bold mb-6">Form Perumahan Naputa </h2>
        <form action="" class=" bg-[#3A5EAA] px-5 py-5 grid grid-cols-2 gap-4 text-col rounded-md">
            <!-- Bagian kiri form -->
            <div class="text-white mx-5 bg-[#3A5EAA] ">
                <div class="mb-5">
                    <label for="name-input" class="block mb-2 text-sm font-medium  dark:text-white">Nama</label>
                    <input type="text" id="name-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="email-input" class="block mb-2 text-sm font-medium  dark:text-white">Email</label>
                    <input type="email" id="email-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="phone-input" class="block mb-2 text-sm font-medium  dark:text-white">Nomor
                        Telepon</label>
                    <input type="tel" id="phone-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
            </div>

            <!-- Bagian kanan form -->
            <div class="text-white mx-5 ">
                <div class="mb-5">
                    <label for="city-input" class="block mb-2 text-sm font-medium  dark:text-white">Kota Tempat
                        Tinggal</label>
                    <input type="text" id="city-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="occupation-input" class="block mb-2 text-sm font-medium  dark:text-white">Pekerjaan</label>
                    <input type="text" id="occupation-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-5">
                    <label for="info-input" class="block mb-2 text-sm font-medium  dark:text-white">Dapat
                        Informasi Dari</label>
                    <select id="info-input"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
                        <label for="occupation-input" class="block mb-2 text-sm font-medium  dark:text-white">Nama
                            Agent</label>
                        <input type="text" id="occupation-input"
                            class="bg-gray-50 border w-full border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                    <div class="w-1/2">
                        <label for="occupation-input" class="block mb-2 text-sm font-medium  dark:text-white">Kantor</label>
                        <input type="text" id="occupation-input"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    </div>
                </div>
            </div>



        </form>
        <div class=" w-full mx-auto mt-8 text-center">
            <button type="button"
                class="text-white  mx-auto w-1/4 bg-[#3A5EAA] hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 ">Submit</button>
        </div>

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