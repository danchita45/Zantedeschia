<?php 
require './database.php';
$message='';
if (!empty($_POST['Correo']) && !empty($_POST['Contra']));
$sql = "INSERT INTO cliente (Contra, Correo, Nombre) Values (:Contra,:Correo,:Nombre)";
$stmt= $conn ->prepare ($sql);
$stmt->bindParam(':Correo', $_POST['Contra']);
$password = password_hash($_POST,['Contra'], PASSWORD_BCRYPT );
$stmt->bindParam(':Contra',$passwordd);

if ($stmt->execute()) {
    $message ='Se ha creado correctamente';
    
}  else {
    $message = 'ha ocurrido un error, verifique los datos';
    
        
}?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Sing up  </title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Playfair+Display&display=swap" rel="stylesheet">
<link rel="stylesheet" href="Assets/ccs/estilos.css">
    </head>
    
    
    <body>  
<?php require './partials/header.php';?>
        
       <?php 
        if (!empty($message)): ?> 
        <p> <?php $message ?></p>
        <?php endif;?>
        <h1> Registrarse</h1>
        <form action="Sing_in.php" method="post">
            <input type="text" name="Correo" placeholder="ingresa tu correo electronico">
             <input type="password" name="Contra" placeholder="ingresa tu contraseña">
             <input type="text" name="Nombre" placeholder="ingresa tu sobrenombre">
             <input type="submit" value="Registrarse">
             
        <span> ¿ya tienes una cuenta? <a href="loginphp.php"> Ingresa </a> </span>
        
    </body>
    
</html>
