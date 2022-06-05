<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail da Boolpress</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container-fluid py-5">
        <h1>Risposta di {{ ucfirst($author) }}, {{ $authorEmail }} </h1>
        <h3>Messaggio:</h3>
        <p>{{ $guestMessage }}</p>
    </div>
</body>
</html>
