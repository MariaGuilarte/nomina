@extends ('layouts.app')

@section('title', 'Actualización de datos')

@section('content')
<div class="row">
  <div class="col-md-10 offset-md-1">
    <h1>Actualizar datos de {{ $empleado->nombre }}</h1>
    
    <form action="{{ route('empleados.update', ['empleado'=>$empleado]) }}" method="POST" class="form-custom">
      {{ csrf_field() }}
      {{ method_field('PUT') }}
      
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $empleado->nombre }}">
      </div>
      
      <div class="form-group">
        <label for="microsip">Número de micro sip</label>
        <input class="form-control" type="number" value="{{ $empleado->microsip }}" name="microsip" id="microsip">
      </div>
      
      <div class="row mb-3">
        <div class="col-md-4">
          <select name="tipo" id="tipo" class="form-control" required>
            <option value="Administrativo">Administrativo</option>
            <option value="Mano de obra">Mano de obra</option>
          </select>
        </div>
        
        <div class="col-md-4">
          <select name="departamento_id" id="departamento_id" class="form-control" required>
            @foreach( $departamentos as $departamento )
              <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
            @endforeach
          </select>
        </div>
        
        <div class="col-md-4">
          <select name="puesto_id" id="puesto_id" class="form-control" required>
            @foreach( $puestos as $puesto )
              <option value="{{ $puesto->id }}">{{ $puesto->nombre }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ url('/empleados') }}" class="btn btn-primary">Volver</a>
      </div>
    </form>
  </div>
</div>
@endsection