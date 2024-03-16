<?php

namespace App\Http\Controllers;

use App\Exports\ExportKonsum;
use App\Models\Agent;
use App\Models\Unit;
use App\Models\Konsumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\KonsumenExport;

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
        // Find the unit by id
        $agent = Agent::find($id);

        // Check if the unit exists
        if (!$agent) {
            // Handle the case where the unit with the given ID does not exist
            return redirect()->back()->with('error', 'Unit not found.');
        }

        // Delete the unit
        $agent->delete();

        // Redirect back or to any other page
        return redirect('/dashAgent')->with('success', 'Unit deleted successfully.');
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
        // Find the unit by id
        $unit = Unit::find($id);

        // Check if the unit exists
        if (!$unit) {
            // Handle the case where the unit with the given ID does not exist
            return redirect()->back()->with('error', 'Unit not found.');
        }

        // Validate the request data
        $request->validate([
            'foto' => 'image|file|max:5120|mimes:jpeg,png,jpg,gif,webp',
            'nama_perumahan' => 'required',
            'luas' => 'required',
            'unit' => 'required',
            'lokasi' => 'required',
            'kota' => 'required',
            'status' => ['required', Rule::in(['available', 'sold out'])],
            'brosur' => 'file|max:20480|mimes:pdf,doc,docx,ppt,pptx',
            'pricelist' => 'file|max:20480|mimes:pdf,doc,docx,ppt,pptx'
        ]);

        // Update the unit's data
        $unit->foto = $request->input('foto') ?? $unit->foto;
        $unit->nama_perumahan = $request->input('nama_perumahan');
        $unit->luas = $request->input('luas');
        $unit->unit = $request->input('unit');
        $unit->lokasi = $request->input('lokasi');
        $unit->kota = $request->input('kota');
        $unit->status = $request->input('status');

        if ($request->hasFile('foto')) {
            // Menghapus foto lama jika ada
            if ($unit->foto) {
                Storage::delete($unit->foto);
            }

            // Simpan foto yang baru diunggah
            $unit->foto = $request->file('foto')->storeAs('foto', uniqid() . '.' . $request->file('foto')->extension());
        }

        // if ($request->hasFile('foto')) {
        //     $validatedData['foto'] = $request->file('foto')->storeAs('foto-perumahan', uniqid() . '.' . $request->file('foto')->extension());
        // }

        if ($request->hasFile('brosur')) {
            $unit->brosur = $request->file('brosur')->storeAs('brosur', uniqid() . '.' . $request->file('brosur')->extension());
        }

        if ($request->hasFile('pricelist')) {
            $unit->pricelist = $request->file('pricelist')->storeAs('pricelist', uniqid() . '.' . $request->file('pricelist')->extension());
        }

        // Save the changes to the database
        $unit->save();

        // Redirect back or to any other page
        return redirect('/dashPerumahan');
    }
    // public function updatePerumahan(Request $request, $id)
    // {
    //     // Find the unit by id
    //     $unit = Unit::find($id);

    //     // Check if the unit exists
    //     if (!$unit) {
    //         // Handle the case where the unit with the given ID does not exist
    //         return redirect()->back()->with('error', 'Unit not found.');
    //     }
    //     $request->validate([
    //         'status' => ['required', Rule::in(['available', 'sold out'])],
    //     ]);
    //     // Update the unit's data
    //     $unit->foto = $request->input('foto');
    //     $unit->nama_perumahan = $request->input('nama_perumahan');
    //     $unit->luas = $request->input('luas');
    //     $unit->unit = $request->input('unit');
    //     $unit->lokasi = $request->input('lokasi');
    //     $unit->status = $request->input('status');

    //     $unit->brosur = $request->input('brosur');

    //     // Save the changes to the database
    //     $unit->save();

    //     // Redirect back or to any other page
    //     return redirect('/dashPerumahan');
    // }

    public function deletePerumahan($id)
    {
        // Find the unit by id
        $unit = Unit::find($id);

        // Check if the unit exists
        if (!$unit) {
            // Handle the case where the unit with the given ID does not exist
            return redirect()->back()->with('error', 'Unit not found.');
        }

        // Delete the unit
        $unit->delete();

        // Redirect back or to any other page
        return redirect('/dashPerumahan')->with('success', 'Unit deleted successfully.');
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

    public function exportToExcel(Request $request)
    {
        // Ambil data yang ingin diekspor, misalnya dari database
        $konsumenData = Konsumen::all();

        // Ekspor data ke Excel menggunakan library Maatwebsite\Excel
        return Excel::download(new ExportKonsum($konsumenData), 'konsumen_data.xlsx');
    }

    public function exportExcel()
    {
        return Excel::download(new ExportKonsum, "Konsumen.xlsx");
    }

    public function deleteKonsumen($id)
    {
        // Find the unit by id
        $konsumen = Konsumen::find($id);

        // Check if the unit exists
        if (!$konsumen) {
            // Handle the case where the unit with the given ID does not exist
            return redirect()->back()->with('error', 'Unit not found.');
        }

        // Delete the unit
        $konsumen->delete();

        // Redirect back or to any other page
        return redirect('/dashKonsumen')->with('success', 'Unit deleted successfully.');
    }

    // 
    // public function deleteKonsumen($id)
    // {
    //     $konsumen = Konsumen::find($id);

    //     if (!$konsumen) {
    //         return redirect()->back()->with('error', 'Konsumen not found.');
    //     }

    //     $konsumen->delete();

    //     return redirect()->back()->with('success', 'Konsumen deleted successfully.');
    // }

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
            'kantor' => 'nullable',
            'tipe' => 'required',
            'no_hp' => 'required',
        ]);

        Agent::create($validatedData);
        return redirect('/dashAgent');
    }
}
