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
<form method="POST" action="{{ route('quiz.submit', $chapter->id) }}">
    @csrf
    <button name="jawaban" value="A">{{ $chapter->opsiA }}</button>
    <button name="jawaban" value="B">{{ $chapter->opsiB }}</button>
    <button name="jawaban" value="C">{{ $chapter->opsiC }}</button>
    <button name="jawaban" value="D">{{ $chapter->opsiD }}</button>
</form>
</body>
</html>