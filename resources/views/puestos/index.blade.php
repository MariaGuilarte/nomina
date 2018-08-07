@extends('layouts.app')

@section('title', 'Lista de puestos')

@section('content')

<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h1>Todos los puestos</h1>
      </div>
      
      <div class="card-body">
        <table class="main-table table table-sm table-hover table-responsive">
          <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Sueldo base</th>
            <th>Departamento</th>
            <th>Opciones avanzadas</th>
          </thead>
          <tbody>
          @foreach($puestos as $puesto)
            <tr>
              <td>
                {{ $puesto->id }}
              </td>
              <td>
                {{ $puesto->nombre }}
              </td>
              <td>
                {{ $puesto->sueldo_base }}
              </td>
              <td>
                {{ $puesto->departamento->nombre }}
              </td>
              <td>
                <div class="btn-group d-flex justify-content-end">
                  <a href="{{ route('puestos.show', ['puesto'=>$puesto]) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-eye"></i>
                  </a>
                  <a href="{{ route('puestos.edit', ['puesto'=>$puesto]) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-edit"></i>
                  </a>
                  
                  <form action="{{ action('PuestoController@destroy', $puesto) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button id="btn-delete" type="submit" class="btn btn-sm btn-trash form-control" class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      
      <div class="card-footer">
        {{ $puestos->links() }}
      </div>
    </div>
  </div>
  
  <div class="col-md-3 offset-md-1">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" href="{{ route('puestos.create') }}" role="tab">Nuevo puesto</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" href="{{ route('departamentos.create') }}" role="tab">Nuevo departamento</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" href="{{ route('empleados.create') }}" role="tab">Nuevo empleado</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('departamentos.index') }}" role="tab">Departamentos</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('empleados.index') }}" role="tab">Empleados</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('departamentos.index') }}" role="tab">Facturas</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('departamentos.index') }}" role="tab">Nómina semanal</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('departamentos.index') }}" role="tab">Configuraciones</a>
    </div>
  </div>
</div>

@endsection