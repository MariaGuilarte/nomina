<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Departamento;
use App\Deduccion;
use App\Puesto;
use App\Pago;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateEmpleado;
use App\Http\Requests\StoreEmpleado;

class EmpleadoController extends Controller
{
    public function index(){
      $empleados = Empleado::paginate(10);
      return view('empleados.index', ["empleados"=>$empleados]);
    }

    public function create()
    {
      $departamentos = Departamento::all();
      $puestos = Puesto::all();
      return view('empleados.create', ["departamentos" => $departamentos, "puestos" => $puestos]);
    }

    public function store(StoreEmpleado $request)
    {
      $empleado = new Empleado();
      
      $empleado->nombre = $request->nombre;
      $empleado->microsip = $request->microsip;
      $empleado->tipo = $request->tipo;
      $empleado->departamento_id = $request->departamento_id;
      $empleado->puesto_id = $request->puesto_id;
      
      if( $empleado->save() ){
        return view("empleados.show", ["empleado"=>$empleado]);
      }else {
        return redirect()->route('articles.index', ["mensaje"=>"No se pudo guardar el registro"]);
      }
    }

    public function show(Empleado $empleado)
    {
      $deducciones = Deduccion::all();
      return view('empleados.show', ["empleado"=>$empleado, "deducciones" => $deducciones]);
    }

    public function edit(Empleado $empleado)
    {
      $departamentos = Departamento::all();
      $puestos = Puesto::all();
      return view('empleados.edit', ["empleado" => $empleado, "departamentos" => $departamentos, "puestos" => $puestos]);
    }

    public function update(UpdateEmpleado $request, Empleado $empleado)
    {
      $empleado->nombre = $request->nombre ? $request->nombre : $empleado->nombre;
      $empleado->microsip = $request->microsip ? $request->microsip : $empleado->microsip;
      $empleado->tipo = $request->tipo ? $request->tipo : $empleado->tipo;
      $empleado->departamento_id = $request->departamento_id ? $request->departamento_id : $empleado->departamento_id;
      $empleado->puesto_id = $request->puesto_id ? $request->puesto_id : $empleado->puesto_id;
      
      if( $empleado->save() ){
        return view("empleados.show", ["empleado"=>$empleado]);
      }else {
        return redirect()->route('empleados.index', ["mensaje"=>"No se pudo editar el registro"]);
      }
    }

    public function destroy(Empleado $empleado)
    {
      if( $empleado->delete() ){
        return redirect()->route("empleados.index", ["empleado"=>$empleado]);
      }else {
        return redirect()->route('empleados.index');
      }
    }
    
}
