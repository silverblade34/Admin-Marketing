<?php
session_start();
$usuario = $_SESSION['username'];
if (!isset($usuario)) {
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/ver_producto.css">
  <link rel="stylesheet" href="styles/index.css">
  <link rel="shortcut icon" href="https://prestaclub.com/wp-content/uploads/2022/07/prestaclub-isotipo-icono-web.png" type="image/x-icon">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <title>Prestaclub|Marketing</title>
</head>

<body>
  <?php
  include('layouts/headerAdmin.php')
  ?>
  <main>
    <section class="landing">
      <div class="landing-saludo">
        <img src="img/landing.png" alt="">
      </div>
      <div class="landing-saludo">
        <div>
          <h1>Bienvenido al área de Marketing</h1>
          <p>"La innovación debe ser parte de tu cultura, los consumidores están cambiando más rápido que nosotros, y si no nos ponemos al día, perderemos oportunidades." <br> - Alex Chavez</p>
          <div class="btn-landing"><button>Ver más</button></div>
        </div>
        <a href="https://prestaclub.com/adminMarketing/uploads/"></a>
      </div>
    </section>
  </main>
  <?php include('layouts/footer.php') ?>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  <script src="script/app.js"></script>
</body>

</html>