<?php
    session_start();
    require 'config.php';
    require 'src/router.php';
    require 'src/routes.php';

    //configuraciĆ³ entorn
    
    //enrutament
    $controlador=getRouter($routes);

    require 'src/controllers/'.$controlador.'.php';
    //crida el controlador