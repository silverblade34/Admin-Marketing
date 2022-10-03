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
    <link rel="shortcut icon" href="https://prestaclub.com/wp-content/uploads/2022/07/prestaclub-isotipo-icono-web.png" type="image/x-icon">
    <title>Registro Factura</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/registroFactura.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include('layouts/headerAdmin.php');
    ?>
    <!--Cuerpo-->
    <main>
        <div class="cuerpo-landing row">
            <div class="cuerpo-form-landing col-lg-5">
                <form action="includes/enviarFactura.php" method="POST" enctype="multipart/form-data">
                    <div>

                        <?php if (isset($_SESSION['id'])) {if($_SESSION['id']==true){ ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><i class="fa-sharp fa-solid fa-paperclip"></i> La factura se subio correctamente!</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        }else{ ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong><i class="fa-sharp fa-solid fa-paperclip"></i> <?php echo $_SESSION['msg']; ?> </strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php } } unset($_SESSION['id']); ?>

                        <div class="title-form pt-4">
                            <h3>Registra tus facturas</h3>
                        </div>
                        <div>
                            <label for="">Nombre</label>
                            <input type="text" name="nombreDocumento" id="" class="form-control" placeholder="Escribe el nombre de tu documento">
                        </div>
                        <div class="form-dni"><label for="">Descripción</label>
                            <textarea class="form-control" name="descripcion" id="" cols="30" rows="3" placeholder="Escribe una breve descripción"></textarea>
                        </div>
                        <div class="pt-1">
                            <label for="">Sube tu documento o foto</label><span class="delgado"> (max 2MB)</span> <br>
                            <input class="selecciona-img form-control" name="uploadedfile" type="file">
                        </div>
                        <div class="pt-1">
                            <label for="">Sube los sustentos de la factura</label><span class="delgado"> (Opcional)</span> <br>
                            <input class="selecciona-img form-control mt-1" name="sustento1" type="file">
                            <input class="selecciona-img form-control mt-1" name="sustento2" type="file">
                            <input class="selecciona-img form-control mt-1" name="sustento3" type="file">
                        </div>
                        <div>
                            <label>Fecha de emisión: </label>
                            <input type="date" class="form-control" name="fecha" id="">
                        </div>
                        <div class="pt-3 text-center">
                            <input type="submit" value="Enviar" id="enviar-form" name="enviarDatos" class="hero__cta">
                        </div>
                    </div>
                </form>
            </div>
            <div class="img-facturas col-lg-7">
                <img src="img/img-facturas.png" alt="">
            </div>
        </div>
    </main>
    <!-- Footer -->
    <?php
    include('layouts/footer.php');
    ?>
    <script src="script/modal.js"></script>
    <script src="script/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>