@extends('admin.navbar')

@section('titleAdmin', 'Perumahan')

@section('page')

    <h1 class="h3 mb-2 text-gray-800">Data Perumahan</h1>
    {{-- <p class="mb-4">Data Agent</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/perumahan"><button type="submit" class="btn btn-primary">+ Tambah </button></a>

        </div>
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>

                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama Perumahan</th>
                                <th>Luas</th>
                                <th>Unit</th>
                                <th>Lokasi</th>

                                <th>Brosur</th>
                                <th>Pricelist</th>
                                <th>Tanggal</th>
                                <th>Opsi</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>

                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama Perumahan</th>
                                <th>Luas</th>
                                <th>Unit</th>
                                <th>Lokasi</th>

                                <th>Brosur</th>
                                <th>Pricelist</th>
                                <th>Tanggal</th>
                                <th>Opsi</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($units as $unit)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- <td>{{ $unit->foto }}</td> --}}
                                    <td>
                                        @if ($unit->foto)
                                            <img class="rounded-t-lg" src="{{ asset('storage/' . $unit->foto) }}"
                                                alt="" style="width: 100px;" />
                                        @else
                                            <img src="https://source.unsplash.com/1417x745/?house"
                                                class="d-block w-100 rounded-4" alt="..." style="width: 100px;">
                                        @endif
                                    </td>
                                    <td>{{ $unit->nama_perumahan }}</td>
                                    <td>{{ $unit->luas }}</td>
                                    <td>{{ $unit->unit }}</td>
                                    <td>{{ $unit->lokasi }}</td>
                                    {{-- <td>{{ $unit->brosur }}</td> --}}
                                    <td>
                                        @if ($unit->brosur)
                                            <a href="{{ asset('storage/' . $unit->brosur) }}" target="_blank">Download
                                                Brosur</a>
                                        @else
                                            Tidak Ada Brosur
                                        @endif
                                    </td>
                                    {{-- <td>{{ $unit->pricelist }}</td> --}}
                                    <td>
                                        @if ($unit->pricelist)
                                            <a href="{{ asset('storage/' . $unit->brosur) }}" target="_blank">Download Brosur</a>
                                        @else
                                            Tidak Ada Brosur
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($unit->created_at)->format('d/m/Y') }}</td>
                                    <td>
                                        <form method="POST" action="/perumahan/{{ $unit->id }}">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
