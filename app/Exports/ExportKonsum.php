<?php

namespace App\Exports;

use App\Models\Konsumen;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

class ExportKonsum implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function view(): View
    {
        //  
        $konsumen = Konsumen::all();
        return view('admin.page.data.konsumen.table', ['konsumen' => $konsumen]);
    }
}
