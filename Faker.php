<?php

abstract class Faker {
    protected $firstName;
    protected $lastName;

    public abstract function setFirstName();
    public abstract function setLastName();

    public function generateRandomValue($table){
        $i = array_rand($table);
        return $table[$i];
    }

    /**
     * Get the value of firstName
     */ 
    public function getFirstName()
    {
        return $this->firstName;
    }

    

    /**
     * Get the value of lastName
     */ 
    public function getLastName()
    {
        return $this->lastName;
    }

    
}