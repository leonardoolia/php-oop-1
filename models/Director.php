<?php
require_once __DIR__ . '/../data/db.php';

// ?Dichiarazione classe Director
class Director
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function toString()
    {
        return "{$this->name} ({$this->age} anni)";
    }
}