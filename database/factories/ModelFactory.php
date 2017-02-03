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

$factory->define(projectmanager\Entities\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});


$factory->define(projectmanager\Entities\Clientes::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'responsavel' => $faker->name,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'endereco' => $faker->address,
        'obs' => $faker->sentence,

    ];
});

$factory->define(projectmanager\Entities\Project::class, function (Faker\Generator $faker) {
    return [
        'owner_id' => rand(1,5),
        'clientes_id' => rand(1,5),
        'name' => $faker->word,
        'descricao' => $faker->sentence,
        'progresso' => rand(1,100),
        'status' => rand(1,3),
        'data_fim' => $faker->dateTime('now'),

    ];
});

$factory->define(projectmanager\Entities\NotasProject::class, function (Faker\Generator $faker) {
    return [
        'project_id' => rand(1,5),
        'titulo' => $faker->word,
        'nota' => $faker->paragraph,
    ];
});
