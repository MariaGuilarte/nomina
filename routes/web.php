<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return view('welcome');
});

Route::resources([
  "empleados" => "EmpleadoController",
  "departamentos" => "DepartamentoController",
  "puestos" => "PuestoController",
  "deducciones" => "DeduccionController",
  "pagos" => "PagoController",
  "nominas" => "NominaController",
]);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('import-export-view', 'ExcelController@importExportView')->name('import.export.view');
Route::post('import-file', 'ExcelController@importFile')->name('import.file');
Route::get('export-file/{type}', 'ExcelController@exportFile')->name('export.file');





