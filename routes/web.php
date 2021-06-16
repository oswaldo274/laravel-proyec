<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class);

Route::get('cursos',[CursoController::class,'index']);

Route::get('cursos/create',[CursoController::class,'create']); 

/*Route::get('cursos/{curso}/{categoria}', function ($curso , $categoria=null) {
    if($categoria){
        return "bienvenido al curso: $curso, en la categoria de  $categoria";
    }else{
        return "bienvenido al curso: $curso";
    }
});*/
Route::get('cursos/{curso}',[CursoController::class,'show']);


