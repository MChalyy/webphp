<?php
include 'conexion.php';
    $usuario=$_POST['usuario'];
    $pass=$_POST['contrasena'];
    $pass2=$_POST['confirmar_contrasena'];

   if (strcmp($pass, $pass2) !== 0) {
    echo 'Las contrasenias no considen wei';

   }else{
        $sql ="INSERT INTO usuarios (login, password)
       VALUES ('$usuario','$pass') ";

       if($mysqli->query($sql) === TRUE){
		    echo "Tonto, pa que te registras<br>";}   
       else {
		    echo "Error: " . $sql . "<br>" . $mysqli->error;}

        $mysqli -> commit();
	$mysqli -> close();
    }


    ?>