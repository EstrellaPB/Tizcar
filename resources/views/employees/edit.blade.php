@extends('layout')

@section('content')
<h1 class="mt-3">Editar empleado</h1>
<br>
<form method="POST" action=" {{ route('employees.update', $employee->id) }} ">
    {!! method_field('PUT') !!}
    @include('employees.form')

    <button type="submit" class="btn btn-outline-primary">Guardar</button>
  </form>

@stop