@extends('templateMaster')

@section('title', 'Welcome')

@section('content')
<section>
    <div class="container text-center">
        <div class="page-header">
            <h1>Bienvenidos</h1>
            <hr>
        </div>
        <div class="row">
            <div id="position-left">
                <div class="text-center">
                    <p class="text-center"><img src="{{asset('img/LogoGPOC.png')}}" style="height: 200px;"></p>
                </div>
                <div id="position-right">
                    <p><b>GPOC System</b> es una herramienta rapida y de facil uso para la consulta de costos, analisis
                        de precios unitarios y la elaboración de presupuestos para la industria de la construcción.
                    </p>
                    <p>El objetivo de <b>GPOC System</b> es de generar el cálculo de presupuesto de una obra civil de
                        una pequeña y mediana empresa
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
