@extends('layout')

@section('content')
<h1 class="mt-3">Nuevo automóvil</h1>
<br>
<form method="POST" action=" {{ route('automobiles.store') }} ">
    @include('automobiles.form')

    <button type="submit" class="btn btn-outline-primary">Guardar</button>
  </form>

@stop