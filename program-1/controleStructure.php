<?php
echo " <h1 style='text-align: center'>If - Else STATEMENTS</h1>";
$a = 1;
if ($a == 1) {
    echo "Damn!";
}

echo " <h1 style='text-align: center'>Ternary Operators</h1>";

$b = $a < 5 ? 3 : 9;
if ($a < 5) {
    $b = 3;
} else {
    $b = 9;
}
echo $b, "<br>";
?>
<html>
<body>
<?php
if ($b > 4) {
    ?>
    <h1>$b is bigger than 4</h1><br>
    <?php
} else {
    echo $b, " is Smaller than 4";
}
?>
</body>
</html>
