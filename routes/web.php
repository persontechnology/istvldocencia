<?php

use App\Http\Controllers\CertificadoController;
use App\Http\Controllers\CheckTwoFactorCotroller;
use App\Http\Controllers\CreditoController;
use App\Http\Controllers\CuentaUserController;
use App\Http\Controllers\DatosPersonales;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlazoFijoController;
use App\Http\Controllers\TipoCreditoController;
use App\Http\Controllers\TipoCuentaController;
use App\Http\Controllers\TipoTransaccionController;
use App\Http\Controllers\TitulosController;
use App\Http\Controllers\TransaccionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // Artisan::call('cache:clear');
    // Artisan::call('config:clear');
    // Artisan::call('config:cache');
    // Artisan::call('storage:link');
    // Artisan::call('key:generate');
    // Artisan::call('migrate:fresh --seed');
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('check2fa', [CheckTwoFactorCotroller::class, 'index'])->name('check2fa.index');
Route::post('check2fa', [CheckTwoFactorCotroller::class, 'crear'])->name('check2fa.crear');
Route::get('check2fa/reenviar', [CheckTwoFactorCotroller::class, 'reenviar'])->name('check2fa.reenviar');




Route::middleware(['auth', 'verified','2fa'])->group(function () {
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::post('validarec', [HomeController::class, 'validarec'])->name('validarec');

    // usuarios
    Route::resource('usuarios', UserController::class);
    Route::get('usuarios/identificacion-foto/{id}', [UserController::class,'identificacionFoto'])->name('usuarios.identificacion-foto');
    Route::post('usuarios/actualizar-identificacion-foto', [UserController::class,'actualizarIdentificacionFoto'])->name('usuarios.actualizar-identificacion-foto');
    Route::get('usuarios/ver-archivo/{id}/{tipo}', [UserController::class,'verArchivo'])->name('usuarios.ver-archivo');
    Route::get('usuarios/descargar-archivo/{id}/{tipo}', [UserController::class,'descargarArchivo'])->name('usuarios.descargar-archivo');
    Route::get('usuarios/datos-personales-pdf/{id}', [UserController::class,'datosPersonalesPdf'])->name('usuarios.datosPersonalesPdf');
    


    Route::resource('docentes', DocenteController::class);
    Route::resource('datos-personales', DatosPersonales::class);
    Route::post('datos-personales/actualizar-identificacion-foto', [DatosPersonales::class,'actualizarIdentificacionFoto'])->name('datos-personales.actualizar-identificacion-foto');
    Route::get('datos-personales/ver-archivo/{id}/{tipo}', [DatosPersonales::class,'verArchivo'])->name('datos-personales.ver-archivo');
    Route::get('datos-personales/descargar-archivo/{id}/{tipo}', [DatosPersonales::class,'descargarArchivo'])->name('datos-personales.descargar-archivo');

    Route::resource('titulos',TitulosController::class);
    Route::resource('certificados',CertificadoController::class);
});