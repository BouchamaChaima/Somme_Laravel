<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test" method="POST">
        @csrf
        <input type="text" name="txt">
        <input type="submit" value="ok">
    </form>

        @if (isset($txt))
            <h2>{{$txt}}</h2>
        @endif
</body>
</html>