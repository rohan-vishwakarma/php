<?php
namespace oop\inherit\User;
use User;


require_once('oop/inherit.php');

class myuser extends User {
    private static $id = 1; // Make $id static
    private int $length = 0;
    private $list_of_student = array();
    private string $extra = "";

    function __construct($name = "", $email = "", $extra = "") {
        parent::__construct($name, $email);
        $this->extra = $extra;
    }

    function save(): string {
        if (!empty($this->name) && !empty($this->email) && !empty($this->extra)) {
            $this->list_of_student[self::$id]["name"] = $this->name;
            $this->list_of_student[self::$id]["email"] = $this->email;
            $this->list_of_student[self::$id]["extra"] = $this->extra;
            $this->length++;
            myuser::$id+=1; // Increment the static id for the next user
            return "Saved Successfully";
        } else {
            return "Missing attributes.";
        }
    }

    function all() {
        return $this->list_of_student;
    }

    function __toString() {
        $array = array("name" => $this->name, "email" => $this->email, "Extra" => $this->extra);
        return json_encode($array);
    }
}

$obj = new myuser("Rohan", "Rohan@gmail.com", "Extra");
$obj2 = new myuser("Radhika", "Radhika@gmail.com", "Extra2");
$obj3 = new myuser("Vedika", "Vedika@gmail.com", "Extra3");

// Save users and debug information
echo $obj->save() . "\n";
print_r($obj->all());
echo $obj2->save() . "\n";
print_r($obj->all());
echo $obj3->save() . "\n";
print_r($obj->all());
