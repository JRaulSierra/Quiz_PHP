<?php
  $headerRoute = 'templates\headerCreate.php';
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
  <?php require_once $headerRoute ?>

  <div class="container mt-4">
    <h1>Bienvenido, ¿desea crear un cuestionario?</h1>

    <button 
      class="btn btn-primary" 
      onclick="location.href='/Prueba_tecnica/Quiz/createNewQuiz'">Crear Cuestionario</button>
  </div>

</body>
</html>