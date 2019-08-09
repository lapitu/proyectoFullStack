<?php
    session_start();

    include('config/config.php');

    $modulo = "index";

    if ( isset($_REQUEST["m"]) )
    {
        switch( $_REQUEST["m"] ){

            case "busqueda":
                $modulo = "busqueda";
                break;

            case "cursos":
                $modulo = "cursos";
                break;

            case "form_inscripcion":
                $modulo = "form_inscripcion";
                break;

            case "nosotros":
                $modulo = "nosotros";
                break;
            
            case "porqueestudiarit":
                $modulo = "porqueestudiarit";
                break;

            case "logout":
                $modulo = "logout";
                break;

            case "login":
                $modulo = "login";
                break;

            case "index":
                $modulo = "index";
                break;    
                    
            case "default":
                echo "error404";

            case "form_inscripcion":
                $modulo = "form_inscripcion";    
        }
    }

    include('vistas/' . $modulo . '/index.php'); 

?>