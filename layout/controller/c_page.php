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
            case 'checkout':
                // Hiển thị
                include_once "view/header.php";
                include_once "view/checkout.php";
                include_once "view/footer.php";
                break;
            case 'post-checkout':
                // Xử lý
                include_once "model/m_order.php";
                $id_user = $_SESSION['user']['id_user'];
                $id_product = $_GET['id_product'];
                $name_product = $_SESSION['name_order'];
                $datetime_product = $_SESSION['datetime_order'];
                $id_order = order_add($id_user, $id_product, $name_order, $datetime_order);
                foreach($_SESSION['cart'] as $product){
                    order_addDetail($id_order, $products['id_product'], $products['soluong']);
                }
                unset($_SESSION['cart']);
                header("Location: ?mod=page&act=cartSuccess");
                break;
            default:
                # code...
                break;
        }
    } else {
        header("Location: ?mod=page&act=home");
    }
?>