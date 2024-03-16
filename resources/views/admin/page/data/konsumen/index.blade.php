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
                <a href="{{ url('konsumen/export/excel') }}">
                    {{-- <a href="{{ route('konsumen.export.excel') }}"> --}}
                    <button id="exportButton" class="btn btn-primary mb-4">Export Excel</button>
                </a>

                <div class="table-responsive">
                    @include('admin.page.data.konsumen.table', $konsumen)
                </div>
            </div>
        </div>
    </div>

    </div>
    <!-- Letakkan di dalam bagian head -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fungsi untuk mengonversi tabel HTML menjadi file Excel
            function exportTableToExcel(tableID, filename = '') {
                var downloadLink;
                var dataType = 'application/vnd.ms-excel';
                var tableSelect = document.getElementById(tableID);
                var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

                // Spesifikasi format file dan nama file
                filename = filename ? filename + '.xls' : 'excel_data.xls';

                // Buat link unduhan
                downloadLink = document.createElement("a");

                document.body.appendChild(downloadLink);

                if (navigator.msSaveOrOpenBlob) {
                    var blob = new Blob(['\ufeff', tableHTML], {
                        type: dataType
                    });
                    navigator.msSaveOrOpenBlob(blob, filename);
                } else {
                    // Buat link unduhan
                    downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

                    // Nama file
                    downloadLink.download = filename;

                    // Trigger click pada link unduhan
                    downloadLink.click();
                }
            }

            // Event handler untuk tombol "Export to Excel"
            $('#exportButton').click(function() {
                exportTableToExcel('dataTable', 'konsumen_data');
            });
        });
    </script>

@endsection
