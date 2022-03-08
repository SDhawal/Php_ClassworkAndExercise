<?php
const serverName = "localhost";
const port =3306;
const database = "school"; //name of the database
const username = "example"; //user name of your database
const password = "example";
const connectionString = "mysql:host=".
    serverName.
    ";dbname=".
    database.
    ";port="
    .port;  //connection string
try{
    $connection = new PDO(connectionString,username,password);
    $connection ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//if there is an error then throw it as exception

}catch (PDOException $exception){
    echo "Connection Failed : {$exception->getMessage()}";

}


?>
<html>
<body>
<form action="exercise-city-school_lastName-firstName.php" method="get">
<label> Select a city :   </label>
<select  name="city">
    <?php
    if(isset($connection)){
        $query = "Select distinct city from teachers";
        $getQuery = $connection->prepare($query);
        $getQuery-> execute();

    $getQuery->setFetchMode(PDO::FETCH_ASSOC);
    foreach ($getQuery->fetchAll() as $row){ ?>
    <option > <?= $row['city'] ?></option>
    <?php }} ?>

</select>
<button type="submit" >ok</button>
</form>
<?php
if (isset($connection) && isset($_GET['city'])){
    $getCity = $_GET['city'];
    ; ?>
    <h1> Teachers of city <?=$getCity ?> are :  </h1><br>
<?php
    $query = "Select Name from teachers where City like :city";
    $values = ["city"=>$_GET['city']];
    $getQuery = $connection->prepare($query);
    $getQuery-> execute($values);
    $getQuery->setFetchMode(PDO::FETCH_ASSOC);
    foreach ($getQuery->fetchAll() as $row){ ?>
        <b><P><?=$row['Name'] ?></P></b>
<?php }
}

?>




</body>
</html>
