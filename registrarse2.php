<?php
include 'conexion.php';
    $user_input=$_POST['username'];
    $pass_input=password_hash($_POST['password'], PASSWORD_BCRYPT);
    $pass_confirm=password_hash($_POST['confirm_password'], PASSWORD_BCRYPT);

if (!password_verify($_POST['password'], $pass_confirm)) {
 echo 'The password are incorrect';

}else{
       
       


        
        $sql ="INSERT INTO usuarios (login, password)
       VALUES ('$user_input','$pass_input') ";

       if($mysqli->query($sql) === TRUE){
		    echo "Your registration is successfully<br>";}   
       else {
		    echo "Error: " . $sql . "<br>" . $mysqli->error;}

        $mysqli -> commit();
	$mysqli -> close();
    }
    ?>