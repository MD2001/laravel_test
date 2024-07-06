<?php

use App\Models\career;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        "name" => "Home"
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        "jobs" => career::all()

    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        "job" => career::find($id)
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
