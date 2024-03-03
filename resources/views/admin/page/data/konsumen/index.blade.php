@extends('admin.navbar')

@section('titleAdmin', 'Agent')

@section('page')

    <h1 class="h3 mb-2 text-gray-800">Data Agent</h1>
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
                                <th>No hp</th>
                                <th>Domisili</th>
                                <th>Email</th>
                                <th>Pekerjaan</th>
                                <th>Sumber</th>
                                <th>Agent</th>
                                <th>Kantor</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No hp</th>
                                <th>Domisili</th>
                                <th>Email</th>
                                <th>Pekerjaan</th>
                                <th>Sumber</th>
                                <th>Agent</th>
                                <th>Kantor</th>
                                <th>Tanggal</th>

                            </tr>
                        </tfoot>
                        <tbody>

                            <tr>
                                @foreach ($konsumen as $konsum)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $konsum->nama }}</td>
                                <td>{{ $konsum->no_hp }}</td>
                                <td>{{ $konsum->domisili }}</td>
                                <td>{{ $konsum->email }}</td>
                                <td>{{ $konsum->pekerjaan }}</td>
                                <td>{{ $konsum->sumber_informasi }}</td>
                                <td>{{ $konsum->agent_id }}</td>
                                <td>{{ $konsum->kantor }}</td>
                                <td>{{ \Carbon\Carbon::parse($konsum->created_at)->format('d/m/Y') }}</td>
                                @endforeach



                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
