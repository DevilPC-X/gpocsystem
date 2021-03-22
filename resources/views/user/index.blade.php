@extends('templateMaster')

@section('title', 'Welcome')

@section('content')
<section>
    <div class="container text-center">
        <h1>Lista de Insumos</h1>
        <hr>
    </div>
    <div class="row">
        <div class="col-md-6">
            {!!Form::open(['route'=>'filtrateIndex', 'method'=>'GET'])!!}
            <div class="input-group mb-3">
                {!!Form::select('idinsumo', ['1'=>'Materiales', '2'=>'Mano de Obra', '3'=>'Maquinaria'],
                null, ['class'=>'form-control verifySupplie', 'id'=>'vsupplie'])!!}
                {!!Form::hidden('idproyecto', $id_proyecto)!!}
                {!!Form::select('idproveedor', \App\Proveedor::pluck('nombre', 'id'), null,
                ['class'=>'form-control verificarProveedor', 'placeholder'=>'Seleccione un proveedor...', 'valid'])!!}
                {!!Form::select('idcategoria', \App\Categoria::pluck('nombre', 'id'), null,
                ['class'=>'form-control verifyIndex', 'placeholder'=>'Seleccione una categoria...', 'valid'])!!}
                <div class="input-group-prepend">
                    {!!Form::button('<i class="fa fa-search"></i>', ['type'=>'submit', 'class'=>'btn btn-primary'])!!}
                </div>
            </div>
            {!!Form::close()!!}
        </div>
    </div>
    <div class="page">
        <div class="table-responsive">
            <table style="width: 100%;" class="table-bordered">
                <thead>
                    <tr class="table-success">
                        <th>Nombre</th>
                        <th>Unidad</th>
                        <th>P. Unitario</th>
                        <th>Categoria</th>
                        <th>Proveedores</th>
                        <th>Añadir</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($values as $var)
                    {!!Form::open(['route'=>['insumo-agregar', $var->id], 'method'=>'GET'])!!}
                    <tr>
                        <td id="size-row"><small>{{$var->nombre}}</small></td>
                        <td id="size-row"><small>{{$var->unidad}}</small></td>
                        <td id="size-row"><small>{{$var->precio_unitario}}</small></td>
                        <td id="size-row"><small>{{$var->categories->nombre}}</small></td>
                        <td id="size-row"><small>{{$var->proveedores->nombre}}</small></td>
                        <td id="size-row">
                            <small>
                                <a href="{{route('insumo-agregar', $var->id)}}" class="btn btn-sm"
                                    style="color: green;">
                                    <i class="fa fa-plus-circle"></i> <u>Añadir a la lista</u>
                                </a>
                            </small>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">
                            <h3 class="text-center"><u>No se han encontrado registros</u></h3>
                        </td>
                    </tr>

                    @endforelse
                </tbody>
            </table>
            {!!Form::close()!!}
        </div>
    </div>
</section>
@endsection
