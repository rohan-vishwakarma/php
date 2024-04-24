<?php

final class ParentClass {
    public $name;
    function __construct($name){
        
        $this->name = $name;

    }

    function __toString(){
        return $this->name;
    }
}


class child extends ParentClass{
    
}