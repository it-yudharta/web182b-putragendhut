<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Member;
use Faker\Generator as Faker;

$factory->define(Member::class, function (Faker $faker) {
    return [
        'name' => $faker ->name,
        'address' => $faker ->name,
        'member' => $faker ->name,

    ];
});
