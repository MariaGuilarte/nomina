@extends ('layouts.master')

@section('title', 'Vista detalle')

@section('content')
<div class="row">
  <div class="col-md-9">
    <div class="card empleado mb-3">
      <div class="card-header">
        <h1>{{ $empleado->nombre }}</h1>
      </div>
      
      <div class="card-body">
        <table class="table table-responsive">
          <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Micro sip</th>
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
              <td>{{ $empleado->departamento->tipo }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
      
    <div class="card">
      <div class="card-header">
        <span style="font-size: 16px; font-weight:600;">Días trabajados</span>
      </div>
      
      <div class="card-body">
        <table class="table">
          <thead>
            <th>Semana</th>
            <th>De la fecha</th>
            <th>A la fecha</th>
            <th>Trabajó</th>
          </thead>
          <tbody>
          @foreach( $empleado->semanas as $semana)
          <tr>
            <td>{{ $semana->id }}</td>
            <td>{{ $semana->fecha_ini }}</td>
            <td>{{ $semana->fecha_fin }}</td>
            <td>{{ $semana->pivot->status }}</td>
          </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      
      <div class="card-footer">
        <form method="POST" action="{{ route('empleados.destroy', ['id'=>$empleado->id]) }}">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          
          <div class="form-group">
            <a href="{{ url('/empleados') }}" class="btn btn-primary">Volver</a>
            <a href="{{ route('pagos.create', ['id'=>$empleado->id]) }}" class="btn btn-primary">Registrar un pago</a>
            <button type="submit" class="btn btn-danger">Eliminar</button>
          </div>
        </form>
      </div>
    </div>
    
    <div class="card pagos mt-3">
      <div class="card-header">
        <span style="font-size: 16px; font-weight:600;">Pagos de {{ $empleado->nombre }}</span>
      </div>
    
      <div class="card-body">
        <table class="table table-hover table-responsive">
          <thead>
            <th>Pago</th>
            <th>Semana</th>
            <th>Sueldo semanal</th>
            <th>Sueldo fiscal</th>
            <th>Total deducciones</th>
            <th>Recibido</th>
            <th>Estado</th>
            <th>Ver detalle</th>
          </thead>
          <tbody>
            @foreach( $empleado->pagos as $pago )
            <tr>
              <td>{{ $pago->id }}</td>
              <td>{{ $pago->semana_id }}</td>
              <td>{{ $empleado->puesto->sueldo_base }}</td>
              <td>{{ $pago->sueldo_fiscal }}</td>
              <td>{{ $pago->total_deduccions }}</td>
              <td>{{ $pago->sueldo_a_pagar }}</td>
              <td>
                @if($pago->pagado) 
                  Pagado
                @else
                  Pendiente
                @endif
              </td>
              <td>
                <a href="{{ route('pagos.show', ['pago'=>$pago]) }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
      
    <div class="card deducciones mt-3">
      <div class="card-header">
        <span style="font-size: 16px; font-weight:600;">Deducciones de {{ $empleado->nombre }}</span>
      </div>
      
      <div class="card-body">
        <table class="table table-hover table-responsive">
          <thead>
            <th>Código</th>
            <th>Nombre</th>
            <th>Monto</th>
          </thead>
          <tbody>
            @foreach( $empleado->pagos as $p )
              @foreach( $p->deduccions as $d)
                <tr>
                  <td>{{ $d->id }}</td>
                  <td>{{ $d->nombre }}</td>
                  <td>{{ $d->monto }}</td>
                </tr>
              @endforeach
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-md-3">
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