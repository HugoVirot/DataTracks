<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
     return [
        'name' => 'Super',
        'role_id' => 1,
        'surname' => 'Admin',
        'enabled' => true,
        'email' => 'superadmin@superadmin.com',
        'position' => 'Gestionnaire',
        'password' => Hash::make('password'),
        'remember_token' => Str::random(10),
    ];
});
