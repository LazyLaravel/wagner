<?php

use Illuminate\Support\Facades\Route;

Route::get('hello-wagner', function () {
    return response()->json([
        'hello' => 'wagner'
    ]);
});
