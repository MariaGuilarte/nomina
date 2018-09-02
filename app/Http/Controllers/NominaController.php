<?php

namespace App\Http\Controllers;

use App\Nomina;
use App\Empleado;
use App\Puesto;
use App\Pago;
use App\Deduccion;
use App\Semana;
use App\Departamento;
use App\Http\Resources\EmpleadoResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NominaController extends Controller
{
  // public function index(Request $request)
  // {
    // $total = Pago::with(['semana', 'empleado'])
    // ->orderBy('semana_id')
    // ->get();
    
    // $total = $total->where('semana_id', '=', '1')->groupBy('semana_id')->sum('sueldo_interno');
    // // $total = $total->where('semana_id', '=', '1')->sum('sueldo_interno');
    // // $total = DB::table('pagos')->select(DB::raw('sum(sueldo_interno) as interno, sum(sueldo_fiscal) as fiscal'))
                     // // ->groupBy('semana_id')->get();
    
    // //echo $total->first()->empleado->puesto->sueldo_base;
    
    // return view("nominas.index", ["total"=>$total]);
  // }
  
  public function index(){
    $s_base = [];
    $total = 0;
    $count = 0;
    $semana_actual = "";
    
    $pagos = Pago::with(['semana', 'empleado'])
    ->orderBy('semana_id')
    ->get();
    
    foreach( $pagos as $pago ){
      if( $semana_actual != $pago->semana->id){
        if( $count > 0 ){
          $s_base[] = $total;
          echo "Actual " . $semana_actual . " Semana " . $pago->semana->id . " " . $total . "<br>";
          $total = 0;
          $semana_actual = $pago->semana->id;
        }else {
          $semana_actual = $pago->semana->id;
          $count++;
        }
      }
      
      $total += $pago->empleado->puesto->sueldo_base;
    }
    
    var_dump($s_base);
  }
  
  // Total deducciones por fila modelo pago
  protected function totalDeducciones($pagos){
    foreach( $pagos as $pago){
      $pago->total_deduccions = $pago->deduccions->sum("monto");
    }
    return $pagos;
  }

  public function create()
  {
    
  }

  public function store(Request $request)
  {
    
  }

  public function show(Nomina $nomina, Request $request)
  {
    $semana = $nomina->semana_id;
    
    $total = DB::table('pagos')
    ->select(DB::raw('semana_id, sum(sueldo_fiscal) as fiscal, sum(sueldo_interno) as interno, sum(sueldo_semana) as t_semana, sum(extra) as extra, sum(vacaciones)'))
    ->where('semana_id', '=', $semana)
    ->get();
    
    return view("nominas.show", ["total"=>$total]);
  }

  public function edit(Nomina $nomina)
  {
    
  }

  public function update(Request $request, Nomina $nomina)
  {
    
  }

  public function destroy(Nomina $nomina)
  {
    
  }
  
}
