<?php

include("conexion.php");

if (isset($_POST['register']))
{
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['direction']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['password']) >= 1 
        ) {
            $name = trim($_POST['name']);
            $email = trim($_POST['email']);
            $direction = trim($_POST['direction']);
            $phone = trim($_POST['phone']);
            $password = trim($_POST['password']);
            $fecha = date("d/m/y");
            $consulta = "INSERT INTO datos(nombre, email, direccion, telefono, contraseña, fecha)
                VALUES('$name', '$email', '$direction', '$phone', '$password', '$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado)
            {
             ?>
                <h3 class="success">Tu Registro se ha completado con éxito!!!!!</h3>
             <?php
            } else {
             ?>
                <h3 class="error">Ocurrió un error al consultar!!!!!</h3>
             <?php
            }
        } else {
            ?>
               <h3 class="error">Debes llenar todos los campos!!!!!</h3>
            <?php
        }
    }

?>