@extends('layout')
@section('content')
 <h1 class="mt-3"> Cliente - {{ $customer->id }}</h1>
 <br>
<table class="table">
  
      <tr>
        <th scope="row">Id</th>
        <td> {{ $customer->id }} </td>
        {{--  <th scope="col">Nombre</th>
        <th scope="col">Dirección</th>
        <th scope="col">Teléfono</th>  --}}
      </tr>
      <tr>
        <th scope="row">Nombre</th>
        <td>{{ $customer->name . ' '.  $customer->surname }}</td>
      </tr>
      <tr>
          <th scope="row">Dirección</th>
          <td>{{ $customer->email}}</td>
        </tr>
      <tr>
        <th scope="row">Dirección</th>
        <td>{{ $customer->address}}</td>
      </tr>
      <tr>
        <th scope="row">Teléfono</th>
        <td>{{ $customer->phone}}</td>
      </tr>

 
  </table>
            <a  role="button" class="btn btn-outline-info btn-sm"
            href=" {{ route('customers.edit', $customer->id) }} ">Editar </a>
            <form style="display:inline"
                method="POST"
                action=" {{ route('customers.destroy', $customer->id) }} ">
              {!! csrf_field() !!}
              {!! method_field('DELETE') !!}
              <button class="btn btn-outline-danger btn-sm" type="submit">Eliminar</button>
            </form>
@stop