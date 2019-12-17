<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use App\Models\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    $users_id = User::pluck('id')->toArray();
    $users_name = User::pluck('name')->toArray();
    $users_email = User::pluck('email')->toArray();
    return [
        'name' => $faker->randomElement($users_name),
        'email' => $faker->randomElement($users_email),
        'address' => $faker->streetAddress,
        'content' => $faker->text(200),
        'user_id' => $faker->randomElement($users_id)
    ];
});
