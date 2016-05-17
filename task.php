<?php

class task{
    
    protected $name = "";
    protected $description ="";
    
    public function __construct($name, $description) {
        if(is_string($name) === true && strlen($name) > 0 
                && is_string($description) === true && strlen($description) > 0 ){
                $this->name = $name;
                $this->description = $description;
        
        
        echo"Zadanie dodane: ".$name. "!<br>O treści:".$description;
        
        
        }else{
            echo"Nie dodano zadania,poniewż wprowadzono puste, bądź błędną treść zadania. <br> Pamiętaj że treść nie powininna się składać z cyfr.";
        }
    }
    
    public function getName(){
        return $this->name;
    }
    public function getDescription(){
        return $this->description;
    }
    
    public function setName($name){
        $this->name = $name;
        return $this;
    }
    
    public function setDescription($description){
        $this->description = $description;
        return $this;
    }
    public function showName(){
        return $this->getName();
        
    }
    public function showDiscription(){
        return $this->getDescription();
    }
}


?>