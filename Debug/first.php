<?php
$a=3;

echo $a;
echo "<hr>";
var_dump($a);// this will return the type in solution
echo "<hr>";
print_r($a);//makes it user friendly print
echo "<hr>";
var_export($a);// allows to reuse that code
echo "<hr>";
function console_log($data){
    echo "<script>";
    echo "console.log(".json_encode($data).")";

}