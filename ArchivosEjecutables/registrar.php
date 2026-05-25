<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <form method="post" >

        <h2>Hola</h2>

        <p>Inicia tu registro AQUÍ!!!!</p>

        <div class="input-wrapper">

            <input type="text" name="name" placeholder="Nombre" >
            <img class="input-icon" src="img/user-svgrepo-com.svg" alt="">

        </div>

        <div class="input-wrapper">

            <input type="email" name="email" placeholder="Email" >
            <img class="input-icon" src="img/email-1572-svgrepo-com.svg" alt="">

        </div>

        <div class="input-wrapper">

            <input type="text" name="direction" placeholder="Direccion" >
            <img class="input-icon" src="img/direction-svgrepo-com.svg" alt="">

        </div>

        <div class="input-wrapper">

            <input type="tel" name="phone" placeholder="Telefono" >
            <img class="input-icon" src="img/phone-svgrepo-com.svg" alt="">

        </div>

        <div class="input-wrapper">

            <input type="password" name="password" placeholder="Contraseña" >
            <img class="input-icon" src="img/password-minimalistic-svgrepo-com.svg" alt="">

        </div>

        <input class="btn" type="submit" name="register" value="Enviar">

    </form>

    <?php
        include("registro.php");
    ?>
    
</body>
</html>