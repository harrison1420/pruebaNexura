<?php

     class metodos{
        public function mostrarDatos($sql){
            $c= new conectar();
            $conexion= $c->conexion();

            $result= mysqli_query($conexion,$sql);

            return mysqli_fetch_all($result,MYSQLI_ASSOC);

        }
        public function insertarDatos($datos){
            $c=new conectar();
            $conexion=$c->conexion();

            $sql="INSERT into empleado (nombre,email,sexo,area,boletin) 
                         values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";
            $result=mysqli_query($conexion,$sql);             

        }

        public function actualizaDatos($datos){
            $c=new conectar();
            $conexion= $c->conexion();

            $sql= "UPDATE empleado set nombre='$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]'";
            $result=mysqli_query($conexion,$sql);
        }
     }

?>