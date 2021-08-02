{!! csrf_field() !!}
<div class="form-group">
    <label for="inputName">Nombre</label>
    <input type="text" class="form-control" name="name" id="inputName" placeholder="Nombre(s)"
    value="{{ $employee->name or old('name') }}">
    {!! $errors->first('name', '<div class="alert alert-danger" role="alert">:message                 </div>') !!}

</div>
<div class="form-group">
      <label for="inputLastName">Apellido</label>
      <input type="text" class="form-control" name="last_name" id="inputLastName" placeholder="Apellido(s)"
      value="{{ $employee->lastName or old('last_name') }}">
      {!! $errors->first('last_name', '<div class="alert alert-danger" role="alert">:message                 </div>') !!}

</div>
<div class="form-group">
        <label for="inputEmail">Correo electrónico</label>
        <input type="text" class="form-control" name="email" id="inputEmail" placeholder="Correo electrónico completa" value="{{ $employee->email or old('email') }}">
        {!! $errors->first('email', '<div class="alert alert-danger" role="alert">:message                 </div>') !!}

</div>
<div class="form-group">
        <label for="inputPhone">Teléfono</label>
        <input type="text" class="form-control" name="phone" id="inputPhone" placeholder="Teléfono" value="{{ $employee->phone or old('phone') }}">
        {!! $errors->first('phone', '<div class="alert alert-danger" role="alert">:message                 </div>') !!}

</div>