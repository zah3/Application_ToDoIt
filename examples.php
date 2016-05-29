

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
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">


        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
      
     </head>
    
    <body>
        <p> 
            Przykładowe zadania:
        </p>
                <div class="container">
                    <div class="well">
                        <table class="table hover">
                           <?php  foreach($task as $key=>$tasker){
                               echo"<tr ><td>".$tasker->getName()."</td>";
                               echo"<td>".$tasker->getDescription()."</td>";
                               echo"<td><input type='submit' class='btn btn-success btn-lg' method='GET' value='Zrobione!'></input></tr>";   
                           }  
                            ?>       
                        </table>
                    </div>
                </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
    </body>
</html>
