<?php
session_start();
ob_start();

if (!isset($_SESSION['giohang']))
    $_SESSION['giohang'] = [];

include "model/category.php";
// include "admin/model/productAd.php";
include "model/account.php";
include "model/connectdb.php";


// $dsdm = getAll_dm();
// $sphome1 = getall_sp(0, "");
// $spdacbiet = get_product_special();
$kq = get_all_categories();

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'login':
            include "view/modules/login.php";
            break;

        case 'register':
            include "view/modules/register.php";
            break;

        case 'registered':
            if (isset($_POST['registered'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $numberphone = $_POST['numberphone'];
                $confirm_pass = $_POST['confirm_pass'];
                echo $user . ' ' . $pass . ' ' . $email;
                insert_user($username, $email, $numberphone, $user, $pass);
            }
            header('location: index.php?action=login');
            break;

        case 'logined':
            if (isset($_POST['logined']) && ($_POST['logined'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $kq = getcheckuserinfo($user, $pass);
                $role = $kq[0]['role'];
                if ($role == 1) {
                    $_SESSION['id'] = $kq[0]['id'];
                    $_SESSION['username'] = $kq[0]['username'];
                    $_SESSION['email'] = $kq[0]['email'];
                    $_SESSION['numberphone'] = $kq[0]['numberphone'];
                    $_SESSION['pass'] = $kq[0]['pass'];
                    $_SESSION['role'] = $role;
                    header('location: admin/index.php');
                } 
                elseif ($role == 0) {
                    $_SESSION['role'] = $role;
                    $_SESSION['iduser'] = $kq[0]['username'];
                    $_SESSION['username'] = $kq[0]['username'];
                    if ($_SESSION['username'] == '') {
                        header('location: index.php?action=login&erro');
                    }
                    else header('location: index.php');
                } 
            }
            break;

        case 'logout':
            unset($_SESSION['role']);
            unset($_SESSION['iduser']);
            unset($_SESSION['username']);
            header('location: login.html');
            break;

        case 'register':
            include "view/register.php";
            break;

        case 'blog':
            include "view/header.php";
            include "view/modules/blog.php";
            include "view/footer.php";
            break;

        case 'about':
            include "view/header.php";
            include "view/modules/about.php";
            include "view/footer.php";
            break;

        case 'contact':
            include "view/header.php";
            include "view/modules/contact.php";
            include "view/footer.php";
            break;

        case 'destination':
            include "view/header.php";
            include "view/modules/destination.php";
            include "view/footer.php";
            break;

        case 'shopping-cart':
            include "view/header.php";
            include "view/modules/shopping-cart.php";
            include "view/footer.php";
            break;

        case 'product':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
            }
            $dssp = getall_sp($id, "");
            include "view/product.php";
            break;

        case 'addToCart':
            include "view/addToCart.php";
            break;

        case 'deleteCart':
            include "view/deleteCart.php";
            break;

        case 'addcart':
            if ((isset($_POST['addtocart'])) && ($_POST['addtocart'])) {
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $img = $_POST['img'];
                $gia = $_POST['gia'];
                $sl = 1;
                $fg = 0;
                $i = 0;
                foreach ($_SESSION['giohang'] as $sp) {
                    if ($sp[1] === $tensp) {
                        $slnew = $sl + $sp[4];
                        $_SESSION['giohang'][4] += $slnew;
                        $fg = 1;
                        break;
                    }
                    $i++;
                }

                if ($fg == 0) {
                    $item = array($id, $tensp, $img, $gia, $sl);
                    $_SESSION['giohang'][] = $item;
                }
            }
            header('location: index.php?action=shopingCart');
            break;

        case 'cart':
            include "view/cart.php";
            break;

        case 'deletecart':
            if (isset($_SESSION['giohang']))
                unset($_SESSION['giohang']);
            header('location: index.php?action=product');
            break;

        case 'shoppingCart':
            include "view/modules/shoppingCart.php";
            break;

        default:
            include "view/modules/home.php";
            break;
    }

} else {
    include "view/header.php";
    include "view/modules/home.php";
    include "view/footer.php";
}


?>