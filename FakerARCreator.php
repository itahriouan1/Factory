<?php

class FakerARCreator extends AbstractFakerCreator {

    public  static function create(){
        $F=new FakerAR();
        $F->setFirstName();
        $F->setLastName();
        return $F;
    }

}