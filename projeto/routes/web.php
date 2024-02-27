<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/toDoLists', [ToDoListController::class, 'index']);
Route::post('/toDoLists', [ToDoListController::class, 'store']);
Route::put('/toDoLists/{toDoLists}', [ToDoListController::class, 'update']);
Route::delete('/toDoLists/{toDoLists}', [ToDoListController::class, 'destroy']);