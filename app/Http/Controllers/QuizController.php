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

public function submitAnswer(Request $request, $chapter_id) {
    $validated = $request->validate([
        'answer' => 'required|exists:choices,id', // Validasi jawaban yang dipilih
    ]);

    // Ambil soal berdasarkan chapter
    $question = Question::where('chapter_id', $chapter_id)->first();

    // Cek apakah jawaban benar
    $isCorrect = ($validated['answer'] == $question->correct_answer);

    // Simpan hasil jawaban
    UserAnswer::create([
        'user_id' => auth()->id(),
        'question_id' => $question->id,
        'is_correct' => $isCorrect,
    ]);

    // Kirim kembali hasil ke tampilan
    return view('quiz.result', compact('isCorrect', 'question', 'chapter_id'));
}

}

