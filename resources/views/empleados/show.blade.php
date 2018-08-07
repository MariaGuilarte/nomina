@extends ('layouts.app')

@section('title', 'Vista detalle')

@section('content')
<div class="row">
  <div class="col-md-10">
    <div class="card empleado">
      <div class="card-header">
        <h1>{{ $empleado->nombre }}</h1>
      </div>
      
      <div class="card-body">
        <table class="table table-responsive">
          <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Número de micro sip</th>
            <th>Departamento</th>
            <th>Puesto</th>
            <th>Sueldo base</th>
            <th>Tipo</th>
          </thead>
          <tbody>
            <tr>
              <td>{{ $empleado->id }}</td>
              <td>{{ $empleado->nombre }}</td>
              <td>{{ $empleado->microsip }}</td>
              <td>{{ $empleado->departamento->nombre }}</td>
              <td>{{ $empleado->puesto->nombre }}</td>
              <td>{{ $empleado->puesto->sueldo_base }}</td>
              <td>{{ $empleado->tipo }}</td>
            </tr>
          </tbody>
        </table>
      </div>
      
      <div class="card-footer">
        <form method="POST" action="{{ route('empleados.destroy', ['id'=>$empleado->id]) }}">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          
          <div class="form-group">
            <a href="{{ url('/empleados') }}" class="btn btn-primary">Volver</a>
            <button type="submit" class="btn btn-danger">Eliminar</button>
          </div>
        </form>
      </div>
    </div>
  
    <div class="card pagos mt-3">
      <div class="card-header">
        Pagos de {{ $empleado->nombre }}
      </div>
    
      <div class="card-body">
        <table class="table table-hover table-responsive">
          <thead>
            <th>Semana</th>
            <th>Sueldo semanal</th>
            <th>Sueldo fiscal</th>
            <th>Sueldo a pagar</th>
            <th>Estado</th>
            <th>Ver detalle</th>
          </thead>
          <tbody>
            @foreach( $empleado->pagos as $pago )
            <tr>
              <td>{{ $pago->semana_id }}</td>
              <td>{{ $empleado->puesto->sueldo_base }}</td>
              <td>{{ $empleado->puesto->pago_fiscal }}</td>
              <td>Totalidad</td>
              <td>
                @if($pago->pagado) 
                  Pagado
                @else
                  Pendiente
                @endif
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="card deducciones mt-3">
      <div class="card-header">
        Deducciones de {{ $empleado->nombre }}
      </div>
      
      <div class="card-body">
        <table class="table table-hover table-responsive">
          <thead>
            <th>Código</th>
            <th>Nombre</th>
            <th>Monto</th>
            <th>Nota</th>
          </thead>
          <tbody>
          @foreach( $deducciones as $d )
            <tr>
              <td>
                {{ $d->id }}
              </td>
              <td>
                {{ $d->nombre }}
              </td>
              <td>
                {{ $d->monto }}
              </td>
              <td>
                {{ $d->nota }}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  <div class="col-md-2">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" href="{{ route('puestos.create') }}" role="tab">Nuevo puesto</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" href="{{ route('departamentos.create') }}" role="tab">Nuevo departamento</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" href="{{ route('empleados.create') }}" role="tab">Nuevo empleado</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('puestos.index') }}" role="tab">Puestos</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('departamentos.index') }}" role="tab">Departamentos</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('empleados.index') }}" role="tab">Empleados</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('departamentos.index') }}" role="tab">Facturas</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('departamentos.index') }}" role="tab">Nómina semanal</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('departamentos.index') }}" role="tab">Configuraciones</a>
    </div>
  </div>
</div>

@endsection