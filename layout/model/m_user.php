<?php
include_once 'model/pdo.php';

function user_login($Email, $PassWord){
 
    $sql="SELECT * FROM account_user WHERE Email=? AND PassWord=?";
    return pdo_getOne($sql, $Email, md5($PassWord));
    
}

?>