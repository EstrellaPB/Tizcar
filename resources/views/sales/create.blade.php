@extends('layout')

@section('content')
<h1 class="mt-3">Nueva venta</h1>
<br>
<form method="POST" action=" {{ route('sales.store') }} ">
    @include('sales.form')

    <button type="submit" class="btn btn-outline-primary">Guardar</button>
  </form>

@stop