<?php

namespace App\Http\Controllers;

use App\Models\Unit;
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
            
        if ($request->hasFile('gambar')) {
            $validatedData['gambar'] = $request->file('gambar')->storeAs('gambar-berita', uniqid().'.'.$request->file('gambar')->extension());
        }
        if ($request->hasFile('brosur')) {
            $validatedData['brosur'] = $request->file('brosur')->storeAs('brosur', uniqid().'.'.$request->file('brosur')->extension());
        }
            
        Unit::create($validatedData);
        return redirect('/dashboard');
    }
}
