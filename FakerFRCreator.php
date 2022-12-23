<?php

class FakerFRCreator extends AbstractFakerCreator {
    public static function create()
    {
        $F=new FakerFR();
        $F->setFirstName();
        $F->setLastName();
        return $F;
    } 
}