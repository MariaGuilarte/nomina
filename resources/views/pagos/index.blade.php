@extends('layouts.app')

@section('title', 'Lista de pagos')

@section('content')

<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-header">
        <h1>Todos los pagos</h1>
      </div>
      
      <div class="card-body">
        <table class="main-table table table-sm table-hover table-responsive">
          <thead>
            <th>Código</th>
            <th>Semana</th>
            <th>Nombre</th>
            <th>Días trabajados</th>
            <th>Sueldo base</th>
            <th>Sueldo fiscal</th>
            <th>Sueldo a pagar</th>
            <th>Pagado</th>
          </thead>
          <tbody>
          @foreach($pagos as $pago)
            <tr>
              <td>
                {{ $pago->id }}
              </td>
              <td>
                {{ $pago->semana->id }}
              </td>
              <td>
                {{ $pago->empleado->nombre }}
              </td>
              <td>
                {{ $pago->cantidad_dias }}
              </td>
              <td>
                {{ $pago->sueldo_semana }}
              </td>
              <td>
                {{ $pago->sueldo_fiscal }}
              </td>
              <td>
                {{ $pago->sueldo_a_pagar }}
              </td>
              <td>
                @if( $pago->pagado )
                  Pagado
                @else
                  Sin pagar
                @endif
              </td>
              <td>
                <div class="btn-group d-flex justify-content-end">
                  <a href="{{ route('pagos.show', ['pago'=>$pago]) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-eye"></i>
                  </a>
                  <a href="{{ route('pagos.edit', ['pago'=>$pago]) }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-edit"></i>
                  </a>
                  
                  <form action="{{ action('DepartamentoController@destroy', $pago) }}" method="post">
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
        {{ $pagos->links() }}
      </div>
    </div>
  </div>
  
  <!-- <div class="col-md-3 offset-md-1"> -->
    <!-- <div class="list-group" id="list-tab" role="tablist"> -->
      <!-- <a class="list-group-item list-group-item-action active" id="list-home-list" href="{{ route('puestos.create') }}" role="tab">Nuevo puesto</a> -->
      <!-- <a class="list-group-item list-group-item-action" id="list-profile-list" href="{{ route('pagos.create') }}" role="tab">Nuevo pago</a> -->
      <!-- <a class="list-group-item list-group-item-action" id="list-messages-list" href="{{ route('empleados.create') }}" role="tab">Nuevo empleado</a> -->
      <!-- <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('puestos.index') }}" role="tab">Puestos</a> -->
      <!-- <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('empleados.index') }}" role="tab">Empleados</a> -->
      <!-- <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('pagos.index') }}" role="tab">Facturas</a> -->
      <!-- <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('pagos.index') }}" role="tab">Nómina semanal</a> -->
      <!-- <a class="list-group-item list-group-item-action" id="list-settings-list" href="{{ route('pagos.index') }}" role="tab">Configuraciones</a> -->
    <!-- </div> -->
  <!-- </div> -->
</div>

@endsection
