<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Addition</title>
</head>
<body>
    <form action="/" method="post">
        @csrf
        <div class="formgroupe">
            <input type="text" name="Nombre1" placeholder="Nombre 1" value=@if(isset($val1)){{$val1}}@endif>
            @if($errors->has('Nombre1'))
                <div>
                    <div class="cercle">
                        <div class="barreone"></div>
                        <div class="barretwo"></div>
                    </div>
                    &nbsp<label class="err">{{$errors->first('Nombre1')}}</label>
                </div>
            @endif
        </div>
        <div class="formgroupe">
            <input type="text" name="Nombre2" placeholder="Nombre 2" value=@if(isset($val2)){{$val2}}@endif>
            @if($errors->has('Nombre2'))
                <div>
                    <div class="cercle">
                        <div class="barreone"></div>
                        <div class="barretwo"></div>
                    </div>
                    &nbsp<label class="err">{{$errors->first('Nombre2')}}</label>
                </div>
            @endif
        </div>
        <input type="submit" value="Calculer">
    </form>
    @if(isset($result))
        <div class="resultat">{{$result}}</div>
    @endif
    
    
</body>
</html>