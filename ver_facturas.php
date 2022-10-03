<?php
session_start();
$usuario = $_SESSION['username'];
if (!isset($usuario)) {
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/icon-logo.png">
    <title>Prestaclub|Administrador</title>
    <link rel="stylesheet" href="styles/ver_producto.css">
    <link rel="shortcut icon" href="https://prestaclub.com/wp-content/uploads/2022/07/prestaclub-isotipo-icono-web.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Slackey&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rancho&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sulphur+Point:wght@300;400;700&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    include('layouts/headerAdmin.php');
    ?>
    <main>
        <section class="container-buscador">
            <div class="container">
                <form action="" method="POST">
                    <h4>Visualice sus facturas</h4>
                    <div>
                        <h5>Filtro de búsqueda:</h5>
                    </div>
                    <div class="filtros">
                        <div>
                            <p>Nombre de factura:</p>
                            <input class="input-nombre" type="text" name="nombre" id="">
                        </div>
                        <div class="me-1">
                            <p>Ordenar facturas: </p>
                            <select name="ordenar" id="">
                                <option value="0">Selecciona tu opción</option>
                                <option value="1">Ascendente</option>
                                <option value="2">Descendente</option>
                            </select>
                        </div>
                        <div>
                            <p>Emitido desde: </p>
                            <input type="date" name="fechaI" id="">
                        </div>
                        <div>
                            <p>Emitido hasta: </p>
                            <input type="date" name="fechaM" id="">
                        </div>
                        <div class="btn-buscar">
                            <button type="submit" name="buscarFacturas" id="">Buscar</button>
                        </div>
                    </div>
                </form>
                <div class="tabla-pro">
                    <?php
                    include('includes/consulta.php');
                    ?>
                    <h5>Lista de facturas <span> (N° de facturas <?php echo $rowcount; ?>)</span></h5>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Documento</th>
                                <th>Sustento</th>
                                <th>Fecha de emisión</th>
                                <th>Fecha de creación</th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php

                        while ($row = mysqli_fetch_assoc($resultado)) {
                        ?>
                            <tr class="tr-datos">
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['nombre'] ?></td>
                                <td><?php echo $row['descripcion'] ?></td>
                                <td> <?php echo $row['ruta'] ?> </td>
                                <td> <?php echo $row['sustento1'] ?> <br>
                                    <?php echo $row['sustento2'] ?> <br>
                                    <?php echo $row['sustento3'] ?>
                                </td>
                                <td> <?php echo $row['fechaE'] ?> </td>
                                <td> <?php echo $row['fechaC'] ?> </td>
                                <td><a href="includes/eliminarContacto.php?id=<?php echo $row['id'] ?>" class="btn-eliminar" type="submit" name="eliminar"><i class="fa-sharp fa-solid fa-trash"></i></a></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </section>
    </main>
    <?php include('layouts/footer.php'); ?>
    <script src="script/app.js"></script>
    <script src="script/eliminarContacto.js"></script>
</body>

</html>