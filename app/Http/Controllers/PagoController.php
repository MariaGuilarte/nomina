<?php

namespace App\Http\Controllers;

use App\Pago;
use App\Empleado;
use App\Semana;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
      $empleados = Empleado::all();
      $semanas = Semana::all();
      $pagos = Pago::paginate(10);
      return view('pagos.index', ["pagos"=>$pagos, "empleados"=>$empleados, "semanas"=>$semanas]);
    }

    public function create(Request $request)
    {
      $empleado = Empleado::findOrFail( $request->empleado );
      
      return view('pagos.create', ["empleado"=>$empleado]);
    }

    public function store(Request $request)
    {
      $pago = new Pago();
      $empleado = Empleado::findOrFail($request->empleado_id);
      $pago->empleado_id = $empleado->id;
      $pago->semana_id = rand(1,5);
      $pago->fecha = Carbon::now();
      // $pago->cantidad_dias = $request->cantidad_dias;
      $pago->sueldo_semana = $request->sueldo_semana;
      $pago->sueldo_a_pagar = $request->sueldo_a_pagar;
      $pago->sueldo_interno = $request->sueldo_interno;
      $pago->extra = $request->extra;
      $pago->vacaciones = $request->vacaciones;
      
      if( $pago->save() ){
        return view("pagos.show", ["pago"=>$pago, "empleado"=>$empleado]);
      }else {
        return redirect()->route('pagos.index', ["mensaje"=>"No se pudo guardar el registro"]);
      }
    }

    public function show(Pago $pago, Empleado $empleado){
      return view('pagos.show', ["pago"=>$pago, "empleado"=>$empleado]);
    }

    public function edit(Pago $pago)
    {
      return view('pagos.edit', ["pago"=>$pago]);
    }

    public function update(Request $request, Pago $pago)
    {
      $pago->nombre = $request->nombre ? $request->nombre : $pago->nombre;
      $pago->monto = $request->monto ? $request->monto : $pago->monto;
      
      if( $pago->save() ){
        return view("pagos.show", ["pago"=>$pago, "mensaje"=>"¡Edición exitosa!"]);
      }else {
        return redirect()->route('pagos.index', ["mensaje"=>"No se pudo editar el registro"]);
      }
    }

    public function destroy(Pago $pago)
    {
      if( $pago->delete() ){
        return redirect()->route("pagos.index", ["pago"=>$pago, "mensaje"=>"¡Eliminación exitosa!"]);
      }else {
        return redirect()->route('pagos.index', ["mensaje"=>"No se pudo eliminar el registro"]);
      }
    }
}
