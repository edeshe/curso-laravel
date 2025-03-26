<?php

use App\Http\Controllers\CursoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome', ['name' => 'Edgar']);
})->name('home'); */ // nombre de la vista

Route::get('/', [CursoController::class, 'getName'])->name('home'); // nombre de la vista

Route::get('/hola', function () {
    return route('hola');
})->name('hola');

// Route::get('/suma', function () {
//     $x = 10;
//     $y = 20;
//     return 'La suma es: ' . $x + $y;
// })->name('plus');

Route::get('/suma', [CursoController::class, 'getSuma'])->name('plus');

Route::get('/suma/{x}/{y}', function ($x, $y) {
    return 'La suma es: ' . $x + $y;
})->name('suma');

Route::get('/suma_exp/{x}/{y}', function($x, $y){
    $a = [1, 2, 3, 4];
    $aa = ['nombre' => 'Edgar', 'apellido' => 'Espino'];
    return 'La suma es ' . ($x + $y); 
})->where(['x' => '[0-9]+','y' => '[0-9]+'])->name('suma2');

Route::get('/nombre/{name?}', function ($name = 'Edgar') { // Parámetro opcional
    return 'Mi nombre es: ' . $name;
});

// 301 - permanente
// 302 - temporal - defecto
Route::redirect('/sumar', '/nombre');

Route::get('/verificar', function (Request $request) {
    if($request->route()->named('verificar')){
        return 'OK';
    } else{
        return 'Verificar...';
    }
})->name('verificar');

Route::prefix('admin')->group(function(){
    Route::get('/primer', function(){
        return 'primer...';
    })->name('admin.primer');
    Route::get('/segundo', function(){
        return 'segundo...';
    })->name('admin.segundo');
});

Route::prefix('math')->group(function(){
    Route::get('/suma/{x}/{y}', [CursoController::class, 'getSuma'])->name('plus');
    Route::get('/resta/{x}/{y}', [CursoController::class, 'getResta'])->name('minus');
    Route::get('/multiplica/{x}/{y}', [CursoController::class, 'getMultiplica'])->name('multiply');
    Route::get('/divide/{x}/{y}', [CursoController::class, 'getDivide'])->name('divide');
});
