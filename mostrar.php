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
    <link rel="stylesheet" href="css/menu_footer.css">
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
    include('includes/headerAdmin.php');
    ?>
    <main>
        <section class="container-buscador">
            <div class="container">
                <form action="" method="POST">
                    <h4>Visualice sus contactos</h4>
                    <div>
                        <p>Nombre de contacto:</p>
                        <input class="input-nombre" type="text" name="nombre" id="">
                    </div>
                    <div>
                        <h5>Filtro de búsqueda:</h5>
                    </div>
                    <div class="filtros">
                        <div class="me-1">
                            <p>Tienen local: </p>
                            <select name="local" id="">
                                <option value="0">Selecciona tu opción</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                        <div class="me-1">
                            <p>Tienen inmueble: </p>
                            <select name="inmueble" id="">
                                <option value="0">Selecciona tu opción</option>
                                <option value="1">Si</option>
                                <option value="2">No</option>
                            </select>
                        </div>
                        <div class="me-1">
                            <p>Ordenar contactos: </p>
                            <select name="ordenar" id="">
                                <option value="0">Selecciona tu opción</option>
                                <option value="1">Ascendente</option>
                                <option value="2">Descendente</option>
                            </select>
                        </div>
                        <div>
                            <p>Origen de contacto:</p>
                            <input class="input-origen" type="text" name="origen" id="">
                        </div>
                        <div>
                            <p>Fecha desde: </p>
                            <input type="date" name="fechaI" id="">
                        </div>
                        <div>
                            <p>Fecha hasta: </p>
                            <input type="date" name="fechaM" id="">
                        </div>
                        <div class="btn-buscar">
                            <button type="submit" name="buscarProductos" id="">Buscar</button>
                        </div>
                    </div>
                </form>
                <div class="tabla-pro">
                    <?php
                    include('includes/consulta.php');
                    ?>
                    <h5>Lista de contactos <span> (N° de contactos <?php echo $rowcount; ?>)</span></h5>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>DNI</th>
                                <th>Correo</th>
                                <th>Celular</th>
                                <th>Tlocal</th>
                                <th>Tinmueble</th>
                                <th>Imagen</th>
                                <th>Fecha</th>
                                <th>Origen</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <?php

                        while ($row = mysqli_fetch_assoc($resultado)) {
                        ?>
                            <tr class="tr-datos">
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['nombres'] ?></td>
                                <td><?php echo $row['dni'] ?></td>
                                <td><?php echo $row['correo'] ?></td>
                                <td><?php echo $row['celular'] ?></td>
                                <td><?php echo $row['Tlocal'] ?></td>
                                <td><?php echo $row['Tinmueble'] ?></td>
                                <td> <a target="_blank" href="https://prestaclub.com/campanaNavidad/<?php echo $row['rutaImagen'] ?>"><?php echo $row['rutaImagen'] ?> </a></td>
                                <td><?php echo $row['fecha'] ?></td>
                                <td><?php echo $row['origen'] ?></td>
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
    <?php include('includes/footer.php'); ?>
    <script src="script/app.js"></script>
    <script src="script/eliminarContacto.js"></script>
</body>

</html>