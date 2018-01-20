<?php
 
require_once  __DIR__ .'/vendor/autoload.php';
 
// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

echo "Random name:";  
// generate data by accessing properties
echo $faker->name;

echo "<BR> Random address:";  
// generate fake address
echo $faker->address;
 
echo "<BR> Random text:";
// generate fake name
echo $faker->text;
