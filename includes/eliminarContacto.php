<?php
   require 'conexionBD.php';
   $id=$_GET['id'];
   $consulta="DELETE FROM facturamarketing WHERE id=$id";
   $resultado = mysqli_query($conn, $consulta);
   header("location:../ver_facturas.php");
?>