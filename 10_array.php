<?php

/*
simple array => index
assoc array => key
*/

// $fruits = array('apple','orange','banana');
$fruits = [
    'apple',
    'orange',
    'banana',
    [
        'name' => 'BMW',
        'price' => '$4000',
        'modal' => '2020',
    ]
];

$car =[
    'name' => 'BMW',
    'price' => '$4000',
    'modal' => '2020',
    'details' => [
        'a','b','c'
    ], 
];

echo "<pre>";
var_dump($fruits[3]['price']);
// var_dump($car);
// var_dump($car['details']);