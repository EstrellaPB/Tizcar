@extends('layout')
@section('content')
 <h1 class="mt-3"> Automóvil - {{ $automobile->id }}</h1>
 <br>
<table class="table">
  
      <tr>
        <th scope="row">Id</th>
        <td> {{ $automobile->id }} </td>
        {{--  <th scope="col">Nombre</th>
        <th scope="col">Dirección</th>
        <th scope="col">Teléfono</th>  --}}
      </tr>
      <tr>
        <th scope="row">Número de serie</th>
        <td>{{ $automobile->serial_number  }}</td>
      </tr>
      <tr>
          <th scope="row">Año</th>
          <td>{{ $automobile->year}}</td>
        </tr>
      <tr>
        <th scope="row">Modelo</th>
        <td>{{ $automobile->model }}</td>
      </tr>
      <tr>
          <th scope="row">Marca</th>
          <td>{{ $automobile->brand }}</td>
      </tr>
      <tr>
          <th scope="row">Precio</th>
          <td>{{ $automobile->price }}</td>
      </tr>
 
  </table>
            <a  role="button" class="btn btn-outline-info btn-sm"
            href=" {{ route('automobiles.edit', $automobile->id) }} ">Editar </a>
            <form style="display:inline"
                method="POST"
                action=" {{ route('automobiles.destroy', $automobile->id) }} ">
              {!! csrf_field() !!}
              {!! method_field('DELETE') !!}
              <button class="btn btn-outline-danger btn-sm" type="submit">Eliminar</button>
            </form>
@stop