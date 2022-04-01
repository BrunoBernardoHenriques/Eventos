<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;

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


Route::get('/', [EventoController::class, 'index']); 
   
Route::get('/evento/criar', [EventoController::class, 'create']); 


Route::get('/contact', function () {
    return view('contact');
});

Route::get('/produtos', function () {
   $busca = request('search'); 
   
   return view('products', ['busca'=>$busca]);


;

});
Route::get('produtos/{id}', function ($id) {
    return view('product', ['id' => $id]);
});