<?php
    require_once "../conexion.php";
    require_once "../metodosCrud.php";

    $nombre= $_POST['txtnombre'];
    $email=$_POST['txtemail'];
    $sexo=$_POST['opcion'];
    $area= $_POST['area'];
    $boletin=$_POST['suscripcion'];
    
    $datos =array($nombre,$email,$sexo,$area,$boletin);
    $obj= new metodos();
    if($obj->insertarDatos($datos)==1){
          header("location:../index.php");
    }else{
        "falla al agregar";
    }

    
?>