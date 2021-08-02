{!! csrf_field() !!}
<div class="row">
<div class="col-md-6">
        <div class="form-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Cliente: </label>
                <select name="customer" class="custom-select" id="inputGroupSelect01">
                        <option value="" selected>Elegir...</option>
                        @foreach ($customers as $customer)
                                <option {{ ( isset($sale) && ($sale->customer_id == $customer->id) )? 'selected' : '' }} value="{{ $customer->id }}"> {{ $customer->name . ' '. $customer->last_name }}</option>
                        @endforeach
                </select>
        </div>
        {!! $errors->first('customer', '<div class="alert alert-danger" role="alert">:message                 </div>') !!}
</div>

<div class="col-md-6">
        <div class="form-group mb-3">
                <label class="input-group-text" for="automobileSelect">Automóvil: </label>
                <select name="automobile" class="custom-select" id="automobileSelect" >
                        <option value="" selected>Elegir...</option>
                        @foreach ($automobiles as $automobile)
                                <option {{  (isset($sale) && $sale->automobile_id == $automobile->id) ? 'selected' : '' }} data-price="{{ $automobile->price }}" value="{{ $automobile->id }}"> {{ $automobile->brand . ' '. $automobile->model }}</option>
                        @endforeach
                </select>
                
        </div>
        {!! $errors->first('automobile', '<div class="alert alert-danger" role="alert">:message                 </div>') !!}
</div>
</div>

<table class="table text-right">
  
                <tr>
                  <th scope="row">Subtotal $</th>
                  <td class="" >   
                        <div class="form-group">
                                <input readonly type="number" class="form-control text-right" id="subtotal" placeholder="0.00" value="{{ isset($sale) ? $sale->automobile->price : ''}}"
                                >
                        </div>
                  </td>
                </tr>
                <tr>
                    <th scope="row">
                                <label for="input">Cargos extras $</label>
                    </th>
                    <td>
                        <div class="form-group">
                                <input type="number" class="form-control text-right" name="extra" id="extra" placeholder="0.00" 
                                value="{{ $sale->extra or old('extra') }}">
                                {!! $errors->first('extra', '<div class="alert alert-danger" role="alert">:message                 </div>') !!}
                        </div>
                    </td>
                  </tr>
                  <hr>
                  <tr>
                        <th scope="row">TOTAL $</th>
                        <td class=""> 
                                <div class="form-group">
                                        <input readonly type="number" class="form-control text-right" name="total" id="total" placeholder="0.00"
                                        value="{{ $sale->total or old('total') }}">
                                        {!! $errors->first('total', '<div class="alert alert-danger" role="alert">:message                 </div>') !!}
                                </div>
                         </td>
                  </tr>
           
</table>
<div class="col-md-6">
        <div class="form-group mb-3">
                <label class="input-group-text" for="inputGroupSelect03">Empleado: </label>
                <select name="employee" class="custom-select" id="inputGroupSelect03">
                        <option value="" selected>Elegir...</option>
                        @foreach ($employees as $employee)
                                <option {{ (isset($sale) && $sale->employee_id == $employee->id) ? 'selected' : '' }} value="{{ $employee->id }}"> {{ $employee->name . ' '. $employee->last_name }}</option>
                        @endforeach
                </select>
                {!! $errors->first('employee', '<div class="alert alert-danger" role="alert">:message                 </div>') !!}
        </div>
</div>
{{--  <div class="form-group">
    <label for="input">Número de serie</label>
    <input type="text" class="form-control" name="serial_number" id="input" placeholder="Número de serie"
    value="{{ $automobile->serial_number or old('serial_number') }}">
    {!! $errors->first('serial_number', '<div class="alert alert-danger" role="alert">:message                 </div>') !!}

</div>
<div class="form-group">
      <label for="inputYear">Año</label>
      <input type="text" class="form-control" name="year" id="inputYear" placeholder="Año"
      value="{{ $automobile->year or old('year') }}">
      {!! $errors->first('year', '<div class="alert alert-danger" role="alert">:message                 </div>') !!}

</div>
<div class="form-group">
        <label for="inputModel">Modelo</label>
        <input type="text" class="form-control" name="model" id="inputModel" placeholder="Modelo completa" value="{{ $automobile->model or old('model') }}">
        {!! $errors->first('model', '<div class="alert alert-danger" role="alert">:message                 </div>') !!}
</div>
<div class="form-group">
        <label for="inputBrand">Marca</label>
        <input type="text" class="form-control" name="brand" id="inputBrand" placeholder="Marca" value="{{ $automobile->brand or old('brand') }}">
        {!! $errors->first('brand', '<div class="alert alert-danger" role="alert">:message                 </div>') !!}
</div>
<div class="form-group">
        <label for="inputPrice">Precio</label>
        $<input type="text" class="form-control" name="price" id="inputPrice" placeholder="0.00" value="{{ $automobile->price or old('price') }}">
        {!! $errors->first('price', '<div class="alert alert-danger" role="alert">:message </div>') !!}
</div>  --}}