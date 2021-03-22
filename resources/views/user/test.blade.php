<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        {!!Form::open(['route'=>'test', 'method'=>'POST'])!!}
        <label for="1Color">OPCIONES:</label>
        <br>
        <input type="radio" id="male" name="hola" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="hola1" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="hola2" value="other">
        <label for="other">Other</label>
        <br>
        <button type="submit">Aceptar</button>
        {!!Form::close()!!}
    </body>

</html>
