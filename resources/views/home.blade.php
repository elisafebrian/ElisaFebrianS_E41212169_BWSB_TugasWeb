<!-- Membuat View Sederhana yaitu dengan menampilkan tampilan dibawah apabila route telah memanggil file home dalam view
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title> {{ config('app.name')}}</title>
</head>
<body>
	<div class="jumbotron jumbotron-fluid">
		<div class= "container">
			<h1 class="display-4">Halama Home</h1>
			<p class="lead">Ini adalah halaman home</p>
		</div>
	</div>
</body>
</html> -->

<!-- membuat view blade tampilan content disini akan tampil apabila app.blade pada layout menampilkan -->
<!-- 
@extends('layouts.app')


@section('content')
<div class="jumbotron jumbotron-fluid">
		<div class= "container">
			<h1 class="display-4">Home Page</h1>
			<p class="lead">This is the Home Page</p>
		</div>
</div>
@endsection -->

<!-- Membuat View dengan parameter  -->

@extends('layouts.app')


@section('content')
<div class="jumbotron jumbotron-fluid">
		<div class= "container">
			<h1 class="display-4">Home Page</h1>
			<p class="lead">This is the Home Page</p>
		</div>
	</div>
	<p>Nama : {{ $nama}} </p>
	<p>Mata Pelajaran</p>
	<u1>
		@foreach($pelajaran as $p)
		<li>{{ $p }} </i>
		@endforeach
</div>
@endsection
