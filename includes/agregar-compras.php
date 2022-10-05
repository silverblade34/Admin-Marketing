<?php
if (isset($_SESSION['modalC'])) {
    if ($_SESSION['modalC'] == true) {
?>
        <section class="back-modal modal--show">
            <div class="modal-edit">
                <form action="includes/enviar-partida.php" class="form-edit" method="POST">
                    <div class="form-edit-cerrar">
                        <button class="modal__close"><span class="material-symbols-outlined">
                                close
                            </span></button>
                    </div>
                    <h4>Registra tus compras <br> presupuestales</h4>
                    <div>
                        <label for="" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="" value="">
                        <input type="number" class="d-none" name="id-partida" id="" value="<?php echo $_SESSION['compra-p'] ?>">
                    </div>
                    <div>
                        <label for="" class="form-label">Descripción:</label>
                        <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="pt-3">
                        <input type="submit" value="Guardar" class="btn-partidas" name="enviar-compra">
                    </div>
                </form>
            </div>
        </section>
<?php
    }
};
