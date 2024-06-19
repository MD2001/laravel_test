<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Pest\Support\Arr as SupportArr;

Route::get('/', function () {
    return view('home', [
        "name" => "Home"
    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        "jobs" =>
        [
            [
                "id" => 1,
                "job" => "Developer",
                "salary" => "$10,000"
            ],
            [
                "id" => 2,
                "job" => "Teacher",
                "salary" => "$40,000"
            ],
            [
                "id" => 3,
                "job" => "Doctor",
                "salary" => "$20,000"
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs =
        [
            [
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
            ]
        ];

    $job = Arr::first($jobs, fn ($job) => $job['id'] == $id);

    // Arr::first($jobs,function ($job)       //this fubctuion send each item as apramter to your function you can call it any thing
    // {
    //     return $job['id'] ==$id;
    // });

    // dd($job);
    return view('job', [
        "job" => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
