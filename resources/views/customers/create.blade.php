@extends('layout')

@section('content')
<h1 class="mt-3">Nuevo cliente</h1>
<br>
<form method="POST" action=" {{ route('customers.store') }} ">
    @include('customers.form')

    <button type="submit" class="btn btn-outline-primary">Guardar</button>
  </form>

@stop