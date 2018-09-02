@extends ('layouts.app')

@section('title', 'Vista detalle')

@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="card deduccion">
      <div class="card-header">
        <h1>Deduccion {{ $deduccion->nombre }}</h1>
      </div>
      
      <div class="card-body">
        <span>Número de deduccion : {{ $deduccion->id }}</span>
        
        <table class="table">
          <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Monto</th>
          </thead>
          <tbody>
            <tr>
              <td>{{ $deduccion->id }}</td>
              <td>{{ $deduccion->nombre }}</td>
              <td>{{ $deduccion->monto }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
    <div class="card-footer">
      <form method="POST" action="{{ route('deducciones.destroy', ['deduccion'=>$deduccion]) }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        
        <div class="form-group">
          <a href="{{ url('/deducciones') }}" class="btn btn-primary">Volver</a>
          <button type="submit" class="btn btn-danger">Eliminar deduccion</button>
        </div>
      </form>
    </div>
  </div>
  
  <div class="col-md-3 offset-md-3">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
</div>
@endsection