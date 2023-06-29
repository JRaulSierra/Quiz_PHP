<?php
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'quizes';

    try {
        $connection = @mysqli_connect($host,$user,$password,$db);
    } catch (\Throwable $th) {
        echo '<h1>Error de conexion</h1>';
    }
?>