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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Infrauatf\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name'    => $faker->firstNameFemale,
        'surname' => $faker->lastName,
        'cedula'  => $faker->unique()->numberBetween($min = 1000, $max = 9000),
        'celular' => $faker->unique()->numberBetween($min = 1000, $max = 9000),
        'email'   => $faker->unique()->safeEmail,
        'tipo'    => $faker->randomElement(['administrator','director','supervisor','personal']),
        'cargo'   => $faker->randomElement(['automotores','mecanico','conductor','responsable','mensajero','secretaria']),
        'entidad' => $faker->company,
        'password' => $password ?: $password = bcrypt('secret'),
        'active'=> $faker->boolean,
        'insertador'=> $faker->name,
        'remember_token' => str_random(10),
    ];
});
