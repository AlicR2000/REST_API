<?php

use App\Http\Controllers\PeopleController;

Route::get('/Rak/55208/people/show', [PeopleController::class, 'index'])->name('index');               
Route::get('/Rak/55208/people/show/{id}', [PeopleController::class, 'show'])->name('show');           
Route::put('/Rak/55208/people/update/{id}', [PeopleController::class, 'update'])->name('update');
Route::delete('/Rak/55208/people/destroy/{id}', [PeopleController::class, 'destroy'])->name('destroy');     
Route::post('/Rak/55208/people/create', [PeopleController::class, 'create'])->name('create');           

