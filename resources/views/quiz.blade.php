<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Quiz Chapter</h1>
<p>{{ $chapter->pertanyaan }}</p>
<!-- resources/views/quiz.blade.php -->

<form action="{{ route('quiz.submit', ['chapter_id' => $chapter->id]) }}" method="POST">
    @csrf
    <input type="hidden" name="question_id" value="{{ $chapter->id }}">

    <label>
        <input type="radio" name="jawaban" value="opsiA">
        {{ $chapter->opsiA }}
    </label><br>

    <label>
        <input type="radio" name="jawaban" value="opsiB">
        {{ $chapter->opsiB }}
    </label><br>

    <label>
        <input type="radio" name="jawaban" value="opsiC">
        {{ $chapter->opsiC }}
    </label><br>

    <label>
        <input type="radio" name="jawaban" value="opsiD">
        {{ $chapter->opsiD }}
    </label><br>

    <button type="submit">Submit</button>
</form>

</body>
</html>