<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'name' => 'Laravel and Coffee',
        'venue' => 'City Coffee Shop',
        'city' => 'Dublin',
        'description' => "Let's drink coffee and learn Laravel together!",
        'enabled' => 1,
    ];
});

$factory->state(App\Event::class, 'incorrect_capitalization', [
    'name' => 'have fun WITH the raspberry pi',
]);
