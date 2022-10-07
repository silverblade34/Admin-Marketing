<?php
session_start();
include('conexionBD.php');

/*--------Inicio sesion pagina compra presupuestal que deriva del ID  de la partida presupuestal---------*/
if(isset($_GET['idPartida'])){
$_SESSION['compra-p'] = $_GET['idPartida'];
header('Location:../compras-presupuestales.php');

/*--------------------------Inicio SESSION modal edit partida presupuestal--------------------*/
}elseif(isset($_GET['id'])){
    $id=$_GET['id'];
    $consulta="SELECT * FROM partidasp WHERE id='$id'";
    if (($result = mysqli_query($conn, $consulta)) === false) {
        die(mysqli_error($conn));     
    } else {
        $_SESSION['idM']=$id;
        header('location:../partidasp.php');
    }
/*-----------------Inicio sesion para modal de crear compras presupuestales-----------------*/
}elseif(isset($_GET['modalC'])){
    if ($_GET['modalC'] == true) {
        $_SESSION['modalC']=true;
        header('location:../compras-presupuestales.php');
    }
}

