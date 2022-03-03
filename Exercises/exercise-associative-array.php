<?php

function showTitle($title)
{
    echo "<br/><b>&#9830; $title</b><br/>";
    echo '<hr/>';
}

$users = array(
    array(
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    ),
);

showTitle("Exercise 1 (Show first names without iteration)");
foreach ($users as $data => $dataInfo) {
    echo "<b>" . $dataInfo['first_name'] . "</b>" . "<br>";
}
showTitle('Exercise 2 (Show the value of the different element between the two collections $firstArray and $secondArray without iterating)');

$firstArray = array('a' => 'auto', 'b' => 'moto', 'c' => 'airplane');
echo "<b>" . $firstArray['c'] . "</b> <br>";
$secondArray = array('a' => 'auto', 'b' => 'moto');

showTitle('Exercise 3 (Reverse the keys and values of the $firstArray array without iterating)');
$reversingArray = array_flip($firstArray);
foreach ($reversingArray as $key => $value) {
    echo "<b>" . $key . ":" . $value . "</b>        ";
}
