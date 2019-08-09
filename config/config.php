<?php

    define('SITE_FOLDER', 'proyectofullstack');

    define('ROOT_URL', strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https'?'https':'http'."://".$_SERVER['HTTP_HOST'] . "/" . SITE_FOLDER);

    define('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'] . "/" . SITE_FOLDER) ;
    
    define("PATH_VIEWS", SITE_ROOT . "/vistas");

    define("PATH_HELPERS", SITE_ROOT . "/helpers");

    define("PATH_COMMON", SITE_ROOT . "/common");
    
    define("PATH_CSS", ROOT_URL . "/css");

    define("PATH_IMAGENES", ROOT_URL . "/img");

    define("PATH_FONTS", ROOT_URL . "/fonts");

    


