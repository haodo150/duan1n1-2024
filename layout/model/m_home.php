<?php
    include_once "model/pdo.php";

    function home_category(){
        // Lấy toàn bô danh mục trong csdl
        $sql = 'SELECT * FROM categories';
        return pdo_getAll($sql);
    }

    function home_products_featured(){
        // Lấy 8 sản phẩm trong csdl
        $sql = 'SELECT * FROM products ORDER BY id_product DESC LIMIT 8';
        return pdo_getAll($sql);
    }

    function home_products_populer(){
        // Lấy 8 sản phẩm trong csdl
        $sql = 'SELECT * FROM products ORDER BY id_product DESC LIMIT 8';
        return pdo_getAll($sql);
    }
?>