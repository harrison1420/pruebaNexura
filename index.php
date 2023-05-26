<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">

<head>
    <title>Formulario</title>
</head>


<body>
    <h1 style="text-align: center;" >Crear empleado</h1>
    <p style="text-align: center;">Los campos con asterisco (*) son obligatorios.</p>

    <div class="container">


        <form action="procesos/insertar.php">
            <label>Nombre completo *<input class="inp" type="text" name="txtnombre" size="80px" 
             placeholder="Nombre completo del empleado"></label>


            <p></p>

            <label>Email *<input class="inp" type="text" name="txtemail" size="80px" placeholder="Correo electronico"></label>


            <p></p>

            <label>Sexo *</label>
            <div class="radio-group">
                <input type="radio" id="opcion1" name="opcion" value="opcion1">
                <label for="opcion1">Masculino</label>
                <br>
                <input type="radio" id="opcion2" name="opcion" value="opcion2">
                <label for="opcion2">Femenino</label>
            </div>


            <br>

            <label for="area">Área* <select id="area" name="area">
                    <option value="Administrativa y financiera">Administrativa y financiera</option>
                    <option value="Ingenieria">Ingeniería</option>
                    <option value="Desarrollo de Negocios">Desarrollo de Negocios</option>
                    <option value="Proyectos">Proyectos</option>
                    <option value="Servicios">Servicios</option>
                    <option value="Calidad">Calidad</option>
                </select></label>


            <p></p>

            <label for="mensaje">Descripción* <textarea id="mensaje" name="mensaje" rows="4" cols="50" placeholder="Descripcion de la experiencia del empleado"></textarea></label>


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

    <br><br>
    <table>
        <tr>
            <td>nombre</td>
            <td>email</td>
            <td>sexo</td>
            <td>area</td>
            <td>boletin</td>
        </tr>
        <?PHP
        $obj = new metodos();
        $sql = "SELECT id, nombre,email,sexo,area_id,boletin from empleado";
        $datos = $obj->mostrarDatos($sql);

        foreach ($datos as $key) {
        ?>

            <tr>
                <td> <?php echo $key['nombre'] ?></td>
                <td> <?php echo $key['email'] ?></td>
                <td> <?php echo $key['sexo'] ?></td>
                <td> <?php echo $key['area_id'] ?></td>
                <td> <?php echo $key['boletin'] ?></td>
                <td><a href="edita.php?id=<?php echo $key['id'] ?>"></a></td>
            </tr>
        <?php
        }
        ?>



    </table>

</body>

</html>