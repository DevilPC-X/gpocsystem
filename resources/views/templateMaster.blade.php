<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        {{Html::style('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}
        {{Html::style('https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/united/bootstrap.min.css')}}
        {{Html::style('css/styleMaster.css')}}
        {{Html::script('js/customAlert.js')}}
        {{Html::script('https://kit.fontawesome.com/bfa4ff2d0b.js')}}
        <title>@yield('title')</title>
    </head>

    <body>
        @include('admin.secciones.navbar')
        @yield('content')
        {{Html::script('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js')}}
        {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js')!!}
        {!!Html::script('https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js')!!}
        {{Html::script('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js')}}
        {{Html::script('js/main.js')}}
        @include('sweet::alert')
    </body>

</html>
