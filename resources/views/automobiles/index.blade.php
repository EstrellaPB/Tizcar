@extends('layout')

@section('content')
<h1 class="mt-3 float-left">Automóviles</h1>
<a  role="button" class="btn btn-outline-primary float-right mt-4" href=" {{ route('automobiles.create') }} ">Nuevo automóvil </a>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">id</th>
        <th scope="col">No. Serie</th>
        <th scope="col">Año</th>
        <th scope="col">Modelo</th>
        <th scope="col">Marca</th>
        <th scope="col">Precio</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($automobiles as $automobile)    
        <tr>
            <th scope="row"> {{ $automobile->id }} </th>
            <td>
                <a href=" {{ route('automobiles.show', $automobile->id) }}">
                        {{ $automobile->serial_number }}
                </a>

            </td>
            <td> {{ $automobile->year }} </td>
            <td> {{ $automobile->model }} </td>
            <td> {{ $automobile->brand }} </td>
            <td>${{ $automobile->price }} </td>
            <td>
                <a  role="button" class="btn btn-outline-info btn-sm"
                    href=" {{ route('automobiles.edit', $automobile->id) }} ">Editar 
                </a>
                <form style="display:inline"
                    method="POST"
                    action=" {{ route('automobiles.destroy', $automobile->id) }} ">
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