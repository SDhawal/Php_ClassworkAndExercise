<?php
session_start();

if(isset($_REQUEST['deleteAllSession']))
{
    if($_SESSION['apple']>0||$_SESSION['apple']<0){

        $_SESSION['apple']=0;
    }
    if($_SESSION['pear']>0||$_SESSION['pear']<0){

        $_SESSION['pear']=0;
    }
    if($_SESSION['banana']>0||$_SESSION['banana']<0){

        $_SESSION['banana']=0;
    }

    session_destroy();
}

if (isset($_REQUEST['incrementApple'])){
   ++$_SESSION['apple'];
}elseif (isset($_REQUEST['decrementApple'])){
    --$_SESSION['apple'];
}elseif(isset($_REQUEST['allApples'])){
    $_SESSION['apple'] = 0;
}

if (isset($_REQUEST['incrementPear'])){
   ++$_SESSION['pear'];
}elseif (isset($_REQUEST['decrementPear'])){
    --$_SESSION['pear'];
}elseif(isset($_REQUEST['allPear'])){
    $_SESSION['pear'] = 0;
}

if (isset($_REQUEST['incrementBanana'])){
   ++$_SESSION['banana'];
}elseif (isset($_REQUEST['decrementBanana'])){
    --$_SESSION['banana'];
}elseif(isset($_REQUEST['allBanana'])){
    $_SESSION['banana'] = 0;
}



?>

<hmtl>
    <head>
        <title>Session Table</title>
        <style>
            table,td,th{
                border: 1px solid black;
                margin: auto;
                text-align: center;
            }
        </style>
    </head>
    <body>
    <table style="border: 5px solid;">
        <thead>
        <tr >
            <th>Add To Cart</th>
            <th>Remove From Cart</th>
            <th>Remove All</th>
            <th>Current Cart</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><a href="exercise-cart-lastName-firstName.php?incrementApple"> +1 apple </a></td>
            <td><a href="exercise-cart-lastName-firstName.php?decrementApple"> -1 apple </a></td>
            <td><a href="exercise-cart-lastName-firstName.php?allApples"> all apples </a></td>
            <td>Apples:
                <?php
                if(isset($_SESSION['apple']))
                    echo $_SESSION['apple'];
                else{
                    echo "0";
                }

                ?></td>
        </tr>
        <tr>
            <td><a href="exercise-cart-lastName-firstName.php?incrementPear"> +1 pear </a></td>
            <td><a href="exercise-cart-lastName-firstName.php?decrementPear"> -1 pear </a></td>
            <td><a href="exercise-cart-lastName-firstName.php?allPear"> all pears </a></td>
            <td>PEARS :
                <?php
                if(isset($_SESSION['pear']))
                    echo $_SESSION['pear'];
                else{
                    echo "0";
                }

                ?></td>
        </tr>
        <tr>
            <td><a href="exercise-cart-lastName-firstName.php?incrementBanana"> +1 banana </a></td>
            <td><a href="exercise-cart-lastName-firstName.php?decrementBanana"> -1 banana </a></td>
            <td><a href="exercise-cart-lastName-firstName.php?allBanana"> all bananas </a></td>
            <td>BANANAS :
                <?php
                if(isset($_SESSION['banana']))
                    echo $_SESSION['banana'];
                else{
                    echo "0";
                }

                ?></td>

        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="4"><a href="exercise-cart-lastName-firstName.php?deleteAllSession"> Clear The Basket </a></td>
        </tr>
        </tfoot>
    </table>
    </body>
</hmtl>
