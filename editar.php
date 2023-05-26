<?php

   require_once"conexion.php";
   $obj= new conectar();
   $conexion=$obj->conexion();
   $id= $_GET['id'];
   $sql= "SELECT nombre,email,sexo,area,boletin
                from empleado where id ='$id'";
    $result =mysqli_query($conexion,$sql);   
    $ver= mysqli_fetch_row($result);        
?>


<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">

<head>
    <title>Formulario</title>
</head>

<body>
    <div class="container">
        <form action="procesos/actualizar.php">
            <label>Nombre completo *<input type="text" name="txtnombre" value="<?php echo $ver[0]?>"></label>


            <p></p>

            <label>Email *<input type="text" name="txtemail"value="<?php echo $ver[1]?>"></label>


            <p></p>

            <label>Sexo *</label>
            <div class="radio-group">
                <input type="radio" id="opcion1" name="opcion"value="<?php echo $ver[2]?>" value="opcion1">
                <label for="opcion1">Masculino</label>
                <br>
                <input type="radio" id="opcion2" name="opcion" value="<?php echo $ver[2]?>"value="opcion2">
                <label for="opcion2">Femenino</label>
            </div>


            <br>

            <label for="area">Área* <select id="area" name="area"value="<?php echo $ver[3]?>">
                    <option value="Administrativa y financiera">Administrativa y financiera</option>
                    <option value="Ingenieria">Ingeniería</option>
                    <option value="Desarrollo de Negocios">Desarrollo de Negocios</option>
                    <option value="Proyectos">Proyectos</option>
                    <option value="Servicios">Servicios</option>
                    <option value="Calidad">Calidad</option>
                </select></label>


            <p></p>

            <label for="mensaje">Descripción* <textarea id="mensaje" name="mensaje"value="<?php echo $ver[4]?>" rows="4" cols="50"></textarea></label>


            <br>

            <label for="suscripcion" class="checkbox-label">
                <input type="checkbox" id="suscripcion" name="suscripcion">
                Deseo recibir boletín informativo
            </label>

            <br>

            <label class="checkbox-label">Roles* <div class="checkbox-group">
                    <div class="checkbox-option">
                        <input type="checkbox" name="rol" value="rol1">
                        <label>Profesional de proyectos - Desarrollador</label>
                    </div>
                    <div class="checkbox-option">
                        <input type="checkbox" name="rol" value="rol2">
                        <label>Gerente estratégico</label>
                    </div>
                    <div class="checkbox-option">
                        <input type="checkbox" name="rol" value="rol3">
                        <label>Auxiliar administrativo</label>
                    </div>
                </div></label>


            <br>

            <button>Guardar</button>
        </form>
    </div>

   

</body>

</html>