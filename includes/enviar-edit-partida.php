<?php
include('includes/conexionBD.php');
if (isset($_SESSION['idM'])) {
    $idp = $_SESSION['idM'];
    $consulta = "SELECT * FROM partidasp WHERE id='$idp'";
    $resultado = mysqli_query($conn, $consulta);
    while ($row = mysqli_fetch_assoc($resultado)) {
?>
        <section class="back-modal modal--show">
            <div class="modal-edit">
                <form action="includes/enviar-partida.php" class="form-edit" method="POST">
                    <div class="form-edit-cerrar">
                        <a class="modal__close" name="cerrar-modal" href="includes/cerrar-sesiones.php?CMPP=true"><span class="material-symbols-outlined">
                                close
                            </span></a>
                    </div>
                    <h4>Registra tus partidas <br> presupuestales</h4>
                    <div>
                        <label for="" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="" value="<?php echo $row['nombre'] ?>">
                    </div>
                    <div>
                        <label for="" class="form-label">Presupuesto:</label>
                        <input type="number" step="0.01" class="form-control" name="presupuesto" value="<?php echo $row['presupuesto'] ?>">
                    </div>
                    <div class="pt-3">
                        <input type="submit" value="Guardar" class="btn-partidas" name="enviar-partida-edit">
                    </div>
                </form>
            </div>
        </section>
<?php
    }
} 
if(isset($_POST['cerrar-modal'])){
    unset($_SESSION['idM']);
}
;
