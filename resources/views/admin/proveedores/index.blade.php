@extends('templateMaster')

@section('title', 'Index')

@section('content')
<div class="container text-center">
    <div class="page-header">
        <h1>Proveedores
            <button class="btn btn-success btn-sm" data-toggle="collapse" data-target=".multi-collapse"
                aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">
                <i class="fa fa-plus-circle"></i> Agregar nuevo
            </button>
        </h1>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    {!!Form::open(['route'=>'proveedores.store', 'method'=>'POST'])!!}
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2">Nombre del Proveedor:</span>
                        </div>
                        {!!Form::text('nombre', null, ['class'=>'form-control',
                        'aria-label'=>'nombre', 'aria-describedby'=>'basic-addon2', 'required',
                        'placeholder'=>'Escriba el nombre del proveedor...'])!!}
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
                        <th>Nombre del Proveedor</th>
                        <th colspan="2">Accion a realizar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($values as $var)
                    <tr>
                        <td style="text-align: left;">{{$var->nombre}}</td>
                        <td>
                            <a href="{{route('proveedores.edit', $var->id)}}" class="btn btn-info btn-sm">
                                Actualizar <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <button class="btn btn-danger btn-sm" id="{{$var->id}}" onclick="deleteSuppliers(this);">
                                Eliminar <i class="fa fa-trash"></i>
                            </button>
                            {!!Form::open(['route'=>['proveedores.destroy', $var->id], 'method'=>'DELETE',
                            'id'=>'formSuppliers'.$var->id])!!}
                            {!!Form::close()!!}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">
                            <h3>No se han encontrado registros</h3>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
