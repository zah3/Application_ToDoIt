<?php 
session_start()
?>

<html>
    <head>
        <meta charset="utf-8">
        <head>
        <meta charset="utf-8">
        <link href="css/bootstrap.min.css" rel="stylesheet">


        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
      
     </head>
    </head>
    <body>
        <div class="container">
            <div class="well">
                <div class="form-group has-success">
                    <form action="index.php" method="POST">
                        <label class="control-label" for="inputSuccess1">
                            Nazwa zadanie:
                            <input  type="text" name="name">
                            Jakie zadanie?
                            <input type="text" name="description"><br><br>
                            <input type="submit" class='btn btn-success btn-lg' value="Dodaj Zadanie">
                        </label>
                    </form>
                </div>
            </div>
        </div>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
           <script src="js/bootstrap.min.js"></script>
    </body>
</html>
