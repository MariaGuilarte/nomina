<!-- Lista de trabajadores y sus total recibidos por una semana solo si estos están total-->
@extends ('layouts.master')
@section('title', 'Nomina semanal')
@section('content')
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header text-right"></div>
        <div class="card-body">
          <table class="table">
            <thead>
              <th>Semana</th>
              <th>Pago</th>
              <th>Sueldo fiscal</th>
              <th>Sueldo interno</th>
              <th>Deducciones</th>
              <th>Extras</th>
              <th>Vacaciones</th>
              <th>Total</th>
              <th>Fecha</th>
            </thead>
            <tbody>
             {{$total}}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection