<?php

namespace App\Http\Controllers;

use App\Departamento;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateDepartamento;
use App\Http\Requests\StoreDepartamento;

class DepartamentoController extends Controller
{
    public function index()
    {
      $departamentos = Departamento::paginate(10);
      return view('departamentos.index', ["departamentos"=>$departamentos]);
    }

    public function create()
    {
      return view('departamentos.create');
    }

    public function store(StoreDepartamento $request)
    {
      $departamento = new Departamento();
      
      $departamento->nombre = $request->nombre;
      $departamento->tipo = $request->tipo;
      
      if( $departamento->save() ){
        return view("departamentos.show", ["departamento"=>$departamento]);
      }else {
        return redirect()->route('articles.index', ["mensaje"=>"No se pudo guardar el registro"]);
      }
    }

    public function show(Departamento $departamento)
    {
      echo $departamento;
      return view('departamentos.show', ["departamento"=>$departamento]);
    }

    public function edit(Departamento $departamento)
    {
      return view('departamentos.edit', ["departamento"=>$departamento]);
    }

    public function update(UpdateDepartamento $request, Departamento $departamento)
    {
      $departamento->nombre = $request->nombre ? $request->nombre : $departamento->nombre;
      $departamento->tipo = $request->tipo ? $request->tipo : $departamento->tipo;
      
      if( $departamento->save() ){
        return view("departamentos.show", ["departamento"=>$departamento, "mensaje"=>"¡Edición exitosa!"]);
      }else {
        return redirect()->route('departamentos.index', ["mensaje"=>"No se pudo editar el registro"]);
      }
    }

    public function destroy(Departamento $departamento)
    {
      if( $departamento->delete() ){
        return redirect()->route("departamentos.index", ["departamento"=>$departamento, "mensaje"=>"¡Eliminación exitosa!"]);
      }else {
        return redirect()->route('departamentos.index', ["mensaje"=>"No se pudo eliminar el registro"]);
      }
    }
}
