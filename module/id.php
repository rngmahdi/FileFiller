<?php 
require_once 'line.php';
class Id{
    private int $startup;
    function __construct($startup){
        $this->startup =$startup;
    }
    function getStartup(){
        return $this->startup;
    }

    function addId(){
        $line = new Line('data.csv',';');
        $lineNumber = $line->getLineNumber();
        $id =  $this->startup+$lineNumber;
        return $id;
    }

    
}


?>