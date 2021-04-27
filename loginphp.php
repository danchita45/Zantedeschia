<?php

    session_start();
    
    if (isset($_SESSION['user_ID_cliente'])) {
        header('Location: /php-login');
    }

    require 'database.php';

    /*if (!empty($_POST['Correo']) && !empty($_POST['Contra'])) {
        $records = $conn->prepcare('SELECT ID_cliente, Correo, password FROM cliente WHERE Correo = :Correo');
        $records->bindParam(':Correo', $_POST['Correo']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $message = '';

        if (count($results) > 0 && password_verify($_POST['Contra'], $results['Contra'])) {
            $_SESSION['user_id'] = $results['ID_cliente'];
            header("Location: /php-login");
        } else 
        {
            $message = 'Error, los datos no coinciden';
        }
    }
  }*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Login</title>
        
        <link rel="stylesheet" href="Assets/ccs/estilos.css">
        
    </head>
    
    
    <body>  
        <?php require './partials/header.php';?>
        <h1>
            Ingresar
        </h1>
        <span> si no tienes cuenta <a href="Sing_in.php"> Registrate </a> </span>
        <form action="loginphp.php" method="post">
            <input type="text" name="Correo" placeholder="Ingresa tu correo electronico">
             <input type="password" name="Contra" placeholder="Ingresa tu contraseña">
             <input type="submit" value="Ingresar"  >
        </form>
    
    </body>
    
</html>
