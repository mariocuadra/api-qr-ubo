<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CredencialController;


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

/*Route::get('/', function () {
  dd('Hello');
  
  
 return view('welcome');
});*/
Route::group(['middleware' => ['cors']], function () {
    //Rutas a las que se permitirá acceso
  Route::get('/credencial', [CredencialController::class,'getAllCredencial']);
  Route::get('/findperson/{email}', [CredencialController::class,'getFindPerson']);
});


