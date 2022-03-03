<?php
$a = [10,3,5,65,70];
$b = array("a","b","c","d");
$c =["a"=>1,1=>"a"]; //this is associative array
$d = [1,"asd",true,3.2];
$e = [1=>"a","a"=>1];

var_dump($a == $b);
echo "<br>";
var_dump($c == $e); // both keys and values are present in both arrays
echo "<br>";
var_dump($c == $e);// in case of arrays its also checking the order  + key and value pairs
echo "<br>";
var_dump($c != $e); // both keys and values are present in both arrays
echo "<br>";
var_dump($c != $e);// in case of arrays its also checking the order  + key and value pairs
echo "<br>";
$z = $a+$b;
var_dump($z);
echo "<br>";
$v = $a + $c;
var_dump($v);
echo "<br>";
echo "<br>";
echo "<br>";
echo " <h1 style='text-align: center'> Array Helper Class (methods)</h1>";
//Ascending order sorting
sort($a);
var_dump($a);