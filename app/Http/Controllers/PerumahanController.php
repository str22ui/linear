<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class PerumahanController extends Controller
{

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'foto' => 'image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'nama_perumahan' => 'required',
            'luas' => 'required',
            'unit' => 'required',
            'lokasi' => 'required',
            'status' => 'required',
            'brosur' => 'required|file|max:20480|mimes:pdf,doc,docx,ppt,pptx',
            'pricelist' => 'required|file|max:20480|mimes:pdf,doc,docx,ppt,pptx'
        ]);

        if ($request->hasFile('foto')) {
            $validatedData['foto'] = $request->file('foto')->storeAs('foto-perumahan', uniqid() . '.' . $request->file('foto')->extension());
        }
        if ($request->hasFile('brosur')) {
            $validatedData['brosur'] = $request->file('brosur')->storeAs('brosur', uniqid() . '.' . $request->file('brosur')->extension());
        }
        if ($request->hasFile('pricelist')) {
            $validatedData['pricelist'] = $request->file('pricelist')->storeAs('pricelist', uniqid() . '.' . $request->file('pricelist')->extension());
        }
        Unit::create($validatedData);
        return redirect('/dashPerumahan');
    }

    // public function downloadBrosur($id)
    // {
    //     $brosur = DB::table('units')->where('id', $id)->first();
    //     $pathToFile = storage_path("app/public/{$brosur->brosur}");
    //     return Response::download($pathToFile);
    // }
    public function downloadBrosur($id)
    {
        $brosur = DB::table('units')->where('id', $id)->first();

        if ($brosur) {
            $pathToFile = storage_path("app/public/{$brosur->brosur}");
            return Response::download($pathToFile);
        } else {
            // Tambahkan logika untuk menangani jika brosur tidak ditemukan
            return redirect()->back()->with('error', 'Brosur tidak ditemukan');
        }
    }
    public function downloadPricelist($id)
    {
        $pricelist = DB::table('units')->where('id', $id)->first();

        if ($pricelist) {
            $pathToFile = storage_path("app/public/{$pricelist->pricelist}");
            return Response::download($pathToFile);
        } else {
            // Tambahkan logika untuk menangani jika brosur tidak ditemukan
            return redirect()->back()->with('error', 'Pricelist tidak ditemukan');
        }
    }
}
