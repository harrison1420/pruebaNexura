<?php


require_once "../conexion.php";
require_once "../metodosCrud.php";

$nombre= $_POST['txtnombre'];
$email=$_POST['txtemail'];
$sexo=$_POST['opcion'];
$area= $_POST['area'];
$boletin=$_POST['suscripcion'];

$datos =array($nombre,$email,$sexo,$area,$boletin,$id);
$obj= new metodos();
if($obj->actualizaDatos($datos)==1){
    header("location:../index.php");
}else{
  "falla al agregar";
}
?>