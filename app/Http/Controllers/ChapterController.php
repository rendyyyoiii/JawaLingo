<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chapter;

class ChapterController extends Controller
{
    public function index($level_id)
    {
        $chapters = Chapter::where('level_id', $level_id)->get();
        return view('chapters', compact('chapters'));
    }
}
