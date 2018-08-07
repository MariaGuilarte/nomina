@extends('layouts.app')
@section('title', 'Nuevo puesto')
@section('content')
<div class="row">
  <div class="col-md-6 offset-md-1">
    <div class="card">
      <div class="card-header">
        <h1>Nuevo puesto</h1>
      </div>
      
      <div class="card-body">
        <form action="{{ action('PuestoController@store') }}" method="post" class="form-custom">
          {{ csrf_field() }}
          
          <div class="form-group">
            <label for="nombre">Nombre del puesto</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required>
          </div>
          
          <div class="form-group">
            <label for="sueldo_base">Sueldo base</label>
            <input type="number" placeholder="0.00" class="form-control" name="sueldo_base" id="sueldo_base" required>
          </div>
          
          <div class="form-group">
            <label for="departamento_id">Elige el departamento asociado</label>
            <select class="mb-3 form-control" name="departamento_id">
              @foreach( $departamentos as $departamento )
                <option value="{{ $departamento->id }}" >{{ $departamento->nombre }}</option>
              @endforeach
            </select>
          </div>
          
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Registrar</button>
            <a href="{{ url('/puestos') }}" class="btn btn-primary">Volver</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <div class="col-md-2 offset-md-3">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
</div>
@endsection