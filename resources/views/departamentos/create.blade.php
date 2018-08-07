@extends('layouts.app')

@section('title', 'Nuevo departamento')

@section('content')

<div class="row">
  <div class="col-md-6 offset-md-1">
    <div class="card">
      <div class="card-header">
        <h1>Nuevo departamento</h1>
      </div>
      
      <div class="card-body">
        <form action="{{ action('DepartamentoController@store') }}" method="post" class="form-custom">
          {{ csrf_field() }}
          
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required>
          </div>
          
          <!-- <div class="form-group"> -->
            <!-- <select class="form-control" name="tipo" id="tipo"> -->
              <!-- <label for="tipo">Tipo</label> -->
              <!-- @foreach( $departamento->tipo as $tipo) -->
                <!-- <option value="{{ $tipo }}">{{ $tipo }}</option> -->
              <!-- @endforeach -->
            <!-- </select> -->
          <!-- </div> -->
      
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Registrar</button>
            <a href="{{ url('/departamentos') }}" class="btn btn-primary">Volver</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <div class="col-md-2 offset-md-3">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#">Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#" role="tab">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#" role="tab">Settings</a>
    </div>
  </div>
</div>
@endsection