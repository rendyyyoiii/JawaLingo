<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Skor;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    public function index()
    {
        $scores = Skor::where('id_user', Auth::id())->with('chapter')->get();
        return view('scores', compact('scores'));
    }
}


