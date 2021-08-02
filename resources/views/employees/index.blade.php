@extends('layout')

@section('content')
<h1 class="mt-3 float-left">Empleados</h1>
<a  role="button" class="btn btn-outline-primary float-right mt-4" href=" {{ route('employees.create') }} ">Nuevo empleado </a>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)    
        <tr>
            <th scope="row"> {{ $employee->id }} </th>
            <td>
                <a href=" {{ route('employees.show', $employee->id) }}">
                        {{ $employee->name . ' '.  $employee->last_name }}
                </a>

            </td>
            
            <td> {{ $employee->phone }} </td>
            <td>
                <a  role="button" class="btn btn-outline-info btn-sm"
                    href=" {{ route('employees.edit', $employee->id) }} ">Editar 
                </a>
                <form style="display:inline"
                    method="POST"
                    action=" {{ route('employees.destroy', $employee->id) }} ">
                    {!! csrf_field() !!}
                    {!! method_field('DELETE') !!}
                    <button class="btn btn-outline-danger btn-sm" type="submit">Eliminar</button>
                </form>
        </td>
        </tr>
        @endforeach

    </tbody>
  </table>
  


@stop