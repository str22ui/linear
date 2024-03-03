@extends('admin.navbar')

@section('titleAdmin', 'Agent')

@section('page')

    <h1 class="h3 mb-2 text-gray-800">Data Agent</h1>
    {{-- <p class="mb-4">Data Agent</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Agent</h6>
        </div>
        <div class="card-body">
            <form action="/agent/create" method="POST" class="row g-3">
                @csrf
                <!-- Bagian kiri form -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Agent</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="tipe" class="form-label">Tipe Agent</label><br>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="tipe"
                            name="tipe">
                            <option selected disabled>-- Pilih --</option>

                            <option value="korporat">Korporat</option>
                            <option value="perorangan">Perorangan</option>
                            </optgroup>
                        </select>

                    </div>
                </div>
                <!-- Bagian kanan form -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="kantor" class="form-label">Kantor Agent</label>
                        <input type="text" class="form-control" id="kantor" name="kantor">
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label">Nomor Telepon Agent</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp">
                    </div>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>

            </form>
        </div>
    </div>

@endsection
