<?php

use App\Http\Controllers\Account;
use App\Http\Controllers\ToDoList as ControllersToDoList;
use App\Models\ToDoList;
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
    return view('login');
});
Route::resource('/Account',Account::class);
Route::resource('/Todo',ControllersToDoList::class);