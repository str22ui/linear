@extends('admin.navbar')

@section('titleAdmin', 'Agent')

@section('page')

    <h1 class="h3 mb-2 text-gray-800">Data Agent</h1>
    {{-- <p class="mb-4">Data Agent</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/agent"><button type="submit" class="btn btn-primary">+ Tambah </button></a>

        </div>
        <div class="card shadow mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Kantor</th>
                                <th>Tipe</th>
                                <th>No Hp</th>
                                <th>Tanggal</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Kantor</th>
                                <th>Tipe</th>
                                <th>No Hp</th>
                                <th>Tanggal</th>
                                <th>Opsi</th>

                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($agents as $agent)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $agent->nama }}</td>
                                    <td>{{ $agent->kantor }}</td>
                                    <td>{{ $agent->tipe }}</td>
                                    <td>{{ $agent->no_hp }}</td>
                                    <td>{{ \Carbon\Carbon::parse($agent->created_at)->format('d/m/Y') }}</td>
                                    <td>
                                        <form method="POST" action="/agent/{{ $agent->id }}">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Edit</button>
                                        </form>
                                    </td>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
