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
<h2>List of teachers assigned since 2000 are : </h2>
<table>
    <thead>
    <tr>
        <th>
            Name
        </th>
        <th>
            Year Assigned
        </th>
        <th>
            Rank
        </th>

    </tr>
    </thead>
    <tbody>
    <?php
    if(isset($connection)){
    $query = "Select Name,Year_Assignment,Rank from teachers where Year_Assignment >2000";
    $getQuery = $connection->prepare($query);
    $getQuery-> execute();

    $getQuery->setFetchMode(PDO::FETCH_ASSOC);
    foreach ($getQuery->fetchAll() as $row){ ?>
    <tr>

        <td><?=$row['Name'] ?></td>
            <td><?=$row['Year_Assignment'] ?></td>
            <td><?=$row['Rank'] ?></td>

    </tr>
    <?php }
    } ?>
    </tbody>
</table>
</body>
</html>
