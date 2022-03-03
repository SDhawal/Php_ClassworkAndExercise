<?php

class Student{
    private String $firstName;
    private String $lastName;//field

    public function __construct(String $firstName,String $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    public function __toString() : string
    {
        // TODO: Implement __toString() method.
        return "$this->firstname $this->lastname";
    }
}
$dhawal = new Student("Dhawal","Sharma");
echo $dhawal;


