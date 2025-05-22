<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;

class DashboardController extends Controller
{
    public function index()
    {
        $levels = Level::all();
        return view('dashboard', compact('levels'));
    }
}
