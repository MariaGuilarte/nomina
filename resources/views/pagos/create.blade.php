@extends('layouts.app')

@section('title', 'Nuevo pago')

@section('content')

<div class="row">
  <div class="col-md-7 offset-md-1">
    <div class="card">
      <div class="card-header">
        <h1>Registrar pago para {{ $empleado->nombre }}</h1>
      </div>
      
      <div class="card-body">
        <div class="form-group">
          <label for="sueldo_base">Sueldo base</label>
          <input type="text" class="form-control" value="{{ $empleado->puesto->sueldo_base }}" disabled>
        </div>
        
        <div class="form-group">
          <label for="sueldo_semana">Sueldo semana</label>
          <input max="1000" type="number" class="form-control" name="sueldo_semana" id="sueldo_semana" required>
        </div>
        
        <div class="form-group">
          <label for="sueldo_interno">Sueldo interno</label>
          <input type="number" placeholder="0.00" class="form-control" name="sueldo_interno" id="sueldo_interno" required>
        </div>
        
        <div class="form-group">
          <label for="sueldo_a_pagar">Sueldo a pagar</label>
          <input type="number" placeholder="0.00" class="form-control" name="sueldo_a_pagar" id="sueldo_a_pagar" required>
        </div>
        
        <div class="form-group">
          <label for="extra">Extra</label>
          <input type="number" placeholder="0.00" class="form-control" name="extra" id="extra" required>
        </div>
        
        <div class="form-group">
          <label for="vacaciones">Vacaciones</label>
          <input type="number" placeholder="0.00" class="form-control" name="vacaciones" id="vacaciones" required>
        </div>
      </div>
      
      <div class="card-footer">
        <form action="{{ action('PagoController@store') }}" method="post" class="form-custom">
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Registrar</button>
            <a href="{{ url('/pagos') }}" class="btn btn-primary">Volver</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <div class="col-md-3 offset-md-1">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
</div>
@endsection