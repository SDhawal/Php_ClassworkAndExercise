<?php
$x = 5;
//create the variable always with an $ sign;
//The type is inferred , So whenever you put a value the compiler will interpret itself..;
$message = "Hey Dhawal I know its a Char"
?>
    <!doctype html>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Meow</title>
    </head>
<body>
<h1> wouf</h1>
<?php
echo "<h2>You are Dhawal</h2>";
echo $x, "<br>";
echo "<h1>the Char</h1><br>", $message;
?>
<h1 style="text-align: center"> String concatenation</h1>
<?php

$hello = "hello";
$name = "Dhawal";

$concat = $hello . " " . $name . "<br>";
//for concatination we use . operator in php INSTEAD OF +
echo $concat;

// putting the same in string see the difference
echo $concat1 = "$hello $name <br>";
echo $concat2 = '$hello $name <br>';
echo $concat3 = "$hello $name ,do you have some \$money";
// here if we dont use escape sign \ it would have taken it as var
echo " <h1 style='text-align: center'>Strings</h1>";

$bio = "<pre>This is information<br>
          I have created a string <br>
          This is using br and pre ";
echo $bio;
echo " <h1 style='text-align: center'>Constants</h1>";
const THIS_WILL_NOT_CHANGE = "dhawal";//this is one way     Compile time constant
define("The_Second_Way",34);//this is run time constant
echo "Value"." - ". THIS_WILL_NOT_CHANGE. "<br>";
echo " Value"." - ".The_Second_Way."<br>";

echo " <h1 style='text-align: center'>Array</h1>";
$arr = [1,"one",2.1];
var_dump($arr);// this will return the type in solution
echo "<hr>";
print_r($arr);//makes it user friendly print
echo "<hr>";
var_export($arr);// allows to reuse that code

echo " <h1 style='text-align: center'>Associative Array</h1>";
$d = ["a"=>1,"b"=>"one","b"=>2.1];
var_dump($d);
//console_log($d);

echo " <h1 style='text-align: center'>String Helper Classes</h1>";
//helper classes for string
echo "Length " .strlen("Dhawal");//this gives the length of the string
echo "<br>";
echo "Word Count".str_word_count("Dhawal will do something");
echo "<br>";
echo "<br>";
echo "Reverse the string ".strrev("Dhawal is the best");
echo "<br>";
echo "<br>";
echo "find position: ".strpos("There was a ship","was");
echo "<br>";
echo "<br>";
echo "Replace ".str_replace("Atul","Eby","Atul is my roomie and eby is his");
echo "<br>";
echo "<br>";
echo var_dump(preg_split("[\s]+/","Dhawal is the best"));

echo " <h1 style='text-align: center'>NUMBERS</h1>";
$numberPhone = 514_569_1098;
echo "you can put _  for your own visualisation ".$numberPhone;
echo "<br>";
echo "<br>";
echo(PHP_INT_MAX);
echo "<br>";
echo "<br>";
echo (PHP_INT_MIN);
echo "<br>";
echo "<br>";
echo " <h1 style='text-align: center'>Casting</h1>";
echo "There are two types of casting Implicit and explicit";
$sampleNumber = 234;
$castToString = (string) $sampleNumber;
echo "<br>";
echo "<br>";
echo " <h1 style='text-align: center'>Operations</h1>";
$number1 = 2;
$number2 = 5;
echo "Modulus : ".$number1%$number2;
echo "<br>";
echo "<br>";
echo "Exponents : ".$number1**$number2;
$number3 = 1;
echo "<br>";
echo "<br>";
echo $total = $number3 - --$number3 + $number3 * $number3++ ;
echo " <h1 style='text-align: center'>Spaceship Operation <=></h1>";
var_dump($number1 <=> $number2);
echo "0 -> is equal <br> 1 is lhs > rhs <br> -1 is lhs < rhs"
?>

</body>
</html>