<?php

use Illuminate\Support\Facades\Route;

Route::get('/api/hello', function () {
    return response()->json(['message' => 'Hello world!']);
});

Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*')->fallback(function () {
    return abort(404);
});
