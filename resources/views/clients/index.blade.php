@extends('layouts.app')

@section('content')
<div class="container">
	<div class="mx-auto">
		<div class="card text-center">
			<table class="table table-responsive table-striped">
				<thead class="thead-dark col-12">
					<tr>
						<th>#</th>
						<th cl>Nombre</th>
						<th>Apellido</th>
						<th>Telefono</th>
						<th>Correo</th>
						<th>Tipo de Comercio</th>
					</tr>
				</thead>
				<tbody>
					@foreach($clients as $client)
					<tr>
						<td>{{$loop->iteration}}</td>
						<td>{{$client->name}}</td>
						<td>{{$client->last_name}}</td>
						<td>{{$client->phone}}</td>
						<td>{{$client->email}}</td>
						<td>{{$client->bussiness_type}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection