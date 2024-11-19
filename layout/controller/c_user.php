<?php
    
    if ($_GET['act']){
        switch ($_GET['act']) {
            case 'account':
                // Xử lý
                include_once "model/user.php";
                // Hiển thị
                include_once "view/header.php";
                include_once "view/account.php";
                include_once "view/footer.php";
                break;
            case 'login':
                // Xử lý

                // Hiển thị
                include_once "view/header.php";
                include_once "view/login-register.php";
                include_once "view/footer.php";
                break;
                case 'register':
                    // Xử lý
    
                    // Hiển thị
                    include_once "view/header.php";
                    include_once "view/login-register.php";
                    include_once "view/footer.php";
                    break;
            default:
                # code...
                break;
        }
    } else {
        header("Location: ?mod=page&act=home");
    }

?>