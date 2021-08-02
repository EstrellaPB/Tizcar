@extends('layout')

@section('content')
<h1 class="mt-3">Editar automóvil</h1>
<br>
<form method="POST" action=" {{ route('automobiles.update', $automobile->id) }} ">
    {!! method_field('PUT') !!}
    @include('automobiles.form')

    <button type="submit" class="btn btn-outline-primary">Guardar</button>
  </form>

@stop