<?php

function showTitle($title)
{
    echo "<br/><b>&#9830; $title</b><br/>";
    echo '<hr/>';
}

$colors = array(
    'red',
    'blue',
    'black',
    'green',
    'grey',
);
$arrayLength = count($colors);

showTitle('Exercise 1 - Sort Alphabetically');
sort($colors);
for ($position = 0; $position < $arrayLength; $position++) {
    echo $colors[$position];
    echo "<br>";
}


showTitle('Exercise 2: Make them UPPERCASE');
$iterator=0;
$newColors = $colors; // so that this will not affect the original array
foreach ($newColors as $elements){
    $newColors[$iterator] = strtoupper($elements);
    $iterator++;
}
foreach($newColors as $elements){
    echo $elements . "<br>";
}

showTitle('Exercise 3: Merge 2 Arrays');

$otherColors = array(
    'green',
    'blue',
    'black'
);
$finalArray = array_merge($colors,$otherColors);
$lengthOfFinalArray = count($finalArray);
for ($positionOfElements=0;$positionOfElements<$lengthOfFinalArray;$positionOfElements++){
    echo $finalArray[$positionOfElements]."\t";

}
