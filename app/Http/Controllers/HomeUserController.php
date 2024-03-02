<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Unit;
use Illuminate\Http\Request;

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
}
