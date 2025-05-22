<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nilai Saya</h1>
<ul>
    @foreach($scores as $skor)
        <li>Chapter {{ $skor->chapter->id }}: {{ $skor->nilai }}</li>
    @endforeach
</ul>
</body>
</html>