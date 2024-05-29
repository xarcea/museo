<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\Coordinador\ActividadControllerCoordinador;
use App\Http\Controllers\Api\Coordinador\ArchivoControllerCoordinador;
use App\Http\Controllers\Api\Coordinador\BitacoraControllerCoordinador;
use App\Http\Controllers\Api\Coordinador\EventoControllerCoordinador;
use App\Http\Controllers\Api\Coordinador\TareaControllerCoordinador;
use App\Http\Controllers\Api\Empleado\ActividadControllerEmpleado;
use App\Http\Controllers\Api\Empleado\ArchivoControllerEmpleado;
use App\Http\Controllers\Api\Empleado\BitacoraControllerEmpleado;
use App\Http\Controllers\Api\Empleado\EventoControllerEmpleado;
use App\Http\Controllers\Api\Empleado\ItemController;
use App\Http\Controllers\Api\Empleado\TareaControllerEmpleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(function () {
    //públicas
    Route::get('/login', [AuthController::class, 'login']);

    //privadas
    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::post('/logout', [AuthController::class, 'logout']);

        //administrador
        Route::get('/empleados', [AuthController::class, 'register']);

        //empleados
        Route::apiResource('/items', ItemController::class);
        Route::apiResource('/tareas', TareaControllerEmpleado::class);
        Route::apiResource('/bitacoras', BitacoraControllerEmpleado::class);
        Route::apiResource('/eventos', EventoControllerEmpleado::class);
        Route::apiResource('/actividades', ActividadControllerEmpleado::class);
        Route::apiResource('/archivos', ArchivoControllerEmpleado::class);

        //coordinadores
        Route::apiResource('/tareas', TareaControllerCoordinador::class);
        Route::apiResource('/bitacoras', BitacoraControllerCoordinador::class);
        Route::apiResource('/eventos', EventoControllerCoordinador::class);
        Route::apiResource('/actividades', ActividadControllerCoordinador::class);
        Route::apiResource('/archivos', ArchivoControllerCoordinador::class);
    });
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
