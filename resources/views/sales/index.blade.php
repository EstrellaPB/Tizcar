@extends('layout')

@section('content')
<h1 class="mt-3 float-left">Ventas</h1>
<a  role="button" class="btn btn-outline-primary float-right mt-4" href=" {{ route('sales.create') }} ">Nueva venta </a>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">Cliente</th>
        <th scope="col">Empleado</th>
        <th scope="col">Automóvil</th>
        <th scope="col">Cargos extras</th>
        <th scope="col">Total</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($sales as $sale)    
        <tr>
            <th scope="row"> {{ $sale->id }} </th>
            <td>
               
                {{ $sale->customer->name }}
            </td>
            <td> {{ $sale->employee->name }} </td>
            <td> {{ $sale->automobile->brand . '-' . $sale->automobile->model }} </td>
            <td> {{ $sale->extra }} </td>
            <td>${{ $sale->total }} </td>
            <td>
                    <a role="button" class="btn btn-outline-primary btn-sm" href=" {{ route('sales.show', $sale->id) }}">
                        Ver
                        </a>
                <a  role="button" class="btn btn-outline-info btn-sm"
                    href=" {{ route('sales.edit', $sale->id) }} ">Editar 
                </a>
                <form style="display:inline"
                    method="POST"
                    action=" {{ route('sales.destroy', $sale->id) }} ">
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