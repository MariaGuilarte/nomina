@extends ('layouts.app')

@section('id', 'Actualización de datos')

@section('content')
<div class="row">
  <div class="col-md-6 offset-md-1">
    <div class="card">
      <div class="card-header">
        <h1>Actualizar datos del departamento {{ $departamento->nombre }}</h1>
      </div>
      
      <div class="card-body">
        <form action="{{ route('departamentos.update', ['departamento'=>$departamento]) }}" method="POST" class="form-custom">
          {{ csrf_field() }}
          {{ method_field('PUT') }}
          
          <div class="form-group">
            <label for="id">Id departamento</label>
            <input type="text" class="form-control" name="id" id="id" value="{{ $departamento->id }}">
          </div>
          
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $departamento->nombre }}">
          </div>
          
          <div class="form-group">
            <select class="form-control" name="tipo" id="tipo">
              <label for="tipo">Tipo</label>
              @foreach( $departamento->tipo as $tipo)
                <option value="{{ $tipo }}">{{ $tipo }}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ url('/departamentos') }}" class="btn btn-primary">Volver</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-md-2 offset-md-3">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
    </div>
  </div>
</div>
@endsection