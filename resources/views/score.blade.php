<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <h2>Total Score :</h2>
    <h1>{{ $score }}</h1>

    <form action="{{ route('leaderboard.show') }}" method="POST">
        <input type="hidden" name="score" value="{{ $score }}">
        <input type="hidden" name="id_user" value="{{ $user }}">
        <button type="submit" class="btn btn-primary mb-3">Lihat Leaderboard</button>
    <a></a>
</body>
</html>