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
$factory->define(App\User::class, function (Faker\Generator $faker) {
	static $password;

	return [
	// 'id' => $faker->unique()->numberBetween($min = 1, $max = 10),
	'name' => $faker->name,
	'email' => $faker->unique()->safeEmail,
	'password' => $password ?: $password = bcrypt('secret'),
	'remember_token' => str_random(10),
	];
});

$factory->define(App\Job::class, function (Faker\Generator $faker) {
	return [
	'title' => $faker->jobTitle,
	'user_id' => $faker->numberBetween($min = 1, $max = 10),
	'address' => $faker->address,
	'contact' => $faker->firstNameMale,
	'category' => $faker->randomElement($array = array ('labour', 'office', 'sales', 'tech', 'nanny', 'education', 'other')),
	'contract' => $faker->randomElement($array = array ('permanent', 'contract')),
	'salary' => $faker->randomElement($array = array ('1', '2', '3', '4')),
	'description' => $faker->text($maxNbChars = 500),
	'city' => $faker->randomElement($array = array ('gta', 'eastyork', 'mississauga', 'brampton', 'northyork', 'scarborough', 'pickering')),
	'email' => $faker->email,
	'phone' => $faker->phoneNumber,
	'website' => $faker->url,
	];
});
