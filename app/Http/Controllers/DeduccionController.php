<?php

namespace App\Http\Controllers;

use App\Deduccion;
use Illuminate\Http\Request;

class DeduccionController extends Controller
{
    public function index()
    {
      $deducciones = Deduccion::paginate(10);
      return view('deducciones.index', ["deducciones"=>$deducciones]);
    }

    public function create()
    {
      return view('deducciones.create');
    }

    public function store(Request $request)
    {
      $deduccion = new Deduccion();
      
      $deduccion->nombre = $request->nombre;
      $deduccion->monto = $request->monto;
      
      if( $deduccion->save() ){
        return view("deducciones.show", ["deduccion"=>$deduccion]);
      }else {
        return redirect()->route('deducciones.index', ["mensaje"=>"No se pudo guardar el registro"]);
      }
    }

    public function show(Deduccion $deduccion)
    {
      return view('deducciones.show', ["deduccion"=>$deduccion]);
    }

    public function edit(Deduccion $deduccion)
    {
      return view('deducciones.edit', ["deduccion"=>$deduccion]);
    }

    public function update(Request $request, Deduccion $deduccion)
    {
      $deduccion->nombre = $request->nombre ? $request->nombre : $deduccion->nombre;
      $deduccion->monto = $request->monto ? $request->monto : $deduccion->monto;
      
      if( $deduccion->save() ){
        return view("deducciones.show", ["deduccion"=>$deduccion, "mensaje"=>"¡Edición exitosa!"]);
      }else {
        return redirect()->route('deducciones.index', ["mensaje"=>"No se pudo editar el registro"]);
      }
    }

    public function destroy(Deduccion $deduccion)
    {
      if( $deduccion->delete() ){
        return redirect()->route("deducciones.index", ["deduccion"=>$deduccion, "mensaje"=>"¡Eliminación exitosa!"]);
      }else {
        return redirect()->route('deducciones.index', ["mensaje"=>"No se pudo eliminar el registro"]);
      }
    }
}
