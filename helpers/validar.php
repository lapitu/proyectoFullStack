

<?php

require('conexion.php'); // llama a verificar la conexion

session_start(); //requiere la verificacion para poder ingresar a la pagina. debe estar primero que todo con su apertura y cierre de php

if(isset($_SESSION["id_usuario"])){ 
        header("Location: usuario.php"); // si la sesion está iniciada manda a la  sesion de usuario
    }

try{ //inicia la comprobacion de errores o excepciones

        if(!empty($_POST))
        {
            $usuario = mysqli_real_escape_string($mysqli,$_POST['usuario']); //hace que los datos que se envien sean seguros
            $password = mysqli_real_escape_string($mysqli,$_POST['password']);
            
            $sha1_pass = sha1($password);

            
            $sql = "SELECT * FROM usuarios WHERE usr_usuario = '$usuario' AND usr_password = '$password'"; 
            $result=$mysqli->query($sql);
            $rows = $result->num_rows;


            if(!$result){
                console.log("error");
            }
            
            if($rows > 0) {
                $row = $result->fetch_assoc(); // trae los resultados en forma de array asociativo sucesivamente hasta que no haya más con esas caracteristicas
                $_SESSION['usuario'] = $row['usr_usuario'];

                
                header("location: ../");
                } else {
                     echo("Usuario y/o contraseña no valida");                  
            }
        }
    }catch(Exception $e){
        echo$e->getMessage();
        exit;
}

?>







