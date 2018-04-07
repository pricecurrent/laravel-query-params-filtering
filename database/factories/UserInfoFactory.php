<?php

use App\UserInfo;
use Faker\Generator as Faker;

$factory->define(UserInfo::class, function (Faker $faker) {
    return [
        'birthday' => $faker->dateTimeBetween,
    ];
});
