<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Konsumen;
use App\Models\Unit;
use Illuminate\Http\Request;

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
