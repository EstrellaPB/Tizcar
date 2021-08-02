@extends('layout')
@section('content')
 <h1 class="mt-3"> Empleado - {{ $employee->id }}</h1>
 <br>
<table class="table">
  
      <tr>
        <th scope="row">Id</th>
        <td> {{ $employee->id }} </td>
        {{--  <th scope="col">Nombre</th>
        <th scope="col">Dirección</th>
        <th scope="col">Teléfono</th>  --}}
      </tr>
      <tr>
        <th scope="row">Nombre</th>
        <td>{{ $employee->name . ' '.  $employee->surname }}</td>
      </tr>
      <tr>
          <th scope="row">Dirección</th>
          <td>{{ $employee->email}}</td>
        </tr>

      <tr>
        <th scope="row">Teléfono</th>
        <td>{{ $employee->phone}}</td>
      </tr>

 
  </table>
      <a  role="button" class="btn btn-outline-info btn-sm"
      href=" {{ route('employees.edit', $employee->id) }} ">Editar </a>
      <form style="display:inline"
          method="POST"
          action=" {{ route('employees.destroy', $employee->id) }} ">
        {!! csrf_field() !!}
        {!! method_field('DELETE') !!}
        <button class="btn btn-outline-danger btn-sm" type="submit">Eliminar</button>
      </form>
@stop