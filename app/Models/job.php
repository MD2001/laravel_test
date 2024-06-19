<?php

namespace App\Models;
use Illuminate\Support\Arr;
class job
{
    public static function all()
    {
        return [
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
    }

    public static function find(int $id):array
    {
        $job= Arr::first(static::all(), fn ($job) => $job['id'] == $id);
        if(!$job)
        {
            abort(404);
        }
        return $job;
    }
}
