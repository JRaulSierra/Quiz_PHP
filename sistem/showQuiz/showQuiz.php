<?php
    $headerRoute = 'templates\headerQuiz.php';
    require_once('connection.php');
    $quizCode = $_GET['quiz'];
    $quizQuery = mysqli_query($connection, "SELECT quiz_id FROM quizes WHERE code = '$quizCode'");
    $quizResult = mysqli_fetch_array($quizQuery);
    if ($quizResult) {
    $quizId = $quizResult['quiz_id'];

    $questionQuery = mysqli_query($connection, "SELECT * FROM questions WHERE quiz_id = '$quizId'");
    $questions = mysqli_fetch_all($questionQuery, MYSQLI_ASSOC);
    $questionCount = count($questions);
    } else {
    echo "Código de cuestionario no válido";
    }

    if (!empty($_POST)) {
        header("Location: /Prueba_tecnica/Quiz/completeQuiz"); 
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
  <?php include $headerRoute ?>
  <div class="container">
    <h1>Bienvenido al cuestionario</h1>
    <h3>Favor completar el cuestionario</h3>
    <form method="POST">
      <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>

      <?php foreach ($questions as $question): ?>
        <h4><?php echo $question['question']; ?></h4>
        <div class="form-group">
          <?php
          $questionId = $question['question_id'];
          $answerQuery = mysqli_query($connection, "SELECT * FROM answers WHERE question_id = '$questionId'");
          $answers = mysqli_fetch_all($answerQuery, MYSQLI_ASSOC);
          foreach ($answers as $answer): ?>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="answer_<?php echo $questionId; ?>" id="answer_<?php echo $answer['answer_id']; ?>" value="<?php echo $answer['answer_id']; ?>">
              <label class="form-check-label" for="answer_<?php echo $answer['answer_id']; ?>">
                <?php echo $answer['answer']; ?>
              </label>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>

      <button type="submit" class="btn btn-primary">Completar</button>
    </form>
  </div>
</body>