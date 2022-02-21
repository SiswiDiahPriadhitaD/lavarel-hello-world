<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController; 

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

//PRAKTIKUM 1

//Route::get('/', function () {
  //  return view('welcome');
//});


//nomer 1
//Route::get('/', function () {
 //   echo "Selamat Datang";
//});

//nomer 2
//Route::get('/about', function () {
 //   echo "2041720090 <br>";
 //   echo " Siswi Diah Priadhita Dewi <br>";
 //   echo " TI 2H ";

//});

//nomer 3
//Route::get('/articles/{id}', function ($id) {
//    echo "Ini adalah halaman artikel dengan ID: ".$id ;

//});

//PRAKTIKUM 2
Route::get('/', [PageController::class,'index']);

Route::get('/about', [PageController::class,'about']);

Route::get('/articles/{id}', [PageController::class,'articles']);