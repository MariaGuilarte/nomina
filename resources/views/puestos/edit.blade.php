@extends ('layouts.app')

@section('title', 'Actualización de datos')

@section('content')
<div class="row">
  <div class="col-md-6 offset-md-1">
    <div class="card">
      <div class="card-header">
        <h1>Actualizar datos del puesto {{ $puesto->nombre }}</h1>
      </div>
      
      <div class="card-body">
        <form action="{{ route('puestos.update', ['puesto'=>$puesto]) }}" method="POST" class="form-custom">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          
          <div class="form-group">
            <label for="nombre">Nombre del puesto</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $puesto->nombre }}" required>
          </div>
          
          <div class="form-group">
            <label for="sueldo_base">Sueldo base</label>
            <input type="number" placeholder="0.00" class="form-control" name="sueldo_base" id="sueldo_base" value="{{ $puesto->sueldo_base }}" required>
          </div>
          
          <div class="form-group">
            <label for="departamento_id">Elige un departamento</label>
            <select class="form-control" name="departamento_id">
              @foreach( $departamentos as $departamento )
                <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ url('/puestos') }}" class="btn btn-primary">Volver</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <div class="col-md-4">
    <span>Ir a...</span>
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action" href="{{ url('/empleados') }}" role="tab" aria-controls="home">Empleados</a>
      <a class="list-group-item list-group-item-action" href="{{ url('/departamentos') }}" role="tab" aria-controls="profile">Departamentos</a>
      <a class="list-group-item list-group-item-action" href="{{ url('/puestos') }}" role="tab" aria-controls="messages">Puestos</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
</div>
@endsection