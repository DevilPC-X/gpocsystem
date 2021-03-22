@extends('templateMaster')

@section('title', 'Index Supplies')

@section('content')
<div class="container text-center">
    <div class="page-header">
        <h1>Insumos
            <a href="{{route('insumos.create')}}" class="btn btn-success btn-sm">
                <i class="fa fa-plus-circle"></i> Agregar nuevo
            </a>
            <a href="{{route('categorias.index')}}" class="btn btn-primary btn-sm">
                <i class="fa fa-plus-circle"></i> Agregar Categoria/Materiales
            </a>
            <button href="" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false"
                aria-controls="multiCollapseExample1 multiCollapseExample2" class="btn btn-warning btn-sm">
                <i class="fa fa-search"> Buscar</i>
            </button>
        </h1>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    {!!Form::open(['route'=>'insumos.index', 'method'=>'GET'])!!}
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2">Busqueda:</span>
                        </div>
                        {!!Form::text('nombrecat', null, ['class'=>'form-control','maxlength'=>'255',
                        'aria-label'=>'nombre', 'aria-describedby'=>'basic-addon2', 'required',
                        'placeholder'=>'Escriba el insumo a buscar...'])!!}
                        <div class="input-group-prepend">
                            {!!Form::button('<i class="fa fa-check"></i>', ['type'=>'submit', 'class'=>'btn
                            btn-primary'])!!}
                        </div>
                    </div>
                    {!!Form::close()!!}
                </div>
            </div>
            <div class="col-md-2"></div>
        </div>
        <hr>
    </div>
    <div class="page">
        <div class="table-responsive">
            <table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Unidad</th>
                        <th>Precio Unitario</th>
                        <th>Categoria</th>
                        <th>Proveedores</th>
                        <th>Proyecto</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($values as $var)
                    <tr>
                        <td id="size-row" style="text-align: left;"><small>{{$var->nombre}}</small></td>
                        <td id="size-row"><small>{{$var->unidad}}</small></td>
                        <td id="size-row"><small>{{$var->precio_unitario}}</small></td>
                        <td id="size-row" style="text-align: left;"><small>{{$var->categories->nombre}}</small></td>
                        <td id="size-row" style="text-align: left;"><small>{{$var->proveedores->nombre}}</small></td>
                        <td id="size-row" style="text-align: left;"><small>{{$var->projects->nombre}}</small></td>
                        <td id="size-row">
                            <small>
                                <a href="{{route('insumos.edit', $var->id)}}" class="btn btn-info btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                            </small>
                        </td>
                        <td>
                            <small>
                                <button class="btn btn-danger btn-sm" id="{{$var->id}}" onclick="deleteSupplies(this);">
                                    <i class="fa fa-trash"></i>
                                </button>
                                {!!Form::open(['route'=>['insumos.destroy', $var->id],
                                'method'=>'DELETE', 'id'=>'formSupplies'.$var->id])!!}
                                {!!Form::close()!!}
                            </small>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8">
                            <h3>No se han encontrado registros <i class="far fa-sad-tear"></i></h3>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    <p></p>
    {{$values->render()}}
</div>
@endsection
