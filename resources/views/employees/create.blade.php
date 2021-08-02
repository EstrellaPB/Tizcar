@extends('layout')

@section('content')
<h1 class="mt-3">Nuevo empleado</h1>
<br>
<form method="POST" action=" {{ route('employees.store') }} ">
    @include('employees.form')

    <button type="submit" class="btn btn-outline-primary">Guardar</button>
  </form>

@stop