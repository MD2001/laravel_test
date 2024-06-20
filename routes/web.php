<?php

use App\Models\job;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home', [
        "name" => "Home"
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        "jobs" => job::all()

    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        "job" => job::find($id)
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
