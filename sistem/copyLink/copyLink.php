<?php 
    $headerRoute = 'templates\headerCreate.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>URL y botón de copiar</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <?php include $headerRoute ?>

    <?php
      // Obtener el código del quiz
      $quizCode = $_GET['quiz'];;

      // Construir la URL con el código del quiz
      $currentURL = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/Prueba_tecnica/Quiz?quiz=' . $quizCode;
    ?>

    <div class="form-group">
      <label for="url">URL:</label>
      <input type="text" class="form-control" id="url" value="<?php echo $currentURL; ?>" readonly>
    </div>

    <button class="btn btn-primary" onclick="copyURL()">Copiar URL</button>
  </div>

  <script>
    function copyURL() {
      var urlInput = document.getElementById("url");
      urlInput.select();
      urlInput.setSelectionRange(0, 99999); // Para dispositivos móviles

      document.execCommand("copy");

      alert("URL copiada al portapapeles: " + urlInput.value);
    }
  </script>
</body>
</html>