<?php

const HOME = 'Home';
const PRODUCT = 'Products';
const ABOUT = 'About Us';
const IDEA = 'Gift Ideas';

//The name of the menu item that should be active
$selected = PRODUCT;
$un_selected_1 =HOME;
$un_selected_2 =ABOUT;
$un_selected_3 =IDEA;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Variable Attributes</title>
    <style>
        #navigation ul {
            width: 150px;
        }

        .menu-item {
            background-color: #e1f4f3;
            color: #0000cc;
        }

        .selected {
            background-color: #fea799;
        }
    </style>
</head>

<body>
<h1>Displaying an active item from the menu</h1>
<nav id="navigation">
    <ul class="menu-item">
        <li><?php echo $un_selected_1 ?></li>
        <li class="selected"><?php echo $selected ?></li>
        <li><?php echo $un_selected_2 ?></li>
        <li><?php echo $un_selected_3 ?></li>
    </ul>
</nav>
</body>

</html>