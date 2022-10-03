<?php
   require 'conexionBD.php';
   session_start();
   if(isset($_POST['entrar'])){
   $usuario=$_POST['username'];
   $contrasena=$_POST['password'];
   $q="SELECT COUNT(*) as contar FROM usuarios where usuario='$usuario' and contraseña='$contrasena'";
   $consulta=mysqli_query($conn,$q);
   $array=mysqli_fetch_array($consulta);

   if($array['contar']>0){
    $_SESSION['username']=$usuario;
     header("location:../index.php");
   }else{
    header("location:../login.php?fallo=true");
   }
  }
?>