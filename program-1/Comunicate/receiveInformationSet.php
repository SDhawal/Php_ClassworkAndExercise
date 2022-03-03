<?php
//super Global
if (!isset($_SET['fname']) ||!isset($_SET['lname'])){
    header("Location: Index.php");
}

if (isset($_SET['fname'])){
    echo "First Name : $_SET[fname]<br>";
}
if (isset($_SET['lname'])){
    echo "Last Name : $_SET[lname]<br>";
}