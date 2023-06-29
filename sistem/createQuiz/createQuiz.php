<?php 
  require_once('connection.php');
  $allAnswers = false;
  if (!empty($_GET)) {
    $quizCode = $_GET['quiz'];
    $quizQuery = mysqli_query($connection, "SELECT quiz_id FROM quizes WHERE code = '$quizCode'");
    $quizResult = mysqli_fetch_array($quizQuery);
  
    if ($quizResult) {
      $quizId = $quizResult['quiz_id'];
      echo $quizId;
    } else {
      echo "Código de cuestionario no válido";
    }
  }

  if (!empty($_POST)) {
    $question = $_POST['question'];
    $answers = $_POST['answers'];
  
    $questionCountQuery = mysqli_query($connection, "SELECT COUNT(*) as total FROM questions WHERE quiz_id = '$quizId'");
    $questionCountResult = mysqli_fetch_array($questionCountQuery);
    $questionCount = $questionCountResult['total'];
    echo $questionCount;
    
    $insertQuestionQuery = "INSERT INTO questions (quiz_id, question) VALUES ('$quizId', '$question')";
    mysqli_query($connection, $insertQuestionQuery);
    $questionId = mysqli_insert_id($connection);

    foreach ($answers as $answer) {
      $insertAnswerQuery = "INSERT INTO answers (question_id, answer, valid_answer) VALUES ('$questionId', '$answer', false)";
      mysqli_query($connection, $insertAnswerQuery);
    }

    $questionCount++; // Incrementar el contador de preguntas

    if ($questionCount >= 4) {
      $allAnswers = true;
    }
    if ($questionCount >= 5) {
      header("Location: /Prueba_tecnica/Quiz/CopyQuiz?quiz=".$quizCode);
      exit(); // Asegurarse de que se detenga la ejecución después de la redirección
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
    <a class="navbar-brand" href="#">Creación de Cuestionario</a>
  </nav>
  <div class="container">
    <h1>Formulario de Pregunta</h1>

    <form method="POST">
      <label for="question">Quiz id:</label>
      <input name="quiz_id" disabled value="<?php echo $quizId; ?>">

      <div class="form-group">
        <label for="question">Pregunta:</label>
        <input type="text" class="form-control" id="question" name="question" required>
      </div>

      <div class="form-group">
        <label for="answers">Respuestas:</label>
        <input type="text" class="form-control" id="answers" name="answers[]" required>
        <input type="text" class="form-control" id="answers" name="answers[]" required>
        <input type="text" class="form-control" id="answers" name="answers[]" required>
        <input type="text" class="form-control" id="answers" name="answers[]" required>
      </div>

      <button type="submit" class="btn btn-primary"><?php echo $allAnswers ? 'Publicar cuestionario' : 'Agregar pregunta'?></button>
    </form>
  </div>
</body>
</html>