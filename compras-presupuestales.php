<?php session_start();
include('includes/conexionBD.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/menu-footer.css">
    <link rel="stylesheet" href="styles/compras-p.css">
    <link rel="stylesheet" href="styles/modal.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://prestaclub.com/wp-content/uploads/2022/07/prestaclub-isotipo-icono-web.png" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Compras presupuestales</title>
</head>

<body>
    <?php include('layouts/headerAdmin.php') ?>
    <main>
        <section class="container-table">
            <div>
                <?php
                $idPP=$_SESSION['compra-p'];
                include('includes/agregar-compras.php');
                $consulta = "SELECT*FROM partidasp WHERE id=$idPP";
                $resultado = mysqli_query($conn, $consulta);
                while ($row = mysqli_fetch_assoc($resultado)) {
                ?>
                    <div class="nombre-presupuesto">
                        <div><?php echo $row['nombre']?></div>
                        <div>S/. <?php echo $row['presupuesto']?></div>
                    </div>            
                <div class="list-btn">
                    <div>Lista de compras presupuestales</div>
                    <div> <a href="includes/sesiones.php?modalC=true" class="btn btn-light">Agregar</button></a>
                </div>
                <?php
                } ?>
            </div>
            <table class="table">
                <thead>
                    <td>ID</td>
                    <td>Nombre</td>
                    <td>Descripción</td>
                    <td>Cotizaciones</td>
                    <td>Facturas</td>
                    <td>Acciones</td>
                </thead>
                <tr>
                    <td>12</td>
                    <td>Michell</td>
                    <td>Compra exterior</td>
                    <td>Ver cotizaciones</td>
                    <td>Ver facturas</td>
                    <td class="td-icons"><i class="edit fa-solid fa-pen"></i><i class="delete fa-solid fa-trash"></i></td>
                </tr>
            </table>
        </section>
    </main>
    <?php include('layouts/footer.php') ?>
    <script src="script/modal.js"></script>
</body>

</html>