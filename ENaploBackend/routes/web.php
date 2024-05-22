<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('grades', [
        'grades' => \App\Models\Grade::all()
    ]);
});
