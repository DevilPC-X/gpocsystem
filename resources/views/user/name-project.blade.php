@extends('templateMaster')

@section('title', 'Name Project')

@section('content')
<section>
    <div class="card" id="nameProject">
        <div class="card-header">
            «Tipos de Obras»
        </div>
        <div class="card-body">
            @guest
            {!!Form::open(['route'=>'welcome', 'method'=>'GET'])!!}
            <h5 class="card-title">GPOC System</h5>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">Tipo de obra</span>
                </div>
                {!!Form::select('idproyecto', \App\Proyecto::pluck('nombre', 'id'), null, ['class'=>'form-control',
                'aria-label'=>'idproyecto', 'aria-describedby'=>'basic-addon2',
                'valid', 'required',
                'placeholder'=>'Seleccione el tipo de obra'])!!}
            </div>
            <p class="card-text"><small>NOTA: Calcule el presupuesto de su obra</small></p>
            {!!Form::button('Continuar', ['type'=>'submit', 'class'=>'btn btn-primary'])!!}
            {!!Form::close()!!}
            @else
            {!!Form::open(['route'=>'save-project', 'method'=>'POST'])!!}
            <h5 class="card-title">GPOC System</h5>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon2">Tipo de obra</span>
                </div>
                {!!Form::select('idproyecto', \App\Proyecto::pluck('nombre', 'id'), null, ['class'=>'form-control',
                'aria-label'=>'idproyecto', 'aria-describedby'=>'basic-addon2',
                'valid', 'required',
                'placeholder'=>'Seleccione el tipo de obra'])!!}
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2">Largo</span>
                        </div>
                        {!!Form::number('largo', null, ['class'=>'form-control', 'aria-label'=>'largo',
                        'required', 'aria-describedby'=>'basic-addon2', 'min'=>'1', 'max'=>'100', 'step'=>'any'])!!}m
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2">Alto</span>
                        </div>
                        {!!Form::number('alto', null, ['class'=>'form-control', 'aria-label'=>'alto',
                        'required', 'aria-describedby'=>'basic-addon2', 'min'=>'1', 'max'=>'100', 'step'=>'any'])!!}m
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-1">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2">Ancho</span>
                        </div>
                        {!!Form::number('ancho', null, ['class'=>'form-control', 'aria-label'=>'ancho', 'required',
                        'aria-describedby'=>'basic-addon2', 'min'=>'1', 'max'=>'100', 'step'=>'any'])!!}cm
                    </div>
                </div>
            </div>
            <div class="input-group-mb-3">
                <span id="basic-addon2">Descripcion:</span>
                {!!Form::textarea('descripcion', null, ['class'=>'form-control',
                'aria-label'=>'descripcion', 'aria-describedby'=>'basic-addon2',
                'rows'=>'4', 'placeholder'=>'Escribe aqui tu descripción...',
                'valid', 'required',
                'id'=>'description'])!!}
            </div>
            <div class="input-group-mb-3">
                <span class="basic-addon2">Tiempo a Estimar:</span>
            </div>
            <div class="row">
                <div class="col-md-2">
                    {!!Form::number('tiempo1', 1, ['class'=>'form-control', 'aria-label'=>'ancho', 'required',
                    'aria-describedby'=>'basic-addon2', 'min'=>'1', 'max'=>'500', 'step'=>'any'])!!}
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {!!Form::select('tiempo2', ['horas'=>'Hora(s)', 'dias'=>'Dia(s)',
                        'semanas'=>'Semana(s)', 'meses'=>'Mes(es)'], null, ['class'=>'form-control',
                        'valid', 'required'])!!}
                    </div>
                </div>
            </div>
            <p class="card-text"><small>NOTA: Calcule el presupuesto de su obra</small></p>
            {!!Form::button('Continuar', ['type'=>'submit', 'class'=>'btn btn-primary'])!!}
            @endguest
            {!!Form::close()!!}
        </div>
    </div>
</section>
@endsection
