@extends('templateMaster')

@section('title', 'Detail Client')

@section('content')
<section>
    <div class="container text-center">
        <h1>Detalles del Cliente</h1>
        <hr>
    </div>
    <div class="container content">
        {!!Form::open(['route'=>'clientes.store', 'method'=>'POST'])!!}
        <div class="form-content">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">Nombre del Cliente</span>
                </div>
                {!!Form::text('nombre', null, ['class'=>'form-control',
                'aria-label'=>'nombre', 'aria-describedby'=>'basic-addon2', 'required',
                'placeholder'=>'Escriba el Nombre del Cliente'])!!}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">RFC</span>
                </div>
                {!!Form::text('rfc', null, ['class'=>'form-control',
                'aria-label'=>'rfc', 'aria-describedby'=>'basic-addon2', 'required',
                'placeholder'=>'Escriba el RFC del cliente'])!!}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">Direccion</span>
                </div>
                {!!Form::text('direccion', null, ['class'=>'form-control',
                'aria-label'=>'direccion', 'aria-describedby'=>'basic-addon2', 'required',
                'placeholder'=>'Escriba la direccion del Cliente...'])!!}
            </div>
        </div>
        {!!Form::button('Guardar <i class="fa fa-check"></i>', ['type'=>'submit','class'=>'btn btn-success',
        'onclick'=>'window.open("welcome", "_blank");'])!!}
        <hr>
        {!!Form::close()!!}
    </div>
</section>
@endsection
