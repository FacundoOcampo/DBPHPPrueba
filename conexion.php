<?php

    $link = 'mysql:host=localhost;dbname=db_colores';

    try{

        $mdb = new PDO($link,'root');
        

    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }