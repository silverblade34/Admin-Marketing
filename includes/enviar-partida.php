<?php
session_start();
include('conexionBD.php');
if (isset($_POST['enviar-partida'])) {
    /*------Solicitud de variables------ */

    $nombre = $_POST['nombre'];
    $presupuesto = $_POST['presupuesto'];

    /*------Consulta MySql------ */
    $consulta = "INSERT INTO partidasp (id,nombre,presupuesto) VALUES (null,'$nombre','$presupuesto')";
    if (($result = mysqli_query($conn, $consulta)) === false) {
        die(mysqli_error($conn));
        $_SESSION['msg-enviarp'] = false;
        header('location:../partidas_p.php');
    } else {
        $_SESSION['msg-enviarp'] = true;
        header('location:../partidasp.php');
    }
}elseif(isset($_POST['cerrar-modal-partida'])){
    
}elseif (isset($_POST['enviar-partida-edit'])) {
    /*------Solicitud de variables------ */

    $nombre = $_POST['nombre'];
    $presupuesto = $_POST['presupuesto'];
    $id = $_SESSION['idM']; /*----Tenemos la variable SESSION idM, esta hace referencia al ID de la partida 
    presupuestal a la que se le dio la opción de editar.
    */

   /*------Consulta MySql------ */
    $consulta = "UPDATE partidasp SET nombre='$nombre', presupuesto='$presupuesto' WHERE id='$id'";

    if (($result = mysqli_query($conn, $consulta)) === false) {
        die(mysqli_error($conn));
        $_SESSION['msg-enviarp'] = false;
        unset($_SESSION['idM']);
        header('location:../partidasp.php');  
    } else {
        $_SESSION['msg-enviarp'] = true;
        unset($_SESSION['idM']);
        header('location:../partidasp.php');  
    }
}elseif(isset($_POST['enviar-compra'])){
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $idPartida=$_POST['id-partida'];
    $consulta = "INSERT INTO comprasp (id,nombre,descripcion, idPartida) VALUES (null,'$nombre','$descripcion','$idPartida')";
    if (($result = mysqli_query($conn, $consulta)) === false) {
        die(mysqli_error($conn));
        $_SESSION['msg-enviarp'] = false;
        header('location:../compras-presupuestales.php');
    } else {
        $_SESSION['msg-enviarp'] = true;
        unset($_SESSION['modalC']);
        header('location:../compras-presupuestales.php');
    }
}
