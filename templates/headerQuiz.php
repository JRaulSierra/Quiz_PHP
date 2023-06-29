<?php 
  require_once('connection.php');
  $allAnswers = false;
  if (!empty($_GET)) {
    $quizCode = $_GET['quiz'];
    $quizQuery = mysqli_query($connection, "SELECT name FROM quizes WHERE code = '$quizCode'");
    $quizResult = mysqli_fetch_array($quizQuery);
  
    if ($quizResult) {
      $quizName = $quizResult['name'];
    } else {
      echo "Código de cuestionario no válido";
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Cuestionario <?php echo isset($quizName) ? $quizName : ''?></a>
  </nav>
</body>
</html>