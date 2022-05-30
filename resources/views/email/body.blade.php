<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolpress Mail</title>
</head>
<body>
    <h1>{{ $userName }} ti ha appena contattato sul sito Boolpress</h1>
    <p>La mail per ricontattarlo è {{ $userMail }}</p>
    <p>
        Questo è il contenuto del messaggio:
        {{ $userMessage }}
    </p>
</body>
</html>