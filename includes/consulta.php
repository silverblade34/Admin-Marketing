<?php
 include('includes/conexionBD.php');

 if(isset($_POST['buscarFacturas'])){
    
 $n=$_POST['nombre'];
 $fi=$_POST['fechaI'];
 $fm=$_POST['fechaM'];
 $o=$_POST['ordenar'];

 $consultas=array($n,$fi,$fm);

 //Comprobar nombre
function comprobarN($n){
   if(empty($n)){
      $c1="";
   }else{
      $c1="AND nombre LIKE '%$n%'";
   }
   return $c1;
}

//Comprobar fecha inferior y mayor
function comprobarF($fi,$fm){
   date_default_timezone_set('America/Lima');
   $fecha = date('Y-m-d');
   if(empty($fi)&& empty($fm)){
      $c1="";//----------------
   }else if(empty($fi)&& !empty($fm)){
      $c1="AND fechaE BETWEEN '2010-01-01' AND '$fm'";
   }else if(!empty($fi)&& empty($fm)){
      $c1="AND fechaE BETWEEN '$fi' AND '$fecha'";
   }else{
      $c1="AND fechaE BETWEEN '$fi' AND '$fm'";
   }
   return $c1;
}
//Ordenar facturas
function ordenar($o){
   if($o==0){
    $c1="";
   }elseif($o==1){
      $c1="ORDER BY id ASC";
   }else{
      $c1="ORDER BY id DESC";
   }
   return $c1;
}

 function buscar($consultas,$o){
    if(empty($consultas)&&$o==0){
       $consulta="SELECT * FROM facturamarketing";
    }else{
      $consulta="SELECT*FROM facturamarketing WHERE 1 ".comprobarN($consultas[0])." ".comprobarF($consultas[1],$consultas[2])." ".ordenar($o);
   }
    return $consulta;
 }
 $consulta=buscar($consultas,$o);
 $resultado = mysqli_query($conn, $consulta);
 $rowcount=mysqli_num_rows($resultado);

 }else{
   $consulta="SELECT * FROM facturamarketing";
   $resultado = mysqli_query($conn, $consulta);
   $rowcount=mysqli_num_rows($resultado);
 }
