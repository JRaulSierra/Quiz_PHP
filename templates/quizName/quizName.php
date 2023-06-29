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
    <h1>Ingrese el nombre de su nuevo questionario</h1>
    <form method="POST" action="..\..\controllers\quizName\saveQuizName.php">
      <div class="form-group">
        <label for="pregunta">Nombre:</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>

      <button type="submit" class="btn btn-primary">Crear</button>
  </div>

</body>
</html>