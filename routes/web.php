<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'data' => [
            'category' => \App\CategoryFake::get(),
        ]
    ]);
});
