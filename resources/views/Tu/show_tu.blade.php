@extends('Layout.layout_TU')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
<table class="table table-striped">
  <thead>
	<tr>
		<th scope="col">No</th>
		<th scope="col">Nama</th>
		<th scope="col">Alamat</th>
		<th scope="col">Telepon</th>
        <th scope="col">Agama</th>
        <th scope="col">Tanggal Lahir</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Email</th>
		<th scope="col">Keterangan</th>
	</tr>
	</thead>
	@php
		$i = 1;
	@endphp
	@foreach($tu as $kerte)
	<body>
		<tr>
			<td>{{$i++}}</td>
            <td> {{ $kerte->nama }}</td>
			<td> {{ $kerte->alamat }}</td>
			<td> {{ $kerte->no_hp }}</td>
			<td> {{ $kerte->agama_id }}</td>
            <td> {{ $kerte->tgl_lahir }}</td>
            <td> {{ $kerte->jenis_kelamin}}</td>
            <td> {{ $kerte->email }}</td>
			<td><button type="button" value="Edit" class="btn btn-outline-success" onclick="window.location.assign('/tu/{{$kerte->id}}/edit')">Edit</button> 
				<form action="/tu/{{$kerte->id}}" method="POST">
					@csrf
    				@method('DELETE')
						<button type="sumbit" class="btn btn-outline-danger" value="Delete">Delete</button>
				</form>
			</td>
		</tr>
	</body>
	@endforeach
</table>

<div class="row m-3">
    <div class="text-center">
        <a href="tu/create" class="btn btn-primary shadow">Create</a>
    </div>
</div><br>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>
@endsection