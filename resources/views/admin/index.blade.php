@extends('layouts.appAdmin')
@section('content')
	<div style="margin: 20px;">
		<h2 class="center-align"> Bienvenido {{ Auth::user()->name }}</h2>	
	</div>
@endsection