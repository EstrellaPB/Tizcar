{!! csrf_field() !!}
<div class="form-group">
    <label for="inputSerialNNumber">Número de serie</label>
    <input type="text" class="form-control" name="serial_number" id="inputSerialNNumber" placeholder="Número de serie"
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
</div>