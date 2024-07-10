<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'name' => 'John Doe',
        'data' => [
            'html' => '<div class="bg-gray-500">Whatever</div>',
            'encoded' => '&lt;div&gt;Whatever&lt;/div&gt;',
        ]
    ]);
});
