<?php

     class conectar{

        private $servidor = "localhost";
        private $user= "root";
        private $bd = "prueba_tecnica_dev";
        private $password = "";

        public function conexion(){
            $conexion=mysqli_connect($this->servidor,
                                    $this->user,
                                    $this->password,
                                    $this->bd,);
            return $conexion;
                                  
        }
    }
        $obj =new conectar();
        if($obj->conexion()){
           echo"conectado con exito ";    
   }  else{
    echo"falla";
   }
     

?>