<?php

    //renderizar template home

    require 'src/render.php';

    $title="Activitat 1 ";

    $alumnes=['Perico Palotes', 'Aitor Tillas Frias', 'Aitor Mentas Fuertes'];

    echo render('home',['title'=>$title, 'alumnes'=>$alumnes]);