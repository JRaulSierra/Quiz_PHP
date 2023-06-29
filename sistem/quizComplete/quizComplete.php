<?php
    $headerRoute = 'templates\headerQuiz.php';
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
    <?php include $headerRoute ?>
    <div class="container">
        <h1>Quiz Completado</h1>
        <div class="alert alert-success" role="alert">
        ¡Felicidades! Has completado el quiz.
        </div>
    </div>
</body>
</html>