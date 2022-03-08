<?php
require_once "./program-1/MVC/Model/database.php";
require_once "./user.php";
class UserTable extends Database{
    public function __construct()
    {
        parent::__conctruct();
    }
    public function insert(User $user){
        $query = "insert into user (first_name, last_name, email, password) VALUES (?,?,?,?)";
        //'{$user->getFirstName()}','{$user->getLastName()}','{$user->getEmail()}','{$user->getPassword()}' ** we could have put this in values
        $values = [$user ->getFirstName(),$user->getLastName(),$user->getEmail(),$user->getPassword()];
        $this->execute($query,$values);
    }
}
$userTable = new UserTable();
$user = new User("Smoky","Eyes","smokyeyes@gmail.com","nahidungi");
$userTable->insert($user);
