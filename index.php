
<?php
require_once 'src/task.php';
session_start();
if(!isset($_SESSION['tasks'])){
   $_SESSION['tasks'] = [];
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    </head>
    <body>
         <div class="container">
             <div class="well">

<?php
    if ($_SERVER['REQUEST_METHOD'] === "POST"){
        if (isset($_POST['name']) === true && is_string($_POST['name']) && strlen($_POST['name']) > 0){
            $name = $_POST['name'];
            if (isset($_POST['description']) === true &&  is_string($_POST['description']) && strlen($_POST['description']) > 0 ){
                $description = $_POST['description'];
                    if ($name && $description){
                        $_SESSION['tasks'][] = serialize(new task($name, $description));
                    }
                 }else{
                      echo"<p class='bg-primary'>Nie przesłano poprawnie danych z 'Jakie zadanie?'.</p><br>";
                 }

        }else{
            echo"<p class='bg-primary'>Nie przesłano poprawnie danych z 'Nazwa zadania'.</p><br>";
        }
    }
    elseif($_SERVER['REQUEST_METHOD'] === "GET"){
        if(isset($_GET['finishTask']) === true && isset($_SESSION['tasks']) ){
            $finishTasks = unserialize($_SESSION['tasks'][$_GET['finishTask']]);
            $finishTasks->finishTask();
            $_SESSION['tasks'][$_GET['finishTask']] = serialize($finishTasks);
        }
    }
    
    foreach($_SESSION['tasks'] as $task){
        $tasks[] = unserialize($task);
    }
?>              
            <table class="table hover">
                <?php if(empty($_SESSION['tasks'])=== false){?>
                <th>Zadanie</th><th>Treść</th>
                   <?php foreach($tasks as $key=>$task) {
                            echo '<tr><td>'.$task->showName().'</td> <strong><td> </strong>'.$task->showDiscription()."</td><td><a href='index.php?finishTask={$key}' method='GET' class='btn btn-success btn-lg' role='button'>Zrobione!</a></td></tr>";
                   }echo "</table>";
                }else{
                    echo"<p>Dzisiaj nie masz zadań. <br> Na tapczanie leży leń...<br></p>";
                }?>
                </table>
            </div>
            
            <form action="make.php" method="POST">
                 <input type="submit" class='btn btn-success btn-lg' value="Dodaj Zadanie">
            </form>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
