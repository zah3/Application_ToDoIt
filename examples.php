

<?php

require_once 'task.php';



$task = [];

$task1 = new task(" 1 zadanie", "Wynieś śmieci");
$task2 = new task("2 zadanie", "Wynieś komputer");
$task3 = new task("3 zadanie", "Wynieś myszke");
$task[] = $task1;
$task[] = $task2;
$task[] = $task3;







?>


<html>
    <head>
        
    </head>
    <body>
        <p> 
            Przykładowe zadania:
        </p>
            <table border="2px">
               <?php  foreach($task as $key=>$tasker){
                   echo"<tr><td>".$tasker->getName()."</td>";
                   echo"<td>".$tasker->getDescription()."</td></tr>";   
               } 
                ?>       
            </table>
        
            
    <body>
</html>