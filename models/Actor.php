<?php
require_once __DIR__ . '/../data/db.php';

// ?Dichiarazione classe Actor
class Actor
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function toString()
    {
        return $actor = implode(',', $this->name);
    }
}