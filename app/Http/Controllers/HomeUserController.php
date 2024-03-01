<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    public function index()
    {
        return view('landingPage.content.home');
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
