<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dashboard - Pilih Level</h1>
<ul>
    @foreach($levels as $level)
        <li><a href="{{ route('chapters.index', ['level_id' => $level->id]) }}">{{ $level->nama_level }}</a></li>
    @endforeach
</ul>
</body>
</html>

