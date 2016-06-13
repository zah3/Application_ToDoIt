<?php
class task{
    
    protected $name = "";
    protected $description ="";
    protected $flag;
    
    public function __construct($name, $description) {
        if(is_string($name) === true && strlen($name) > 0 
            && is_string($description) === true && strlen($description) > 0 ){
            $this->name = $name;
            $this->description = $description;
            $this->flag = false;
            
            echo"<p class='bg-primary'>Zadanie dodane: ".$name. "!<br>O treści:".$description."</p><br>";
        
        
        }else{
            echo"<p class='bg-primary'Nie dodano zadania,poniewż wprowadzono puste, bądź błędną treść zadania. <br> Pamiętaj że treść nie powininna się składać z cyfr.<p><br>";
        }
    }
    
    public function getTask(){
        return $this->flag;
    }
    
    public function finishTask(){
        return $this->flag = true;
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
        if($this->flag == true){
            return "<strike>". $this->getName() . "</strike>";
        }
        else {
             return $this->getName();
        }
       
        
    }
    public function showDiscription(){
        if($this->flag == true){
            return "<strike>".$this->getDescription()."</strike>";
        }else{
            return $this->getDescription();
        }
        
    }
}


?>