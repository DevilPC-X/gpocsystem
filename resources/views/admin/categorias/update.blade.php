@extends('templateMaster')

@section('title', 'Update Categories')

@section('content')
<div class="container text-center">
    <div class="container header">
        <div class="row">
            <div class="col-md-2 header-left">
                <i class="fa fa-edit fa-3x"></i>
            </div>
            <div class="col-md-6 header-left">
                <h4>Actualizar Categoria</h4>
            </div>
        </div>
    </div>
    <div class="container content">
        {!!Form::model($value, ['route'=>['categorias.update', $value->id], 'method'=>'PUT'])!!}
        <div class="form-content">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Proveedor</span>
                </div>
                {!!Form::text('nombre', null, ['class'=>'form-control', 'maxlength'=>'255',
                'aria-label'=>'nombre', 'aria-describedby'=>'basic-addon2', 'required',
                'placeholder'=>'Escriba el nuevo nombre'])!!}
            </div>
            <hr>
            <a href="{{route('insumos.index')}}" class="btn btn-warning">Cancelar <i class="fa fa-ban fa-sm"></i></a>
            {!!Form::button('Guardar <i class="fa fa-check"></i>', ['type'=>'submit','class'=>'btn btn-success'])!!}
        </div>
        {!!Form::close()!!}
    </div>
</div>
@endsection
