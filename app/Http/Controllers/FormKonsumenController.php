<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Agent;
use App\Models\Konsumen;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class FormKonsumenController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'domisili' => 'required',
            'pekerjaan' => 'required',
            'sumber_informasi' => 'required',
            'agent_id' => 'required|exists:agents,id',
            'kantor' => 'required',
        ]);
            
        Konsumen::create($validatedData);
        return redirect('/');
    }
}