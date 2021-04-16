<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> login</title>
        
        <link rel="stylesheet" href="Assets/ccs/estilos.css">
        
    </head>
    
    
    <body>  
        <?php require './partials/header.php';?>
        <h1>
            Ingresar
        </h1>
        <span> si no tienes cuenta <a href="Sing_in.php"> Registrate </a> </span>
        <form action="loginphp.php" method="post">
            <input type="text" name="Correo" placeholder="ingresa tu correo electronico">
             <input type="password" name="Contra" placeholder="ingresa tu contraseña">
             <input type="submit" value="Ingresar"  >
        </form>
    
    </body>
    
</html>
