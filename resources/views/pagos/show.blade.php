@extends ('layouts.app')

@section('title', 'Vista detalle')

@section('content')
<div class="row">
  <div class="col-md-12 mb-4">
    <div class="text-right mb-3">
      <span style="font-size:16px;">Pago del <b>{{ $pago->semana->fecha_ini }}</b> al <b>{{ $pago->semana->fecha_fin }}</b></span>
    </div>
    <div class="card pago">
      <div class="card-header">
        <h1>Pago {{ $pago->id }} de {{ $pago->empleado->nombre }}</h1>
      </div>
      
      <div class="card-body">
        <span>Número de pago : {{ $pago->id }}</span>
        
        <table class="table">
          <thead>
            <th>Sueldo base</th>
            <th>Sueldo semana</th>
            <th>Sueldo fiscal</th>
            <th>Sueldo a pagar</th>
            <th>Pagado</th>
            <th>Fecha de pago</th>
          </thead>
          <tbody>
            <tr>
              <td>{{ $pago->empleado->puesto->sueldo_base }}</td>
              <td>{{ $pago->sueldo_semana }}</td>
              <td>{{ $pago->sueldo_fiscal }}</td>
              <td>{{ $pago->sueldo_a_pagar }}</td>
              @if( $pago->pagodo )
              <td>Pagado</td>
              @else
              <td>Sin pagar</td>
              @endif
              
              @if( $pago->fecha )
              <td>{{ $pago->fecha }}</td>
              @else
              <td>Sin especificar</td>
              @endif
            </tr>
          </tbody>
        </table>
      </div>
    
    
      <div class="card-footer">
        <form method="POST" action="{{ route('pagos.destroy', ['id'=>$pago->id]) }}">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          
          <div class="form-group">
            <a href="{{ route('pagos.create', ['empleado'=>$pago->empleado]) }}" class="btn btn-primary">Registrar pago</a>
            <a href="{{ url('/pagos') }}" class="btn btn-primary">Volver</a>
            <button type="submit" class="btn btn-danger">Eliminar pago</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <span style="font-size:18px;">Deducciones de la semana</span>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <th>Código</th>
            <th>Deducción</th>
            <th>Monto</th>
          </thead>
          <tbody>
          @foreach( $pago->deduccions as $d)
            <tr>
              <td>{{ $d->id }}</td>
              <td>{{ $d->nombre }}</td>
              <td>{{ $d->monto }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">
        <span style="font-size:18px;">Días de la semana trabajados</span>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
            <th>Día</th>
            <th>Jornada</th>
          </thead>
          <tbody>
          @foreach( $pago->empleado->semanas as $dia)
            <tr>
              <td>{{ $dia->pivot->fecha }}</td>
              <td>{{ $dia->pivot->status }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  <!-- <div class="col-md-3"> -->
    <!-- <div class="list-group" id="list-tab" role="tablist"> -->
      <!-- <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a> -->
      <!-- <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a> -->
      <!-- <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a> -->
      <!-- <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a> -->
    <!-- </div> -->
  <!-- </div> -->
</div>
@endsection