<?php
    $sql_get = $mdb->prepare('SELECT * from tbl_colores');
    $sql_get->execute();

    $db = $sql_get->fetchAll();

    if($_POST){
        $new_color = $_POST['nombre'];
        $new_descricpcion = $_POST['descripcion'];

        $str_add = 'INSERT INTO tbl_colores (nombre,descripcion) VALUES (?,?)';

        $sql_add = $mdb ->prepare($str_add);
        $sql_add->execute(array($new_color,$new_descricpcion));
        
        header("location:index.php");
    }