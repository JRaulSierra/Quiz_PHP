<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'quizes';

    try {
        $connection = @mysqli_connect($host,$user,$password,$db);
        if(!$connection){
            echo '<h1>Error de conexion</h1>';
        }else{
            header("Location: http://localhost/Prueba_tecnica/Quiz/templates/Home/quiz.php"); 
        }
    } catch (\Throwable $th) {
        echo '<h1>Error de conexion</h1>';
    }
?>