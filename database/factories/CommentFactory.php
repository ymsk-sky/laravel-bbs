<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body' => "Quo usque tandem abutere, Catilina, patientia nostra? Quam diu etiam furor iste tuus nos eludet?",
    ];
});
