
<?php
//if(isset($_POST['signup-submit'])) {
	
//	require "dbh.inc.php"; //require es como include, ambas estan en la carpeta includes

	$server = "localhost";
	$usr = "root";
	$pwd = "root";
	$bd = "bd";
try{

     $mysqli = mysqli_connect($server, $usr, $pwd,$bd);

     if(mysqli_connect_errno($mysqli)){
         echo 'Conexion Error:' , mysqli_connect_error();
         exit();
     }else{
     }

}catch(Exception $e){
    echo$e->getMessage();
}

?>