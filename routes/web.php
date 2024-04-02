<?php

use Illuminate\Support\Facades\Route;

Route :: get ( '/' , function () {
    return view ( 'index');
        })-> name ( 'inicio' );


Route::get('/iniciar', [App\Http\Controllers\Cquiz::class, 'index'])->name('iniciar');
Route::post('/dadosPagina1', [App\Http\Controllers\Cquiz::class, 'dadosPagina1'])->name('dadosPagina1');
Route::post('/dadosPagina2', [App\Http\Controllers\Cquiz::class, 'dadosPagina2'])->name('dadosPagina2');
Route::post('/dadosPagina3', [App\Http\Controllers\Cquiz::class, 'dadosPagina3'])->name('dadosPagina3');
Route::post('/dadosPagina4', [App\Http\Controllers\Cquiz::class, 'dadosPagina4'])->name('dadosPagina4');
Route::post('/dadosPagina5', [App\Http\Controllers\Cquiz::class, 'dadosPagina5'])->name('dadosPagina5');
Route::post('/dadosPagina6', [App\Http\Controllers\Cquiz::class, 'dadosPagina6'])->name('dadosPagina6');
Route::post('/dadosPagina7', [App\Http\Controllers\Cquiz::class, 'dadosPagina7'])->name('dadosPagina7');
Route::post('/dadosPagina8', [App\Http\Controllers\Cquiz::class, 'dadosPagina8'])->name('dadosPagina8');
Route::post('/dadosPagina9', [App\Http\Controllers\Cquiz::class, 'dadosPagina9'])->name('dadosPagina9');
Route::post('/dadosPagina10', [App\Http\Controllers\Cquiz::class, 'dadosPagina10'])->name('dadosPagina10');
