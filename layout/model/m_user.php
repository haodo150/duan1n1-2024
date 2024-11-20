<?php
    include_once "model/pdo.php";
    function user_login($Email, $Password){
        $sql = "SELECT * FROM account_user WHERE Email=? AND Password=?";
        return pdo_getOne($sql, $Email, md5($Password));
    }
?>