<?php
    if (isset($_GET['mod'])) {
        # code...
        switch ($_GET['mod']) {
            case 'page':
                include_once "controller/c_page.php";
                break;
            
            default:
                # code...
                break;
        }
    } else {
        header("Location: ?mod=page");
    }
?>