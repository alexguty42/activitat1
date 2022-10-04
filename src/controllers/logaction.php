<?php
require 'src/db.php';
    //agafar $_REQUEST['email'], i ['password']
    //comprova si eisteixen a la base de dades
    //tenim dos possibilitats
    //1. Existeix ==> dashboard i obrim sessió de usuari
    //2. No xisteix ==> tornem al home o ens quedem al login
  
    $db=connectMysql($dsn,$dbuser,$dbpass);
    var_dump($db);
    $db=null;
    var_dump($db);
    die();
    if(!empty($_POST['email'])&&!empty($_POST['password'])){
        if(isset($_POST['email'])&&isset($_POST['password'])){
            $email=$_REQUEST['email'];
            $password=$REQUEST['password'];
            if(auth($db,$dbuser,$email,$password)){
                //desem sessió
                //redirigir a dashboard
            }
        }
    }