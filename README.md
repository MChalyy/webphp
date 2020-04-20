 Update 1 -20/04/2020: Aquí añadire el progreso que este haciendo con el proyecto.
                       El codigo lo estoy escribiendo mirando bibliotecas y el uso de las funciones, el primero problema vino con
                       el acceso a la base de datos, hacia conexión pero no conseguía registrar nada en ella, ningun usuario.
                       Tras mucho leer en internet, probe distintos metodos y llego a funcionar añadiendo:
                       
                       if($mysqli->query($sql) === TRUE){
		                      echo "Te has registrado correctamente<br>";}   
                       else {
		                      echo "Error: " . $sql . "<br>" . $mysqli->error;}

                         $mysqli -> commit();
                       
                       Sigo sin saber exactamente porque no funciona sin añadir esto.
                       
                       -Objetivos del siguiente update:
                          -Cambiar todo a ingles.
                          -Cambiar "registrarse.php" a metodos session_start() y definir correctamente el archivo login.php
                      
