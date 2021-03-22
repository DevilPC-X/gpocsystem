@extends('templateMaster')

@section('title', 'Create Supplies')

@section('content')
<div class="container text-center">
    <div class="container header">
        <div class="row">
            <div class="col-md-2 header-left">
                <i class="fa fa-plus-circle fa-3x"></i>
            </div>
            <div class="col-md-6 header-left">
                <h4>Crear un Nuevo Insumo</h4>
            </div>
        </div>
    </div>
    <div class="container content">
        {!!Form::open(['route'=>'insumos.store', 'method'=>'POST'])!!}
        <div class="form-content">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Tipo de Insumo</span>
                </div>
                {!!Form::select('idinsumo', ['1'=>'Materiales', '2'=>'Mano de Obra',
                '3'=>'Maquinaria'], null, ['class'=>'form-control',
                'aria-label'=>'idinsumo', 'aria-describedby'=>'basic-addon2',
                'valid', 'required', 'placeholder'=>'Seleccione el tipo de insumo...'])!!}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Nombre</span>
                </div>
                {!!Form::text('nombre', null, ['class'=>'form-control', 'maxlength'=>'800',
                'aria-label'=>'nombre', 'aria-describedby'=>'basic-addon2',
                'required', 'placeholder'=>'Escriba el nombre'])!!}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">Unidad</span>
                </div>
                {!!Form::select('unidad', ['tonelada'=>'Tonelada', 'kilogramo'=>'Kilogramo',
                'm²'=>'m²', 'm³'=>'m³', 'juego'=>'Juego', 'pieza'=>'Pieza', 'metro'=>'Metro', 'horas'=>'Horas',
                'bulto'=>'Bulto', 'dia'=>'Dia','none'=>'--Ninguno--'], null,
                ['class'=>'form-control', 'valid', 'required',
                'aria-label'=>'unidad', 'aria-describedby'=>'basic-addon2',
                'placeholder'=>'Seleccione una unidad...'])!!}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">Precio Unitario</span>
                </div>
                {!!Form::text('precio_unitario', null, ['class'=>'form-control',
                'aria-label'=>'precio', 'aria-describedby'=>'basic-addon2', 'required',
                'placeholder'=>'Escriba el precio unitario'])!!}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">Categoria</span>
                </div>
                {!!Form::select('idcategoria', \App\Categoria::pluck('nombre', 'id'), null, ['class'=>'form-control',
                'aria-label'=>'idcategoria', 'aria-describedby'=>'basic-addon2',
                'valid', 'required',
                'placeholder'=>'Seleccione la categoria...'])!!}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">Proyecto</span>
                </div>
                {!!Form::select('idproyecto', \App\Proyecto::pluck('nombre', 'id'), null, ['class'=>'form-control',
                'aria-label'=>'idcategoria', 'aria-describedby'=>'basic-addon2',
                'valid', 'required',
                'placeholder'=>'Seleccione el tipo de proyecto...'])!!}
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">Proveedor</span>
                </div>
                {!!Form::select('idproveedor', \App\Proveedor::pluck('nombre', 'id'), null, ['class'=>'form-control',
                'aria-label'=>'idproveedor', 'aria-describedby'=>'basic-addon2',
                'valid', 'required',
                'placeholder'=>'Seleccione el tipo de proveedor...'])!!}
            </div>
            <a href="{{route('insumos.index')}}" class="btn btn-warning">Cancelar <i class="fa fa-ban fa-sm"></i></a>
            {!!Form::button('Guardar <i class="fa fa-check fa-sm"></i>', ['type'=>'submit','class'=>'btn
            btn-success'])!!}
        </div>
        {!!Form::close()!!}
    </div>
</div>
@endsection
