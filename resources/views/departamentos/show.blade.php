@extends ('layouts.app')

@section('title', 'Vista detalle')

@section('content')
<div class="row">
  <div class="col-md-7">
    <div class="card departamento">
      <div class="card-header">
        <h1>Departamento de {{ $departamento->nombre }}</h1>
        <span>{{ $departamento->tipo }}</span>
      </div>
      
      <div class="card-body">
        <table class="table">
          <thead>
            <th>Puesto</th>
            <th>Sueldo base</th>
          </thead>
          <tbody>
          @foreach( $departamento->puestos as $p)
          <tr>
            <td>{{ $p->nombre }}</td>
            <td>{{ $p->sueldo_base }}</td>
          </tr>
          @endforeach
          </tbody>
        </table>
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
  </div>
  
  <div class="col-md-3 offset-md-2">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
</div>
@endsection