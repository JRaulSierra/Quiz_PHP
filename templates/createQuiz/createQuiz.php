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

    <form method="POST" action="guardar_pregunta.php">
      <div class="form-group">
        <label for="pregunta">Pregunta:</label>
        <input type="text" class="form-control" id="pregunta" name="pregunta" required>
      </div>

      <div class="form-group">
        <label for="respuesta1">Respuesta 1:</label>
        <input type="text" class="form-control" id="respuesta1" name="respuesta1" required>
      </div>

      <div class="form-group">
        <label for="respuesta2">Respuesta 2:</label>
        <input type="text" class="form-control" id="respuesta2" name="respuesta2" required>
      </div>

      <div class="form-group">
        <label for="respuesta3">Respuesta 3:</label>
        <input type="text" class="form-control" id="respuesta3" name="respuesta3" required>
      </div>

      <div class="form-group">
        <label for="respuesta4">Respuesta 4:</label>
        <input type="text" class="form-control" id="respuesta4" name="respuesta4" required>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
      <button 
        type="button" 
        class="btn btn-secondary" 
        id="agregarPregunta" 
        onclick="location.href='createQuiz.php'">Agregar otra pregunta</button>
    </form>
  </div>

</body>
</html>