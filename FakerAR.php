<?php

class FakerAR extends Faker {

    /**
     * Set the value of firstName
     *
     * @return  self
     */ 
    public function setFirstName()
    {
        
        $this->firstName = $this->generateRandomValue(array('adnan', 'omar', 'hatim', 'imad'));

    }
    /**
     * Set the value of lastName
     *
     * @return  self
     */ 
    public function setLastName()
    {       
        $this->lastName = $this->generateRandomValue(array('berrada', 'bennani', 'bennis', 'benjellon', 'alami'));

    }

}