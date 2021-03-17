@extends('templateMaster')

@section('title', 'Update Providers')

@section('content')
<div class="container text-center">
    <div class="container header">
        <div class="row">
            <div class="col-md-2 header-left">
                <i class="fa fa-edit fa-3x"></i>
            </div>
            <div class="col-md-6 header-left">
                <h4>Actualizar Proveedor</h4>
            </div>
        </div>
    </div>
    <div class="container content">
        {!!Form::model($value, ['route'=>['proveedores.update', $value->id], 'method'=>'PUT'])!!}
        <div class="form-content">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Proveedor</span>
                </div>
                {!!Form::text('nombre', null, ['class'=>'form-control',
                'aria-label'=>'nombre', 'aria-describedby'=>'basic-addon2', 'required',
                'placeholder'=>'Escriba el nuevo nombre'])!!}
            </div>
            <hr>
            {!!Form::button('Guardar <i class="fa fa-check"></i>', ['type'=>'submit','class'=>'btn btn-success'])!!}
        </div>
        {!!Form::close()!!}
    </div>
</div>
@endsection
