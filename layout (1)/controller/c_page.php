<?php
    if ($_GET['act']){
        switch ($_GET['act']) {
            case 'home':
                // Xử lý

                // Hiển thị
                include_once "view/header.php";
                include_once "view/home.php";
                include_once "view/footer.php";
                break;
            case 'products':
                // Xử lý

                // Hiển thị
                include_once "view/header.php";
                include_once "view/products.php";
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