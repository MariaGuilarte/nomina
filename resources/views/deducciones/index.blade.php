@extends('layouts.app')

@section('title', 'Lista de deducciones')

@section('content')

<div class="row">
  <div class="col-md-8">
    <div class="card">
      <div class="card-header">
        <h1>Todos los deducciones</h1>
      </div>
      
      <div class="card-body">
        <table class="main-table table table-sm table-hover table-responsive">
          <thead>
            <th>Número</th>
            <th>Nombre deduccion</th>
            <th>Monto</th>
            <th>Opciones avanzadas</th>
          </thead>
          <tbody>
          @foreach($deducciones as $deduccion)
            <tr>
              <td>
                {{ $deduccion->id }}
              </td>
              <td>
                {{ $deduccion->nombre }}
              </td>
              <td>{{ $deduccion->monto }}</td>
              <td>
                <div class="btn-group d-flex justify-content-end">
                  <a href="{{ route('deducciones.show', ['deduccion'=>$deduccion]) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-eye"></i>
                  </a>
                  <a href="{{ route('deducciones.edit',  ['deduccion'=>$deduccion]) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-edit"></i>
                  </a>
                  
                  <form action="{{ action('DeduccionController@destroy', $deduccion) }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button id="btn-delete" type="submit" class="btn-trash btn-sm form-control" class="btn btn-primary btn-sm"><i class="fa fa-trash"></i></button>
                  </form>
                </div>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
      <div class="card-footer">
        {{ $deducciones->links() }}
      </div>
    </div>
  </div>
  
  <div class="col-md-3 offset-md-1">
    <div class="list-group" id="list-tab" role="tablist">
      <a class="list-group-item list-group-item-action active" id="list-home-list" href="{{ route('puestos.create') }}" role="tab">Nuevo puesto</a>
      <a class="list-group-item list-group-item-action" id="list-profile-list" href="{{ route('deducciones.create') }}" role="tab">Nuevo deduccion</a>
      <a class="list-group-item list-group-item-action" id="list-messages-list" href="{{ route('empleados.create') }}" role="tab">Nuevo empleado</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('puestos.index') }}" role="tab">Puestos</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('empleados.index') }}" role="tab">Empleados</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('deducciones.index') }}" role="tab">Facturas</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('deducciones.index') }}" role="tab">Nómina semanal</a>
      <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('deducciones.index') }}" role="tab">Configuraciones</a>
    </div>
  </div>
</div>

@endsection
