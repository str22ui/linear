<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
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
            $validatedData['foto'] = $request->file('foto')->storeAs('foto-perumahan', uniqid().'.'.$request->file('foto')->extension());
        }
        if ($request->hasFile('brosur')) {
            $validatedData['brosur'] = $request->file('brosur')->storeAs('brosur', uniqid().'.'.$request->file('brosur')->extension());
        }
            
        Unit::create($validatedData);
        return redirect('/dashboard');
    }

    // public function downloadBrosur($id)
    // {
    //     $unit = Unit::findOrFail($id);

    //     $pathBrosur = $unit->brosur;

    //     $data = ['units' => $unit, 'brosur_path' => $pathBrosur];
        
    //     $viewPath = public_path('storage/pdf/'.$pathBrosur);
    //     $pdf = app('dompdf.wrapper')->loadView($viewPath, $data);
    //     return $pdf->download($unit->nama_perumahan . '.pdf');
    // }

    public function downloadBrosur($id)
    {
        $unit = Unit::findOrFail($id);

        // Pastikan $unit->brosur berisi path relatif dari direktori penyimpanan publik
        $brosurPath = storage_path('app/public/brosur/' . $unit->brosur);

        // Gunakan file_get_contents setelah memastikan path file yang benar
        $pdfContent = file_get_contents($brosurPath);

        return response($pdfContent)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'inline; filename="' . $unit->nama_perumahan . '.pdf"');
    }
}
