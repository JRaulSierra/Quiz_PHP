<?php 
    if (!empty($_POST)) {
        if (empty($_POST['name'])) {
            echo '<h1>ERROR</h1>'; 
        }else{
            include "../../connection.php";
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
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QuiZone</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <?php include "../../templates/headerCreate.php" ?>

  <div class="container">
    <h1>Ingrese el nombre de su nuevo questionario</h1>
    <form method="POST">
      <div class="form-group">
        <label for="pregunta">Nombre:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>

      <button type="submit" class="btn btn-primary">Crear</button>
  </div>

</body>
</html>