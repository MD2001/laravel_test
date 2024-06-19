<?php
class job
{
    public static function all()
    {
        return [[
            "id" => 1,
            "title" => "Developer",
            "salary" => "$10,000"
        ],
        [
            "id" => 2,
            "title" => "Teacher",
            "salary" => "$40,000"
        ],
        [
            "id" => 3,
            "title" => "Doctor",
            "salary" => "$20,000"
        ]];
    }
}

use Illuminate\Support\Arr;
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

    $job = Arr::first(job::all(), fn ($job) => $job['id'] == $id);
    return view('job', [
        "job" => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
