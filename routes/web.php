<?php

$options = array_keys(config('sopadeletras'));

Route::view('/', 'sopa-de-letras', compact('options'));
Route::post('/resolver', 'SopaDeLetrasController')
    ->middleware('only.ajax')
    ->name('resolver');
