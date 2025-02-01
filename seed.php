<?php

include('vendor/autoload.php');

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Faker\Factory as Faker;

$faker = Faker::create();
$table = new UsersTable(new MySQL);

echo "Users Table seeding started... <br>";
for ($i = 0; $i < 20; $i++) {  //loop 20 times
    $table->insert([
        "name" => $faker->name,
        "email" => $faker->email,
        "phone" => $faker->phoneNumber,
        "address" => $faker->address,
        "password" => "password",
    ]);
}

echo "Seeding completed.";
