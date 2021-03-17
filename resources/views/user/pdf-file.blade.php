<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Report</title>
    </head>

    <body>
        <h1>Presupuesto de la Obra
            <img src="{{ public_path().'/img/LogoGPOC.png'}}" style="width: 20%; float: right;">
        </h1>
        <div>
            <div id="main-container">
                <b>Nombre de la Obra</b>: <u>{{$actividad['descripcion']}}</u>
                <p></p>
                <b>Medidas</b>:
                <p></p>
                <b>Largo</b>: <u>{{$actividad['largo']}} Metros</u>
                <b>Alto</b>: <u>{{$actividad['alto']}} Metros</u>
                <b>Ancho</b>: <u>{{$actividad['ancho']}} Centimetros</u>
            </div>
            <p></p>
            <div class="table-responsive">
                <b>Materiales</b>
                <div>
                    <table>
                        <thead>
                            <tr>
                                <th>Descripcion</th>
                                <th>Unidad</th>
                                <th>Cantidad</th>
                                <th>P. Unitario</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($values1 as $var1)
                            <tr class="table-row">
                                <td>{{$var1->nombre}}</td>
                                <td>{{$var1->unidad}}</td>
                                <td>{{$var1->cantidad}}</td>
                                <td>{{$var1->precio_unitario}}</td>
                                <td>{{$var1->subtotal}}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5">--------------------------</td>
                            </tr>
                            @endforelse
                            <tr>
                                <td colspan="4"><b>Total</b></td>
                                <td><b>$ {{$totalMateriales}}</b></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="table-responsive">
                <b>Mano de Obra</b>
                <table>
                    <thead>
                        <tr>
                            <th>Descripcion</th>
                            <th>Jornada</th>
                            <th>Cantidad</th>
                            <th>P. Unitario</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($values2 as $var2)
                        <tr class="table-row">
                            <td>{{$var2->nombre}}</td>
                            <td>{{$var2->unidad}}</td>
                            <td>{{$var2->cantidad}}</td>
                            <td>{{$var2->precio_unitario}}</td>
                            <td>{{$var2->subtotal}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">--------------------------</td>
                        </tr>
                        @endforelse
                        <tr>
                            <td colspan="4"><b>Total</b></td>
                            <td><b>$ {{$totalMano}}</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="table-responsive">
                <b>Maquinaria</b>
                <table>
                    <thead>
                        <tr>
                            <th>Descripcion</th>
                            <th>Capacidad</th>
                            <th>Cantidad</th>
                            <th>P. Unitario</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($values3 as $var3)
                        <tr class="table-row">
                            <td>{{$var3->nombre}}</td>
                            <td>{{$var3->unidad}}</td>
                            <td>{{$var3->cantidad}}</td>
                            <td>{{$var3->precio_unitario}}</td>
                            <td>{{$var3->subtotal}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5">--------------------------</td>
                        </tr>
                        @endforelse
                        <tr>
                            <td colspan="4"><b>Total</b></td>
                            <td><b>$ {{$totalMaquina}}</b></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <h3>Presupuesto: $ {{$totalPresupuesto}}</h3>
        <h5>Tiempo Estimado de la Obra: <u>{{$actividad['tiempo']}}</u></h5>
        <div id="container-info">
            Elaborado por:
            {{ Auth::user()->name }} {{ Auth::user()->appaterno }} {{ Auth::user()->apmaterno }}
            <div class="right">
                Cliente: {{$cliente}}
            </div>
        </div>
    </body>
    <style>
        body {
            font-family: Arial;
        }

        #container-info {
            text-align: left;
            width: 750px;
            margin: auto;
        }

        .right {
            float: right;
        }

        #main-container,
        b {
            font-size: 12px;
            /*border: solid 1px #CCC;*/
            padding-bottom: 2px;
        }

        table {
            background-color: white;
            text-align: left;
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            font-size: 12px;
            padding: 5px;
        }

        thead {
            background-color: #246355;
            border-bottom: solid 5px #0F362D;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #DDD;
        }

    </style>

</html>
