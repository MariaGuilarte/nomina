@extends('layouts.app')

@section('title', 'Lista de empleados')

@section('content')

<div class="row">
  <div class="col-md-10">
    <div class="card">
      <div class="card-header">
        <h1>Todos los empleados</h1>
      </div>
      
      <div class="card-body">
        <table class="main-table table table-sm table-hover table-responsive">
          <thead>
            <th>Id</th>
            <th>Número micro sip</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Departamento</th>
            <th>Puesto</th>
            <th>Opciones avanzadas</th>
          </thead>
          <tbody>
          @foreach($empleados as $empleado)
            <tr>
              <td>
                {{ $empleado->id }}
              </td>
              <td>
                {{ $empleado->microsip }}
              </td>
              <td>
                {{ $empleado->nombre }}
              </td>
              <td>
                {{ $empleado->tipo }}
              </td>
              <td>
                {{ $empleado->departamento->nombre }}
              </td>
              <td>
                {{ $empleado->puesto->nombre }}
              </td>
              <td>
                <div class="btn-group d-flex justify-content-end">
                  <a href="{{ route('empleados.show', ['empleado'=>$empleado]) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-eye"></i>
                  </a>
                  <a href="{{ route('empleados.edit', ['empleado'=>$empleado]) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-edit"></i>
                  </a>
                  
                  <form action="{{ action('EmpleadoController@destroy', $empleado->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button id="btn-delete" type="submit" class=" form-control btn btn-primary btn-sm btn-trash"><i class="fa fa-trash"></i></button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      
      <div class="card-footer">
        {{ $empleados->links() }}
      </div>
    </div>
  </div>
  
  <div class="col-md-2">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" href="{{ route('puestos.create') }}" role="tab">Nuevo puesto</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" href="{{ route('departamentos.create') }}" role="tab">Nuevo departamento</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" href="{{ route('empleados.create') }}" role="tab">Nuevo empleado</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('puestos.index') }}" role="tab">Puestos</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('departamentos.index') }}" role="tab">Facturas</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('departamentos.index') }}" role="tab">Nómina semanal</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('departamentos.index') }}" role="tab">Configuraciones</a>
    </div>
  </div>
</div>

@endsection