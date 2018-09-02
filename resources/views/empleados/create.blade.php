@extends('layouts.app')

@section('title', 'Nuevo empleado')

@section('content')

<div class="row">
  <div class="col-md-6 offset-md-1">
    <div class="card">
      <div class="card-header">
        <h1>Nuevo empleado</h1>
      </div>
      
      <form action="{{ action('EmpleadoController@store') }}" method="post" class="form-custom">
        <div class="card-body">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="title" required>
          </div>
          
          <div class="form-group">
            <label for="microsip">Número de micro sip</label>
            <input type="number" class="form-control" name="microsip" id="microsip" required>
          </div>
              
          <div class="form-row">
            <div class="col-md-4">
              <label for="departamento_id">Departamento de</label>
              <select name="departamento_id" id="departamento_id" class="form-control" required>
                @foreach( $departamentos as $departamento )
                  <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                @endforeach
              </select>
            </div>
                
            <div class="col-md-4">
              <label for="puesto_id">Puesto de</label>
              <select name="puesto_id" id="puesto_id" class="form-control" required>
                @foreach( $puestos as $puesto )
                  <option value="{{ $puesto->id }}">{{ $puesto->nombre }}</option>
                @endforeach
              </select>
            </div>
          </div>
          
        </div>
      
        <div class="card-footer">
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Registrar</button>
            <a href="{{ url('/empleados') }}" class="btn btn-primary">Volver</a>
          </div>
        </div>
        
      </form>
    </div>
  </div>
    
    <div class="col-md-3 offset-md-2">
      <div class="list-group" id="list-tab" role="tablist">
        <a class="list-group-item list-group-item-action active" id="list-home-list" href="{{ route('puestos.create') }}" role="tab">Nuevo puesto</a>
        <a class="list-group-item list-group-item-action" id="list-profile-list" href="{{ route('departamentos.create') }}" role="tab">Nuevo departamento</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('puestos.index') }}" role="tab">Puestos</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('empleados.index') }}" role="tab">Empleados</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('departamentos.index') }}" role="tab">Facturas</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('departamentos.index') }}" role="tab">Nómina semanal</a>
        <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('departamentos.index') }}" role="tab">Configuraciones</a>
      </div>
    </div>
</div>

@endsection