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
            <form action="#" method="POST" class="row g-3">
                @csrf
                <!-- Bagian kiri form -->
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Agent</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipe Agent</label><br>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
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
                        <label for="office" class="form-label">Kantor Agent</label>
                        <input type="text" class="form-control" id="office" name="office">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Nomor Telepon Agent</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
