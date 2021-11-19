<?php

use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dash', function () {
    return view('dash.index');
})->name('dash');*/

Route::resource('home', HomeController::class);
Route::resource('persona', PersonaController::class);
/*Vehículos*/
Route::resource('vehiculo', VehiculoController::class);
Route::get('/buscarvehiculo',[App\Http\Controllers\VehiculoController::class, 'find']);
Route::post('/updateentidadvehiculo',[App\Http\Controllers\VehiculoController::class, 'updateentidadvehiculo']);
Route::post('/quitarentidadvehiculo',[App\Http\Controllers\VehiculoController::class, 'quitarentidadvehiculo']);
//Route::post('/storefrommodal', [App\Http\Controllers\VehiculoController::class, 'storefrommodal'])->name('storefrommodal');

/*EntidadesComerciales*/
Route::resource('entidadesComerciales', EntidadesComercialeController::class);

Route::resource('libretasSanitarias', LibretasSanitariaController::class);
Route::resource('licenciasReba', LicenciasRebaController::class);
Route::resource('habilitacionesComerciales', HabilitacionesComercialeController::class);

