@extends('templateMaster')

@section('title', 'Update Users')

@section('content')
<div class="container text-center">
    <div class="container header">
        <div class="row">
            <div class="col-md-2 header-left">
                <i class="fa fa-plus-circle fa-2x"></i>
            </div>
            <div class="col-md-6 header-left">
                <h4>Actualizar Usuario</h4>
            </div>
        </div>
    </div>
    <div class="container content">
        {!!Form::model($value, ['route'=>['usuarios.update', $value->id], 'method'=>'PUT', 'id'=>'formUsers'])!!}
        <div class="form-content">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                </div>
                {!!Form::text('name', null, ['class'=>'form-control', 'maxlength'=>'20',
                'aria-label'=>'nombre', 'aria-describedby'=>'basic-addon2',
                'required', 'placeholder'=>'Escriba el nombre'])!!}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Apellido Paterno</span>
                </div>
                {!!Form::text('appaterno', null, ['class'=>'form-control', 'maxlength'=>'50',
                'aria-label'=>'appaterno', 'aria-describedby'=>'basic-addon2',
                'required', 'placeholder'=>'Escriba el apellido paterno'])!!}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Apellido Materno</span>
                </div>
                {!!Form::text('apmaterno', null, ['class'=>'form-control', 'maxlength'=>'50',
                'aria-label'=>'apmaterno', 'aria-describedby'=>'basic-addon2',
                'required', 'placeholder'=>'Escriba el apellido materno'])!!}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">Email</span>
                </div>
                {!!Form::email('email', null, ['class'=>'form-control', 'maxlength'=>'100',
                'placeholder'=>'Escriba el email', 'required'])!!}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">Tipo de Usuario</span>
                </div>
                {!!Form::select('type', ['Usuario'=>'Usuario', 'Administrador'=>'Administrador'], null, ['class'=>'form-control',
                'aria-label'=>'type', 'aria-describedby'=>'basic-addon2', 'valid','required',
                'placeholder'=>'Seleccione el tipo de usuario'])!!}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">Contraseña</span>
                </div>
                {!!Form::password('password', ['class'=>'form-control', 'required',
                'placeholder'=>'Escriba la contraseña', 'id'=>'password'])!!}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">Confirmar Contraseña</span>
                </div>
                {!!Form::password('password_confirmation', ['class'=>'form-control', 'required',
                'placeholder'=>'Confirme la contraseña', 'id'=>'password_confirm'])!!}
            </div>          
        </div>
        <a href="{{route('usuarios.index')}}" class="btn btn-warning btn-sm"><i class="fa fa-ban"></i> Cancelar</a>
        {!!Form::button('Guardar <i class="fa fa-check"></i>', ['class'=>'btn btn-success btn-sm', 
        'onclick'=>'validarPassword();'])!!}
        <hr>
        {!!Form::close()!!}
    </div>
</div>
@endsection
