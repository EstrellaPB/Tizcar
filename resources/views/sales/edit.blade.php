@extends('layout')

@section('content')
<h1 class="mt-3">Editar venta</h1>
<br>
<form method="POST" action=" {{ route('sales.update', $sale->id) }} ">
    {!! method_field('PUT') !!}
    @include('sales.form')

    <button type="submit" class="btn btn-outline-primary">Guardar</button>
  </form>

@stop