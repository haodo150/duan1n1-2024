<?php
    include_once "model/pdo.php";

    function order_add($id_user, $id_product, $name_order, $datetime_order){
        $sql = "INSERT INTO order(`id_user`, `id_product`, `name_order`, `datetime_order`) VALUES(?,?,?,?)";
        return pdo_insert($sql, $id_user, $id_product, $name_order, $datetime_order);
    }

    function order_addDetail($id_order, $id_product){
        $sql = "INSERT INTO order_details(`id_order`, `id_product`) VALUES (?,?)";
        return pdo_execute($sql, $id_order, $id_product);
    }
?>