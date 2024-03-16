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

                <td>
                    @if ($konsum->agent)
                        {{ $konsum->agent->nama }}
                    @else
                        No Agent Assigned
                    @endif
                </td>

                <td>
                    @if ($konsum->kantor)
                        {{ $konsum->agent->nama }}
                    @else
                        No Office Assigned
                    @endif
                </td>

                <td>{{ \Carbon\Carbon::parse($konsum->created_at)->format('d/m/Y') }}</td>
                <td>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">
                        Delete
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Penghapusan</h5>
                {{-- <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button> --}}
            </div>
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <form action="/konsumen/delete/{{ $konsum->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>
