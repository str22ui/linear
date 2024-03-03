<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use App\Models\Agent;
use App\Models\Konsumen;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class KonsumenController extends Controller
{
    public function store(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required',
            'domisili' => 'required',
            'pekerjaan' => 'required',
            'sumber_informasi' => 'required',
            'agent_id' => 'nullable',
            'kantor' => 'nullable',
        ]);
        $unit = Unit::findOrFail($id);

        if ($request->input('agent_id') == 'pilih') {
            $validatedData['agent_id'] = null;
        }
        if ($request->input('kantor') == 'pilih') {
            $validatedData['kantor'] = null;
        }

        Konsumen::create($validatedData);
        return redirect()->route('download.form', ['id' => $unit->id]);
    }
}
