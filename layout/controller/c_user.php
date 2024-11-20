<?php
    
    if ($_GET['act']){
        switch ($_GET['act']) {
            case 'account':
                // Xử lý
                
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
                $PassWord = $_POST['PassWord'];
                include_once "./model/m_user.php";
                $user = user_login($Email, $PassWord);

                if(isset($user['id_user'])){
                    echo "Đăng nhập thành công";
                    unset($user['PassWord']);
                    $_SESSION['user'] = $user;
                    header( "Location: ?mod=page&act=home");

                }else{
                    $_SESSION['alert'] = "Sai Email hoặc PassWord chưa đúng!";

                    header( "Location: ?mod=user&act=login");
                }

             
                break;
                

                // case 'register':
                    
    
                //     // Hiển thị
                //     include_once "view/header.php";
                //     include_once "view/login-register.php";
                //     include_once "view/footer.php";
                //     break;
            default:
                # code...
                break;
        }
    } else {
        header("Location: ?mod=page&act=home");
    }

?>