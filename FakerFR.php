<?php

class FakerFR extends Faker {

    public function setFirstName()
    {
        $this->firstName = $this->generateRandomValue(array('alice', 'jean', 'clair','pascal'));
    }
    public function setLastName()
    {
        $this->lastName = $this->generateRandomValue(array('dubois', 'lepin','macron','laurice'));

    }


}