<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>
<h1>Hello Admin {{auth()->user()->fname}}</h1>
<form action="{{route('logout')}}" METHOD="POST">
    @csrf
    <button type="submit">Deconnexion</button>
</form>
</body>
</html>
