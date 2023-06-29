<?php 
    if (!empty($_POST)) {
        if (empty($_POST['name'])) {
            echo '<h1>ERROR</h1>'; 
        }else{
            include "../../../index.php";
            $name = $_POST['name'];
            $codigoUnico = md5($name);

            $query = mysqli_query($connection,"SELECT * FROM quizes WHERE name = '$name'");
            $result = mysqli_fetch_array($query);

            if ($result > 0) {
                echo '<h1>ERROR</h1>'; 
            }else{
                $query_add = mysqli_query($connection,"INSERT INTO quizes(code,name) VALUES('$codigoUnico','$name')");
                if ($query_add) {
                    header("Location: http://localhost/Prueba_tecnica/Quiz/templates/createQuiz/createQuiz.php"); 
                }else{
                    echo '<h1>ERROR</h1>';  
                }
            }
        }
    }
?>
