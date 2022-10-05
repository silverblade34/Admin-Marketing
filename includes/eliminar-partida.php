<?php
   require 'conexionBD.php';
   $id=$_GET['id'];
   $consulta="DELETE FROM partidasp WHERE id=$id";
   $resultado = mysqli_query($conn, $consulta);
   header("location:../partidas_p.php");
?>