<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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

Route::get('/poo', function () {
    $valor = '1';
    $tipo = gettype($valor);
    dd(gettype($tipo));
    switch ($tipo) {
        case 'integer':
            echo 'encontrou o valor '.$valor;
            break;
        case 'string':
            echo 'encontrou '.$valor;
            break;
        default:
            echo 'valor não identificado';
            break;
    }
});


Route::get('/course', [CourseController::class, 'index'])->name('courses');
Route::get('/course/{id}', [CourseController::class, 'show'])->name('course');
Route::get('/msg', function () {
    return view('msg');
});