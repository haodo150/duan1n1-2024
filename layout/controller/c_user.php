<?php
    
    if ($_GET['act']){
        switch ($_GET['act']) {
            case 'account':
                // Xử lý
                include_once "model/m_user.php";
                // Hiển thị
                include_once "view/header.php";
                include_once "view/account.php";
                include_once "view/footer.php";
                break;
            case 'login':
                // Hiển thị
                include_once "view/header.php";
                include_once "view/login-register.php";
                include_once "view/footer.php";
                break;
            case 'post-login':
                // Xử lý
                $Email = $_POST['Email'];
                $Password = $_POST['Password'];
                include_once "model/m_user.php";
                $user = user_login($Email, $Password);

                if(isset($user['id_user'])){
                    echo "Login Success!";
                    unset($user['password']);
                    $_SESSION['user'] = $user;
                    header("Location: ?mod=page&act=home");
                } else {
                    $_SESSION['alert'] = "Wrong email or password!";
                    header("Location: ?mod=user&act=login");
                }
                break;
            case 'logout':
                unset($_SESSION['user']);
                header("Location: ?mod=page&act=home");
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