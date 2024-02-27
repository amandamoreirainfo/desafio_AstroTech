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
|T
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';




    Route::get('/toDoLists', [ToDoListController::class, 'index'])->name('toDoLists.index');
    Route::post('/toDoLists', [ToDoListController::class, 'store'])->name('toDoLists.store');
    Route::delete('/toDoLists/{toDoList}', [ToDoListController::class, 'destroy'])->name('toDoLists.destroy');
    Route::get('/toDoLists/{id}/edit',  [ToDoListController::class, 'edit'])->name('toDoLists.edit');
    Route::put('/toDoLists/{id}', [ToDoListController::class, 'update'])->name('toDoLists.update');