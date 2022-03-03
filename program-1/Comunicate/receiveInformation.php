<?php
//super Global
if (!isset($_GET['fname']) ||!isset($_GET['lname'])){
    header("Location: Index.php");
}

if (isset($_GET['fname'])){
    echo "First Name : $_GET[fname]<br>";
}
if (isset($_GET['lname'])){
    echo "Last Name : $_GET[lname]<br>";
}