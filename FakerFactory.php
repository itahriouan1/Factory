<?php

class FakerFactory {


    public static function create($type){

        if($type == 'AR'){
            $F = FakerARCreator::create();
            
        }
        if($type == 'FR'){
            $F = FakerFRCreator::create();

        }
        return $F;

    }


}