<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeUserController extends Controller
{
    public function index()
    {
        return view('landingPage.content.home');
    }
}
