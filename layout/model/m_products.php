<?php
    include_once "model/pdo.php";

    function loadSanpham(){
        $sql = 'SELECT * FROM products ORDER BY id_product DESC LIMIT 12';
        return pdo_getAll($sql);
    }
?>