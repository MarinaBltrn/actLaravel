<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/example/{nombre?}', function ($nombre = "Marina") {
    return view('example',[ 'nombre' => $nombre]);
});

Route::get('/saludo/{nombre}/{apellido?}', function ($nombre, $apellido=null) {
    return 'Hola ' . $nombre . ' ' . $apellido;
})->where(['nombre' => '[A-Za-z]+', 'apellido' => '[A-Za-z]+']);

Route::get('/suma/{n1}/{n2}', function ($n1, $n2) {
    return 'La suma de estos valores es: ' . $n1 + $n2;
})->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);

Route::get('/resta/{n1}/{n2}', function ($n1, $n2) {
    return 'La resta de estos valores es: ' . $n1 - $n2;
})->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);

Route::get('/multiplicacion/{n1}/{n2}', function ($n1, $n2) {
    return 'La multiplicación de estos valores es: ' . $n1 * $n2;
})->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);

Route::get('/division/{n1}/{n2}', function ($n1, $n2) {
    return 'La división de estos valores es: ' . $n1 / $n2;
})->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);