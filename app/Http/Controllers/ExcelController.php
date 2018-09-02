<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Nomina;
use App\Pago;
use App\Empleado;

class ExcelController extends Controller
{
  public function importExportView(){
    return view('import_export');
  }
  
  public function importFile(Request $request){
    
    if( $request->hasFile( 'sample_file' ) ){
      $path = $request->file( 'sample_file' )->getRealPath();
      $data = \Excel::load( $path )->get();
      
      if( $data->count() ){
        foreach( $data as $key => $value ) {
          $arr[] = ['title' => $value->title, 'body' => $value->body];
        }

        if( !empty( $arr ) ){
          DB::table('nominas')->insert($arr);
          dd('Insert Recorded successfully.');
        }
      }
    }
    dd('Request data does not have any files to import.');      
  } 

  public function exportFile( $type ){
    $pagos = Pago::get()->toArray();
    
    return \Excel::create( 'hdtuto_demo', function( $excel ) use ( $pagos ) {
      $excel->sheet('sheet name', function($sheet) use ($pagos) {
        $sheet->fromArray($pagos);
      });
    })->download( $type );
  }      
}
