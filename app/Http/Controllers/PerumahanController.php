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
            'brosur' => 'required|file|max:20480|mimes:pdf,doc,docx,ppt,pptx'
        ]);

        if ($request->hasFile('foto')) {
            $validatedData['foto'] = $request->file('foto')->storeAs('foto-perumahan', uniqid() . '.' . $request->file('foto')->extension());
        }
        if ($request->hasFile('brosur')) {
            $validatedData['brosur'] = $request->file('brosur')->storeAs('brosur', uniqid() . '.' . $request->file('brosur')->extension());
        }

        Unit::create($validatedData);
        return redirect('/dashboard');
    }

    public function downloadBrosur($id)
    {
        $brosur = DB::table('units')->where('id', $id)->first();
        $pathToFile = storage_path("app/public/{$brosur->brosur}");
        return Response::download($pathToFile);
    }
}
