@extends('templateMaster')

@section('title', 'List Supplies')

@section('content')
<div class="container text-center">
    <div class="page-header">
        <h1>Añadidos a la lista</h1>
        <hr>
    </div>
</div>
<section>
    <div class="page">
        <div class="table-responsive">
            <table style="width: 100%;" class="table-bordered">
                <thead>
                    <tr class="table-success">
                        <th>Nombre</th>
                        <th>Unidad</th>
                        <th>Cantidad</th>
                        <th>P. Unitario</th>
                        <th>Sub Total</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($insumo as $sup)
                    <tr>
                        <td style="heigth: 10px; width: 30%;"><small>{{$sup->nombre}}</small></td>
                        <td style="heigth: 10px; width: 5%;"><small>{{$sup->unidad}}</small></td>
                        <td style="heigth: 10px; width: 10%;">
                            <small>
                                <input style="width: 20%;" type="number" name="cantidad" id="insumo_{{$sup->id}}"
                                    value="{{$sup->cantidad}}" min="1" max="100">
                            </small>
                            <a href="#" class="btn btn-warning btn-sm btn-update-item"
                                data-href="{{route('insumo-actualizar', $sup->id)}}" data-id="{{$sup->id}}">
                                <i class="fa fa-redo"></i>
                            </a>
                        </td>
                        <td style="heigth: 10px; width: 10%;"><small>{{$sup->precio_unitario}}</small></td>
                        <!--NUEVA OPERACION-->
                        @if($sup->idinsumo == 2 && $sup->idproyecto == 1)
                        <td style="heigth: 10px; width: 10%;">
                            <small>{{number_format(($sup->precio_unitario * $sup->cantidad)*4, 2)}}</small>
                        </td>
                        @else
                        <td style="heigth: 10px; width: 10%;">
                            <small>{{number_format($sup->precio_unitario * $sup->cantidad, 2)}}</small>
                        </td>
                        @endif
                        <!--FIN OPERACION NUEVA-->
                        <td style="heigth: 10px; width: 5%;">
                            <a href="{{route('insumo-borrar', $sup->id)}}" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">
                            <h3>No existen insumos añadidos <i class="fa fa-tools"></i></h3>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <h3>
            <span class="label label-success">Total: ${{number_format($total, 2)}}</span>
        </h3>
        <p>
            <a href="{{route('user.index')}}" class="btn btn-primary"><i class="fa fa-chevron-circle-left"></i>
                Seguir
                añadiendo</a>
            <a href="{{route('generateReport')}}" class="btn btn-success">Generar reporte <i
                    class="fa fa-file-pdf"></i></a>
        </p>
    </div>
</section>
@endsection
