@extends ('layouts.app')

@section('title', 'Vista detalle')

@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="card puesto">
      <div class="card-header">
        <h1> Puesto de {{ $puesto->nombre }}</h1>
      </div>
      
      <div class="card-body">
        Departamento de : {{ $puesto->departamento->nombre }}
      </div>
      
      <div class="card-footer">
        <form method="POST" action="{{ route('puestos.destroy', ['id'=>$puesto->id]) }}">
          {{ csrf_field() }}
          {{ method_field('DELETE') }}
          
          <div class="form-group">
            <a href="{{ url('/puestos') }}" class="btn btn-primary">Volver</a>
            <button type="submit" class="btn btn-danger">Eliminar</button>
          </div>
        </form>
      </div>
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