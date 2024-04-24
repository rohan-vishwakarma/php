<?php

class User{

    public string $name;
    public string $email = "";

    function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;        
    }

    function __toString(){
        $array = array("name" => $this->name, "email" => $this->email);
        return json_encode($array);
    }
}
