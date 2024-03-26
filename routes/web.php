<?php

use Illuminate\Support\Facades\Route;
use App\Models\Families;

Route::get('/', function () {
    return view('home', [
        'greeting' => 'Hello'
    ]);
});

Route::get('/families', function () {
    return view('families', [
        'families' => Families::all()
    ]);
});


Route::get('/families/{id}', function ($id) {
    return view('family', ['family' => Families::find($id)]);
});

Route::get('/contact', function () {
    return view('contact', [
        'greeting' => 'Hello'
    ]);
});
