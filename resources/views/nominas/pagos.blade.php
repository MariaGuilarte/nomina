<!-- Lista de todos los pagos cada fila es una semana de trabajo con los gastos en sueldo totales-->
@extends ('layouts.app')
@section('title', 'Nomina semanal')
@section('content')
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header"></div>
          <div class="card-body">
            <table class="table">
              <thead>
                <th>Semana</th>
                <th>Pagos sueldos base</th>
                <th>Pagos fiscales</th>
                <th>Pagos interno</th>
                <th>Pagos por deducciones</th>
                <th>Pagos extras</th>
                <th>Pagos por vacaciones</th>
                <th>Total pagado</th>
                <th>Fecha</th>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
    </div>
  </div>
@endsection