@extends('templateMaster')

@section('title', 'Index Users')

@section('content')
<div class="container text-center">
	<div class="page-header">
		<h1>Usuarios
			<a href="{{route('usuarios.create')}}" class="btn btn-success btn-sm">Agregar <i class="fa fa-plus-circle"></i>
			</a>
		</h1>
		<hr>
	</div>
	<div class="page">
		<div class="table-responsive">
			<table class="table table-hover table-striped table-bordered">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Tipo de Usuario</th>
						<th>Email</th>
						<th>Actualizar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					@forelse($values as $var)
						<tr>
							<td class="justify">{{$var->name}} {{$var->appaterno}} {{$var->apmaterno}}</td>
							<td class="justify">{{$var->type}}</td>
							<td class="justify">{{$var->email}}</td>
							<td>
								<a href="{{route('usuarios.edit', $var->id)}}" class="btn btn-info btn-sm">Actualizar <i class="fa fa-edit"></i>
								</a>
							</td>
							<td>
								<button class="btn btn-danger btn-sm" id="{{$var->id}}" onclick="deleteUsers(this);"> Eliminar
                                <i class="fa fa-trash"></i>
                            </button>
                            {!!Form::open(['route'=>['usuarios.destroy', $var->id], 'method'=>'DELETE',
                            'id'=>'formUsers'.$var->id])!!}
                            {!!Form::close()!!}
							</td>
						</tr>
					@empty
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection