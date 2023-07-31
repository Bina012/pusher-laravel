<?php

use App\Events\TaskEvent;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/fire-event', function () {
    return view('fireEvent');
});
Route::post('/fire-event', function () {
   $name  = request()->name;
   event(new TaskEvent($name));

});
