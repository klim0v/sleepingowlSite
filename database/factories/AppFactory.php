<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Model\Gallery::class, function (Faker\Generator $faker) {
    return [
        'title'     => $faker->sentence(4),
        'name'     => $faker->sentence(1),
        'heading'     => $faker->sentence(4),
        'meta_title'     => $faker->sentence(4),
        'meta_description'     => $faker->sentence(14),
        'slug' => $faker->slug,
        'description'  => $faker->paragraph(5),
    ];
});

$factory->define(App\Model\Service::class, function (Faker\Generator $faker) {
    return [
        'title'     => $faker->sentence(4),
        'name'     => $faker->sentence(1),
        'heading'     => $faker->sentence(4),
        'meta_title'     => $faker->sentence(4),
        'meta_description'     => $faker->sentence(14),
        'slug' => $faker->slug,
        'annotation'  => $faker->paragraph(5),
        'description'  => $faker->paragraph(15),
    ];
});


