@extends('layout')

@section('content')
<h1 class="mt-3">Editar cliente</h1>
<br>
<form method="POST" action=" {{ route('customers.update', $customer->id) }} ">
    {!! method_field('PUT') !!}
    @include('customers.form')

    <button type="submit" class="btn btn-outline-primary">Guardar</button>
  </form>

@stop