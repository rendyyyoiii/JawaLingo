<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Chapter</h1>
<ul>
    @foreach($chapters as $chapter)
        <li><a href="{{ route('quiz.show', $chapter->id) }}">Chapter {{ $chapter->id }}</a></li>
    @endforeach
</ul>
</body>
</html>