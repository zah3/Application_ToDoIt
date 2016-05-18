
<html>
    <body>

<?php

require_once 'task.php';
session_start();

if ($_SERVER['REQUEST_METHOD']){
    if (isset($_POST['name']) === true && is_string($_POST['name']) && strlen($_POST['name']) > 0){
        
            $name = $_POST['name'];
      
    }
    if (isset($_POST['description']) === true &&  is_string ($_POST['description']) && strlen($_POST['description']) > 0){
        
            $description = $_POST['description'];
    }
    
    
  
    

    if(!isset($_SESSION['tasks'])){
        $_SESSION['tasks'] = [];
        var_dump($_SESSION['tasks']);
    }else{
        $_SESSION['tasks'][] = serialize(new task($name, $description));
        
    }
   
    foreach($_SESSION['tasks'] as $task){
        $tasks[] = unserialize($task);
        
    }
    
?>
        <table border="2px">
            <th>Zadanie</th><th>Tresc</th>
	   <?php foreach($tasks as $task) {
                    echo '<tr><td>'.$task->showName().'</td> <strong><td> </strong>'.$task->showDiscription()."</td></tr>";
                  
//	    	echo "</td><td><a href='index.php?finishTask={$task->getName()}' class='btn btn-info' role='button'>Finish</a></td></tr>";
	    		}echo "</table>";
}


?>
        </table>
            <form action="make.php" method="POST">
                 <input type="submit">
            </form>
    </body>
</html>
