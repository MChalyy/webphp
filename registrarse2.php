<?php
include 'conexion.php';
    $usuario=$_POST['usuario'];
    $pass=$_POST['contrasena'];
    $pass2=$_POST['confirmar_contrasena'];

   if (strcmp($pass, $pass2) !== 0) {
    echo 'Las contraseñas no coinciden';

   }else{
        $sql ="INSERT INTO usuarios (login, password)
       VALUES ('$usuario','$pass') ";

       if($mysqli->query($sql) === TRUE){
		    echo "Te has registrado correctamente<br>";}   
       else {
		    echo "Error: " . $sql . "<br>" . $mysqli->error;}

        $mysqli -> commit();
	$mysqli -> close();
    }


    ?>
