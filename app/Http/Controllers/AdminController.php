<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Unit;
use App\Models\Konsumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.page.dashboard', [
            'users' => Auth::user(),
        ]);
    }

    public function dashAgent()
    {
        $agents = Agent::all();
        // $user = Auth::user();
        return view('admin.page.data.agent.index', [
            'agents' => $agents,
            // 'user' => $user,
        ]);
    }
    public function agent()
    {
        return view('admin.page.data.agent.agent', [
            'users' => Auth::user(),
        ]);
    }

    public function editAgent($id)
    {
        $agent = Agent::find($id);

        return view('admin.page.data.agent.edit', [
            'agent' => $agent,
        ]);
    }
    public function updateAgent(Request $request, $id)
    {
        // Find the agent by id
        $agent = Agent::find($id);

        // Update the agent's data
        $agent->nama = $request->input('nama');
        $agent->tipe = $request->input('tipe');
        $agent->kantor = $request->input('kantor');
        $agent->no_hp = $request->input('no_hp');

        // Save the changes to the database
        $agent->save();

        // Redirect back or to any other page
        return redirect('/dashAgent');
    }

    public function deleteAgent($id)
    {
        $agent = Agent::find($id);

        if (!$agent) {
            return redirect()->back()->with('error', 'Agent not found.');
        }

        $agent->delete();

        return redirect()->back()->with('success', 'Agent deleted successfully.');
    }

    public function dashPerumahan()
    {
        $units = Unit::all();
        // $user = Auth::user();
        return view('admin.page.data.perumahan.index', [
            'units' => $units,
            // 'user' => $user,
        ]);
    }

    public function editPerumahan($id)
    {
        $unit = Unit::find($id);

        return view('admin.page.data.perumahan.edit', [
            'unit' => $unit,
        ]);
    }
    public function updatePerumahan(Request $request, $id)
    {
        // Find the agent by id
        $unit = Unit::find($id);

        // Update the agent's data
        $unit->foto = $request->input('foto');
        $unit->nama_perumahan = $request->input('nama_perumahan');
        $unit->luas = $request->input('luas');
        $unit->unit = $request->input('unit');
        $unit->lokasi = $request->input('lokasi');
        $unit->brosur = $request->input('brosur');

        // Save the changes to the database
        $unit->save();

        // Redirect back or to any other page
        return redirect('/dashPerumahan');
    }

    public function deletePerumahan($id)
    {
        $unit = Unit::find($id);

        if (!$unit) {
            return redirect()->back()->with('error', 'Unit not found.');
        }

        $unit->delete();

        return redirect()->back()->with('success', 'Unit deleted successfully.');
    }


    public function dashKonsum()
    {
        $konsumen = Konsumen::all();
        // $user = Auth::user();
        return view('admin.page.data.konsumen.index', [
            'konsumen' => $konsumen,
            // 'user' => $user,
        ]);
    }

    public function deleteKonsumen($id)
    {
        $konsumen = Konsumen::find($id);

        if (!$konsumen) {
            return redirect()->back()->with('error', 'Konsumen not found.');
        }

        $konsumen->delete();

        return redirect()->back()->with('success', 'Konsumen deleted successfully.');
    }

    public function perumahan()
    {
        return view('admin.page.data.perumahan.perumahan', [
            'users' => Auth::user(),
        ]);
    }


    public function pembangunan()
    {
        return view('admin.page.data.pembangunan', [
            'users' => Auth::user(),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'kantor' => 'required',
            'tipe' => 'required',
            'no_hp' => 'required',
        ]);

        Agent::create($validatedData);
        return redirect('/dashAgent');
    }
}
