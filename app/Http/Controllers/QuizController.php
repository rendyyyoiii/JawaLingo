<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Chapter;
use App\Models\Skor;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function show($chapter_id)
    {
        $chapter = Chapter::findOrFail($chapter_id);
        return view('quiz', compact('chapter'));
    }

    public function submit(Request $request, $chapter_id)
    {
        $chapter = Chapter::findOrFail($chapter_id);
        $isCorrect = $request->input('jawaban') === $chapter->jawabanBenar;

        Skor::create([
            'id_user' => Auth::id(),
            'id_chapter' => $chapter->id,
            'nilai' => $isCorrect ? 100 : 0
        ]);

        return redirect()->route('scores.index');
    }
}

