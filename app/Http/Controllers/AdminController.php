<?php

namespace App\Http\Controllers;

use App\Models\Agent;
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

    public function agent()
    {
        return view('admin.page.data.agent', [
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
        return redirect('/dashboard');
    }
}
