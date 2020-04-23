<?php
include 'conexion.php';
    $user_input=$_POST['username'];
    $userlogged = $mysqli -> query("SELECT login, password FROM usuarios WHERE login='$user_input'");

if($userlogged->num_rows === 0) {
          header('Location: /ingresar.php?error=yes');

}else{

while ($row = $userlogged->fetch_row()) {

        if (password_verify($_POST['password'], $row[1])){
            session_start();
            $_SESSION['login'] = $row[0];
            
           
            header('Location: /index.php');

        }else{
            header('Location: /ingresar.php?error=yes');

         }

    }
}


        $mysqli -> commit();
	$mysqli -> close();
    
    ?>