<?php
 
require_once __DIR__ . '/vendor/autoload.php';
 
// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
  
// generate data by accessing properties
echo $faker->name;
  
// generate fake address
echo $faker->address;
  
// generate fake name
echo $faker->text;
