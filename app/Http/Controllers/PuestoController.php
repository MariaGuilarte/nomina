<?php

namespace App\Http\Controllers;

use App\Puesto;
use App\Departamento;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePuesto;
use App\Http\Requests\StorePuesto;

class PuestoController extends Controller
{
    public function index()
    {
      $puestos = Puesto::paginate(10);
      return view('puestos.index', ["puestos"=>$puestos]);
    }

    public function create()
    {
      $departamentos = Departamento::all();
      return view('puestos.create', ["departamentos"=>$departamentos]);
    }

    public function store(StorePuesto $request)
    {
      $puesto = new Puesto();
      
      $puesto->nombre = $request->nombre;
      $puesto->departamento_id = $request->departamento_id;
      $puesto->sueldo_base = $request->sueldo_base;
      
      if( $puesto->save() ){
        return view("puestos.show", ["puesto"=>$puesto]);
      }else {
        return redirect()->route('articles.index', ["mensaje"=>"No se pudo guardar el registro"]);
      }
    }

    public function show(Puesto $puesto)
    {
      return view('puestos.show', ["puesto"=>$puesto]);
    }

    public function edit(Puesto $puesto)
    {
      $departamentos = Departamento::all();
      return view('puestos.edit', ["puesto"=>$puesto, "departamentos" => $departamentos]);
    }

    public function update(UpdatePuesto $request, Puesto $puesto)
    {
     
      $puesto->nombre = $request->nombre ? $request->nombre : $puesto->nombre;
      $puesto->departamento_id = $request->departamento_id ? $request->departamento_id : $puesto->departamento_id;
      $puesto->sueldo_base = $request->sueldo_base ? $request->sueldo_base : $puesto->sueldo_base;
      
      if( $puesto->save() ){
        return view("puestos.show", ["puesto"=>$puesto, "mensaje"=>"¡Edición exitosa!"]);
      }else {
        return redirect()->route('puestos.index', ["mensaje"=>"No se pudo editar el registro"]);
      }
    }

    public function destroy(Puesto $puesto)
    {
      if( $puesto->delete() ){
        return redirect()->route("puestos.index", ["puesto"=>$puesto, "mensaje"=>"¡Eliminación exitosa!"]);
      }else {
        return redirect()->route('puestos.index', ["mensaje"=>"No se pudo eliminar el registro"]);
      }
    }
}
