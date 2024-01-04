<?php

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
use Illuminate\Http\Request;
use App\Http\Controllers\MyController;
Route::get('/my-controller',[MyController::class, 'index']);
Route::get('/my-controller2','App\Http\Controllers\MyController@index');
Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('my-controller3', 'MyController@index');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/myD', function () {
    return view('FolderExam.FileinFolder');
});

Route::post('/myD', function(Request $req){
    $data['myinput'] = $req->input('myinput'); 
    return view('myD', $data);
});
