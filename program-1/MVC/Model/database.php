<?php
class Database{
    //making the connection with the database
    private const serverName = "localhost";
    private const port =3306;
    private const database = "example"; //name of the database
    private const username = "example"; //user name of your database
    private const password = "example";
    private const connectionString = "mysql:host=".
    Database::serverName.
    ";dbname=".
    Database::database.
    ";port="
    .Database::port;  //connection string

    private PDO $connection;    //pdo object                php data objects


    public function __construct(){
        try{
            $this->connection = new PDO(Database::connectionString,Database::username,Database::password);
            $this->connection ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//if there is an error then throw it as exception
            echo "Success <br>";
        }catch (PDOException $exception){
            echo "Connection Failed : {$exception->getMessage()}";
        }
    }

    protected function executeInsert(String $query, Array $values = null) : Int|false {
        $stmt = $this->connection->prepare($query, );
        $stmt->execute($values);
        return $this->connection->lastInsertId();
    }

    public function execute(String $query, Array $values = null) : Array|false {
        $stmt = $this->connection->prepare($query);//this prepares the query
        $stmt->execute($values);//if there is values then it will go further if not .. //this prepares the query

        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        return $stmt->fetchAll();
    }

}
//$db = new Database();
//$query = "Select * from user where first_name like :fname and last_name like :lname";
//$values = ["fname"=>"Dhawal","lname"=>"Sharma"];
//$results = $db->execute($query,$values);
//if($results != false){
//    foreach ($results as $row){
//        echo "Full Name: $row[first_name],$row[last_name]<br>";
//    }
//}

