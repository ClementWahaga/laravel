<?php

namespace Database\Factories;

use Faker\Generator as Faker;
use Medecin;

$factory->define(Medecin::class, function (Faker $faker) {
    return [
        'nom'=> $faker,
        'prenom'=>$faker,
        'specialité'=>$faker,
    ];
});
