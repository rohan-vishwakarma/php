<?php
class Node {
    public static $data = "";
    public static $next = "";
    function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}
// head ->  [] [] [] []-->tail
class LinkedList{
    public static $head = "";
    public static $tail = "";
    public static $len = 0;
    function __construct() {
        $this::$head = "";
        $this::$tail = "";
    }
    function addNode($data){

        $node = new Node($data);

        if(self::$head == ""){
            self::$head = $node;
            self::$tail = $node;
            $node->next = "";
        }
    }

    function __toString(){
        return self::$head;
    }

}

$ll = new LinkedList();
$ll->addNode(12);

echo $ll::$head::$data;


