@extends('layout')
@section('content')
 <h1 class="mt-3"> Venta - {{ $sale->id }}</h1>
 <br>
<table class="table">
  
      <tr>
        <th scope="row">Id</th>
        <td> {{ $sale->id }} </td>
      </tr>
      <tr>
        <th scope="row">Cliente</th>
        <td>{{ $sale->customer->name  }}</td>
      </tr>
      <tr>
          <th scope="row">Empleado</th>
          <td>{{ $sale->employee->name}}</td>
        </tr>
      <tr>
      <tr>
          <th scope="row">Automóvil</th>
          <td>{{ $sale->automobile->brand . ' '. $sale->automobile->model}}</td>
        </tr>
      <tr>
        <th scope="row">Cargos extras</th>
        <td>${{ $sale->extra }}</td>
      </tr>
      <tr>
          <th scope="row">Total</th>
          <td>${{ $sale->total }}</td>
      </tr>

 
  </table>
            <a  role="button" class="btn btn-outline-info btn-sm"
            href=" {{ route('sales.edit', $sale->id) }} ">Editar </a>
            <form style="display:inline"
                method="POST"
                action=" {{ route('sales.destroy', $sale->id) }} ">
              {!! csrf_field() !!}
              {!! method_field('DELETE') !!}
              <button class="btn btn-outline-danger btn-sm" type="submit">Eliminar</button>
            </form>
@stop