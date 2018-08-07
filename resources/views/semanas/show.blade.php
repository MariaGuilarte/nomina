@extends ('layouts.app')

@section('title', 'Vista detalle')

@section('content')
<div class="row">
  <div class="col-md-6">
    <div class="card departamento">
      <div class="card-header">
        <h1>Departamento de {{ $departamento->nombre }}</h1>
      </div>
      
      <div class="card-body">
        <span>Número de departamento : {{ $departamento->id }}</span>
        
        <table class="table">
          <thead>
            <th>Puestos</th>
            <th>Id</th>
            <th>Sueldo base</th>
          </thead>
          <tbody>
            <tr>
              @foreach( $departamento->puestos as $d)
                <td>{{ $d->puesto->nombre }}</td>
                <td>{{ $d->puesto->sueldo_base }}</td>
              @endforeach
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    
    <div class="card-footer">
      <form method="POST" action="{{ route('departamentos.destroy', ['id'=>$departamento->id]) }}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        
        <div class="form-group">
          <a href="{{ url('/departamentos') }}" class="btn btn-primary">Volver</a>
          <button type="submit" class="btn btn-danger">Eliminar departamento</button>
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