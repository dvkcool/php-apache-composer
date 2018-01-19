<?php
 
require_once  __DIR__ .'/vendor/autoload.php';
 
// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

echo "Fake name:";  
// generate data by accessing properties
echo $faker->name;

echo "\n Fake address:";  
// generate fake address
echo $faker->address;
 
echo "\n Fake text:";
// generate fake name
echo $faker->text;
