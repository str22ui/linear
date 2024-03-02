<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Unit;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class HomeUserController extends Controller
{
    public function index()
    {
        $unit = Unit::latest()->paginate(3);
        return view('landingPage.content.home', [
            'unit' => $unit,
        ]);
    }

    public function about()
    {
        $team = Team::all();
        return view('landingPage.content.aboutUs', [
            'team' => $team,
        ]);
    }

    public function service()
    {
        return view('landingPage.content.services');
    }

    public function show($id)
    {
        return view('landingPage.micro.form', [
            'units' => Unit::findOrFail($id),
            'agents' => Agent::all(),
        ]);
    }

    public function downloadPDF($id)
    {
        $unit = Unit::findOrFail($id);

        return Response::make($unit->brosur, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . $unit->nama_perumahan . '.pdf"',
        ]);
    }
}
