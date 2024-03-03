@extends('admin.navbar')

@section('titleAdmin', 'Perumahan')

@section('page')

    <h1 class="h3 mb-2 text-gray-800">Data Perumahan</h1>
    {{-- <p class="mb-4">Data Agent</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Perumahan</h6>
        </div>
        <div class="card-body">
            <form action="/perumahan/create" method="POST" class="row g-3" enctype="multipart/form-data">
                @csrf
                <!-- Bagian kiri form -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                    <div class="mb-3">
                        <label for="nama_perumahan" class="form-label">Nama Perumahan</label>
                        <input type="text" class="form-control" id="nama_perumahan" name="nama_perumahan">
                    </div>
                    <div class="mb-3">
                        <label for="luas" class="form-label">Luas Perumahan</label>
                        <input type="text" class="form-control" id="luas" name="luas">
                    </div>


                </div>
                <!-- Bagian kanan form -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="unit" class="form-label">Jumlah Unit</label>
                        <input type="text" class="form-control" id="unit" name="unit">
                    </div>
                    <div class="mb-3">
                        <label for="lokasi" class="form-label">Lokasi</label>
                        <input type="text" class="form-control" id="lokasi" name="lokasi">
                    </div>
                    <div class="mb-3">
                        <label for="brosur" class="form-label">Brosur</label>
                        <input type="file" class="form-control" id="brosur" name="brosur">
                    </div>

                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>

            </form>
        </div>
    </div>

@endsection
