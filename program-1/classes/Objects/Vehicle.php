<?php


//class is a blueprint of the object
class Vehicle{
    //Attributes , field variables ,
    // properties or class object variables
    private Engine $engine;
    private array $tires;
    private $color;
    private int $maxSpeed;
    private int $speed;
    private bool $highBeamState;

    //Methods or Actions (basically fnc inside the class are methods)
    //they start with a verb
    public function startEngine() : void {
        $this->engine = new Engine();
       $this->engine->startEngine();
       //you can also use . instead.

    }
}
class Engine{
    private int $horsePower;

    public function startEngine() : bool{
        return true;
}
}
$merc = new Vehicle();//creating the instance of the vehicle
$bmw = new Vehicle();
$merc->startEngine();