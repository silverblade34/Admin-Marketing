<?php
session_start();
include('conexionBD.php');
if (isset($_POST['enviarDatos'])) {
    $msg = "";
    $nombre = $_POST['nombreDocumento'];
    $descripcion = $_POST['descripcion'];
    $fechaR=$_POST['fecha'];
    $uploadedfileload = "true";
    //--------------------------Enviar imagen-----------------------------
    $uploadedfile_size = $_FILES['uploadedfile']['size'];
    if ($_FILES['uploadedfile']['size'] > 9000000) {
        $msg = $msg . "El archivo es mayor que 9MB, debes reducirlo antes de subirlo";
        $uploadedfileload = "false";
        $_SESSION['msg']=$msg;
        $_SESSION['id']=false;
        header('location:../registro_factura.php');
    }


    if ($nombre == "" || $descripcion == "" || $fechaR == "") {
        $msg= "Ingrese correctamente sus datos por favor, o revise que todos los campos esten completos.";
        $_SESSION['msg']=$msg;
        $_SESSION['id']=false;
        header('location:../registro_factura.php');
    } else {
        date_default_timezone_set('America/Lima');
        $fecha = date('Y-m-d H:i:s', time()); //Sacamos la hora y fecha actual

        $file_name = $_FILES['uploadedfile']['name'];
        $add = "uploads/$file_name";
        move_uploaded_file($_FILES['uploadedfile']['tmp_name'], '../uploads/' . $file_name);

        $file_name1 = $_FILES['sustento1']['name'];
        $s1 = "$file_name1";
        move_uploaded_file($_FILES['sustento1']['tmp_name'], '../uploads/' . $file_name1);

        $file_name2 = $_FILES['sustento2']['name'];
        $s2 = "$file_name2";
        move_uploaded_file($_FILES['sustento2']['tmp_name'], '../uploads/' . $file_name2);

        $file_name3 = $_FILES['sustento3']['name'];
        $s3 = "$file_name3";
        move_uploaded_file($_FILES['sustento3']['tmp_name'], '../uploads/' . $file_name3);

        $sql = "INSERT INTO facturamarketing (id, nombre, descripcion, ruta, fechaE, fechaC, sustento1, sustento2, sustento3) VALUES (NULL,'$nombre','$descripcion','$add','$fechaR','$fecha','$s1','$s2','$s3');";
        if (($result = mysqli_query($conn, $sql)) === false) {
            die(mysqli_error($conn));
            
        } else {
            $_SESSION['id']=true;
            header('location:../registro_factura.php');
        }
    }
}
