<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Grup0Controller;


Route::group(['prefix' => 'grupos','middleware' => 'auth_docentes'], function () {
    Route::get('/', [Grup0Controller::class, 'index'])->name('grupos.index');
    Route::get('/show/{id}', [Grup0Controller::class, 'show'])->name('grupos.show');
    Route::get('/create', [Grup0Controller::class, 'create'])->name('grupos.create');
    Route::post('/create', [Grup0Controller::class, 'store'])->name('grupos.store');
    Route::get('/edit/{id}', [Grup0Controller::class, 'edit'])->name('grupos.edit');
    Route::post('/edi/{id}', [Grup0Controller::class, 'update'])->name('grupos.update'); 
    Route::get('/delete/{id}', [Grup0Controller::class, 'delete'])->name('grupos.delete');
    Route::post('/delete/{id}', [Grup0Controller::class, 'destroy'])->name('grupos.destroy');
});
