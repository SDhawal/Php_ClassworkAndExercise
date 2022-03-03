<?php
//making the connection with the database
const serverName = "localhost";
const port =3306;
const database = "example"; //name of the database
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
    echo "Success <br>";
}catch (PDOException $exception){
    echo "Connection Failed : {$exception->getMessage()}";
}
if (isset($connection)){
    $firstName="Dhawal";
    /** @var TYPE_NAME $query */
    $query = "Select * from user where first_name like ? and last_name like ?";
    $getQuery = $connection->prepare($query);
    $getQuery-> execute([$firstName,"Sharma"]);

    $getQuery->setFetchMode(PDO::FETCH_ASSOC);
    foreach ($getQuery->fetchAll() as $row){
        echo "Full Name: $row[first_name],$row[last_name]<br>";
    }
}//if the connection has been set then create query say get thhe data