<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="styles/menu-footer.css">
    <link rel="stylesheet" href="styles/partidasp.css">
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
            <div class="col-lg-4">
                <div>
                    <form action="" class="form-partidas">
                        <h4>Registra tus partidas presupuestales</h4>
                        <div>
                            <label for="" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" name="" id="">
                        </div>
                        <div>
                            <label for="" class="form-label">Presupuesto:</label>
                            <input type="number" step="0.01" class="form-control" name="" id="">
                        </div>
                        <div class="pt-3">
                            <input type="submit" value="Guardar" class="btn-partidas">
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
                            <div class="tarjeta row">
                                <div class="name-partida">
                                    <p>Nombre de partida presupuestal</p>
                                    <div><span class="material-symbols-outlined">
                                            edit
                                        </span> </div>
                                    <div><span class="material-symbols-outlined">
                                            delete
                                        </span> </div>
                                </div>
                                <div>
                                    Prespuesto: S/. 5 000 <br>
                                    Monto acumulado: S/. 1 000
                                </div>
                            </div>
                            <div class="tarjeta row">
                                <div class="name-partida">
                                    <p>Nombre de partida presupuestal</p>
                                    <div><span class="material-symbols-outlined">
                                            edit
                                        </span> </div>
                                    <div><span class="material-symbols-outlined">
                                            delete
                                        </span> </div>
                                </div>
                                <div>
                                    Prespuesto: S/. 5 000 <br>
                                    Monto acumulado: S/. 1 000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include('layouts/footer.php'); ?>
    <script src="script/app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>