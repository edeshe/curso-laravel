<?php

use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\Suscribed;
use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome', ['name' => 'Edgar']);
})->name('home'); */ // nombre de la vista

Route::get('/', [CursoController::class, 'getName'])->name('home'); // nombre de la vista

Route::get('/hola', function () {
    return route('hola');
})->name('hola');

Route::get('/suma', function () {
    $x = 10;
    $y = 20;
    return 'La suma es: ' . $x + $y;
})->name('suma');

// Route::get('/suma', [CursoController::class, 'getSuma'])->name('plus');

// Route::get('/suma/{x}/{y}', function ($x, $y) {
//     return 'La suma es: ' . $x + $y;
// })->name('suma');

// Route::get('/suma_exp/{x}/{y}', function($x, $y){
//     $a = [1, 2, 3, 4];
//     $aa = ['nombre' => 'Edgar', 'apellido' => 'Espino'];
//     return 'La suma es ' . ($x + $y); 
// })->where(['x' => '[0-9]+','y' => '[0-9]+'])->name('suma2');

Route::get('/nombre/{name?}', function ($name = 'Edgar') { // Parámetro opcional
    return 'Mi nombre es: ' . $name;
});

// 301 - permanente
// 302 - temporal - defecto
// Route::redirect('/sumar', '/nombre');

// Route::get('/verificar', function (Request $request) {
//     if($request->route()->named('verificar')){
//         return 'OK';
//     } else{
//         return 'Verificar...';
//     }
// })->name('verificar');

// Route::prefix('admin')->group(function(){
//     Route::get('/primer', function(){
//         return 'primer...';
//     })->name('admin.primer');
//     Route::get('/segundo', function(){
//         return 'segundo...';
//     })->name('admin.segundo');
// });

Route::prefix('math')->group(function(){
    Route::get('/suma/{x}/{y}', [CursoController::class, 'getSuma'])->name('plus');
    Route::get('/resta/{x}/{y}', [CursoController::class, 'getResta'])->name('minus');
    Route::get('/multiplica/{x}/{y}', [CursoController::class, 'getMultiplica'])->name('multiply');
    Route::get('/divide/{x}/{y}', [CursoController::class, 'getDivide'])->name('divide');
});

Route::resource('users', AdminUserController::class)->parameters([
    'users' => 'admin_user'
]);

// Se tiene que registrar antes de usarlo
Route::get('suscribed', function(){
    return 'Bienvenido suscrito';
// })->middleware(Suscribed::class); // middleware de clase
})->middleware('suscribed'); // middleware por alias, se registra en bootstrap > app

// Mostrar vistas
// Así:

// Route::view('ejemplo', 'example', ['nombre' => 'Edgar'])->name('example');

// o así:

Route::get('/ejemplo', function () {
    return view('example', ['nombre' => 'Edgar Espino']);
});

Route::get('/plantilla', [CursoController::class, 'index'])->name('curso.index');

Route::view('mostrar', 'display', ['message' => '<p>Esto es un parafo en message</p>'])->name('display');

Route::get('directivas', [UserController::class, 'index'])->name('directivas');

Route::view('incluir', 'incluir');

Route::controller(PostController::class)->group(function (){
    Route::get('/posts', 'index')->name('posts.index');
    Route::get('/posts/create', 'create')->name('posts.create');
    Route::post('posts', 'store')->name('posts.store');
    Route::get('/posts/show', 'show')->name('posts.show');
});

Route::get('datos', [UserController::class, 'data']);
Route::get('guardar', [UserController::class, 'store']);
Route::get('actualizar/{id}', [UserController::class, 'update']);
Route::get('borrar/{id}', [UserController::class, 'destroy']);

Route::get('form', function () {
    return view('form');
});
Route::put('guardar', [UserController::class, 'store'])->name('save');

Route::get('prueba', function () {
    /* User::create([
        'name' => 'Edgar',
        'lastname' => 'E.',
        'email' => 'prueba@gmail.com',
        'phone' => '9999999999',
        'password' => Hash::make('12345678'),
    ]); */
    /* Phone::create([
        'number' => '9999999999',
        'user_id' => 14,
    ]); */
    // return 'OK... registro guardado';
    // $user = User::find(14);

    // $user = User::where('id', 14)->with('phone')->first();
    
    // $user = Phone::where('user_id', 14)->with('user')->first();

    $user = Phone::find(1);
    
    // $user = User::find(14)->phone;
    return $user;
    // return $user->phone;
});