@extends('layout')

@section('content')
<h1 class="mt-3 float-left">Clientes</h1>
<a  role="button" class="btn btn-outline-primary float-right mt-4" href=" {{ route('customers.create') }} ">Nuevo cliente </a>

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombre</th>
        <th scope="col">Dirección</th>
        <th scope="col">Teléfono</th>
        <th scope="col"> Acciones </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($customers as $customer)    
        <tr>
            <th scope="row"> {{ $customer->id }} </th>
            <td>
                <a href=" {{ route('customers.show', $customer->id) }}">
                        {{ $customer->name . ' '.  $customer->last_name }}
                </a>

            </td>
        
            <td> {{ $customer->address }} </td>
            <td> {{ $customer->phone }} </td>
            <td>
                <a  role="button" class="btn btn-outline-info btn-sm"
                    href=" {{ route('customers.edit', $customer->id) }} ">Editar 
                </a>
                <form style="display:inline"
                    method="POST"
                    action=" {{ route('customers.destroy', $customer->id) }} ">
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