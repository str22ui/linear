@extends('admin.navbar')

@section('titleAdmin', 'Konsumen')

@section('page')

    <h1 class="h3 mb-2 text-gray-800">Data Konsumen</h1>
    {{-- <p class="mb-4">Data Agent</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">


        </div>
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Perumahan</th>
                                <th>No hp</th>
                                <th>Domisili</th>
                                <th>Email</th>
                                <th>Pekerjaan</th>
                                <th>Kantor</th>
                                <th>Sumber</th>
                                <th>Agent</th>
                                <th>Kantor</th>
                                <th>Tanggal</th>
                                <th>Opsi</th>

                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Perumahan</th>
                                <th>No hp</th>
                                <th>Domisili</th>
                                <th>Email</th>
                                <th>Pekerjaan</th>
                                <th>Kantor</th>
                                <th>Sumber</th>
                                <th>Agent</th>
                                <th>Kantor</th>
                                <th>Tanggal</th>
                                <th>Opsi</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($konsumen as $konsum)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $konsum->nama }}</td>
                                    <td>{{ $konsum->perumahan }}</td>
                                    <td>{{ $konsum->no_hp }}</td>
                                    <td>{{ $konsum->domisili }}</td>
                                    <td>{{ $konsum->email }}</td>
                                    <td>{{ $konsum->pekerjaan }}</td>
                                    <td>{{ $konsum->nama_kantor }}</td>
                                    <td>{{ $konsum->sumber_informasi }}</td>
                                    <td>{{ $konsum->agent_id }}</td>
                                    <td>{{ $konsum->agent ? $konsum->agent->nama : 'Tidak Ada' }}</td>
                                    <td>{{ $konsum->kantor }}</td>
                                    <td>{{ \Carbon\Carbon::parse($konsum->created_at)->format('d/m/Y') }}</td>
                                    <td>
                                        <form action="{{ route('konsumen.destroy', $konsum->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                    
                            @endforeach
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
