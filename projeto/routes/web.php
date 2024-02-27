<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoListController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/toDoLists', [ToDoListController::class, 'index'])->name('toDoLists.index');
Route::post('/toDoLists', [ToDoListController::class, 'store'])->name('toDoLists.store');
Route::put('/toDoLists/{toDoList}', [ToDoListController::class, 'update'])->name('toDoLists.update');
Route::delete('/toDoLists/{toDoList}', [ToDoListController::class, 'destroy'])->name('toDoLists.destroy');
