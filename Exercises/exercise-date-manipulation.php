<?php

function showTitle($title)
{
    echo "<br/><b>&#9830; $title</b><br/>";
    echo '<hr/>';
}

showTitle('Exercise 1');
echo date(DATE_RFC2822);
showTitle('Exercise 2 - Show Day');
echo date("j");
showTitle('Exercise 3 - Show Month');
echo date("n");
showTitle('Exercise 4 - Show Year');
echo date("y");
showTitle('Exercise 5 - Show Day, Month, Year');
echo date("j,n,Y")."<br>";
echo date("F j,Y");
showTitle('Exercise 6 (Add 1 month to the constant date)');
$givenDate = date("Y-m-d");
$next_month = date('Y-m-d', strtotime($givenDate. ' + 1 month'));
echo $next_month;
showTitle('Exercise 7 (Number of days since 31 December 1973)');
$startDate = strtotime("1973-12-31");
$currentDate = strtotime(date("Y-m-d"));
$difference = $startDate-$currentDate;
$numberOfDays = round($difference/86400);
echo "Number of days since 31 December 1973  : ".abs($numberOfDays);

showTitle('Exercise 8');
echo date(DATE_RFC2822);