<?php session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/menu-footer.css">
    <link rel="stylesheet" href="styles/partidasp.css">
    <link rel="stylesheet" href="styles/modal.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="shortcut icon" href="https://prestaclub.com/wp-content/uploads/2022/07/prestaclub-isotipo-icono-web.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Partidas presupuestales</title>
</head>

<body>
    <?php include('layouts/headerAdmin.php'); ?>
    <main>
        <section class="row">
            <div class="col-lg-4 form-img">
                <div>
                    <?php
                    include('includes/enviar-edit-partida.php');

                    /*-------Alert de confirmacion del correcto guardado de una nueva partida presupuestal---- */
                    if (isset($_SESSION['msg-enviarp'])) {
                        if ($_SESSION['msg-enviarp'] == true) { ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong><i class="fa-sharp fa-solid fa-paperclip"></i> La partida presupuestal se guardo correctamente!</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                        } else { ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong><i class="fa-sharp fa-solid fa-paperclip"></i> Hubo un error al cargar su partida presupuestal, revise que todos los campos esten llenos.</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                    <?php
                        }
                    }
                    unset($_SESSION['msg-enviarp']);
                    /*------------------------------------------------------------------------*/
                    ?>
                    <form action="includes/enviar-partida.php" class="form-partidas" method="POST">
                        <h4>Registra tus partidas presupuestales</h4>
                        <div>
                            <label for="" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="">
                        </div>
                        <div>
                            <label for="" class="form-label">Presupuesto:</label>
                            <input type="number" step="0.01" class="form-control" name="presupuesto" id="">
                        </div>
                        <div class="pt-3">
                            <input type="submit" value="Guardar" class="btn-partidas" name="enviar-partida">
                        </div>
                    </form>
                    <div>
                        <img src="img/registro-partidas.png" alt="">
                    </div>
                </div>
            </div>
            <div class="lista-partidas col-lg-8">
                <div class="container-lista">
                    <div class="buscador">
                        <input type="text" placeholder="¿Que deseas buscar?">
                        <div>
                            <span class="material-symbols-outlined">
                                search
                            </span>
                        </div>
                    </div>
                    <div class="tarjetas">
                        <div class="grid-lista">
                            <?php $consultaP = "SELECT * FROM partidasp";
                            $resultadop = mysqli_query($conn, $consultaP);
                            while ($row = mysqli_fetch_assoc($resultadop)) {
                            ?>
                                <div class="tarjeta row">
                                    <div class="name-partida">
                                        <div>
                                            <p><?php echo $row['nombre'] ?></p>
                                        </div>
                                        <div class="icons-tarjetas">
                                            <div class="edit editar_partida" id="prueba234">
                                                <a href="#">
                                                    <span class="material-symbols-outlined">edit</span>
                                                </a>
                                            </div>
                                            <div class="delete">
                                                <a onclick="return confirm('¿Estas seguro de eliminar esta partida presupuestal?')" href="includes/eliminar-partida.php?id=<?php echo $row['id'] ?>"><span class="material-symbols-outlined">
                                                        delete
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        Presupuesto: S/. <?php echo $row['presupuesto'] ?> <br>
                                        Monto acumulado: S/. 1 000
                                    </div>
                                    <div class="compras-presupuestales">
                                        <div> <a href="includes/sesiones.php?idPartida=<?php echo $row['id'] ?>">Compras presupuestales</a><span class="material-symbols-outlined">
                                                arrow_forward
                                            </span></div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php ?>
    <?php
    include('layouts/footer.php'); ?>
    <script src="script/app.js"></script>
    <script src="script/modal.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>