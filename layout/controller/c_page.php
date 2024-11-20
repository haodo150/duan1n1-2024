<?php
    if ($_GET['act']){
        switch ($_GET['act']) {
            case 'home':
                // Xử lý
                include_once "model/m_home.php";
                $homeCategories = home_category();
                $homeProductsFeatured = home_products_featured();
                $homeProductsPopuler = home_products_populer();
                // Hiển thị
                include_once "view/header.php";
                include_once "view/home.php";
                include_once "view/footer.php";
                break;
                case 'products':
                    // Xử lý
                    include_once "model/m_products.php";
                    $loadSanpham = loadSanpham();
                    // Hiển thị
                    include_once "view/header.php";
                    include_once "view/products.php";
                    include_once "view/footer.php";
                    break;
            case 'compare':
                // Xử lý

                // Hiển thị
                include_once "view/header.php";
                include_once "view/compare.php";
                include_once "view/footer.php";
                break;
            case 'cart':
                // Xử lý

                // Hiển thị
                include_once "view/header.php";
                include_once "view/cart.php";
                include_once "view/footer.php";
                break;
            case 'wishlist':
                // Xử lý

                // Hiển thị
                include_once "view/header.php";
                include_once "view/wishlist.php";
                include_once "view/footer.php";
                break;
            case 'detail':
                // Xử lý

                // Hiển thị
                include_once "view/header.php";
                include_once "view/detail.php";
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