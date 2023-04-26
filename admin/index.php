<?php
session_start();
ob_start();
if (isset($_SESSION['role']) && ($_SESSION['role'] == 1)) {
    include "../model/connectdb.php";
    include "../model/category.php";
    include "../model/productAd.php";
    include "../model/account.php";
    include "view/header.php";

    // Connectdb();

    if (isset($_GET['action'])) {
        $action = $_GET['action'];

        switch ($action) {
            // case 'Login':
            //     include "View/Login.php";
            //     break;


            case 'logout':
                unset($_SESSION['role']);
                unset($_SESSION['iduser']);
                unset($_SESSION['username']);
                header('location: ../index.php');
                break;

            case 'register':
                include "view/register.php";
                break;

            case 'account_management':
                $kq = get_all_accounts();
                include "view/modules/account_management.php";
                break;

                case 'account_information':
                    $id = $_SESSION['id'];
                    $kqone = get_account($id);
                    $kq = get_all_accounts();
                include "view/modules/account_information.php";
                break;

                case 'update_information':
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $kqone = get_account($id);
                        header('location: index.php?action=account_information&id='.$id.'');
                    }
                    if (isset($POST['id'])) {
                        $id = $POST['id'];
                        $username = $POST['username'];
                        $email = $POST['email'];
                        $numberphone = $POST['numberphone'];
                        $pass = $POST['pass'];
                        // $role = $_POST['category_description'];
                        update_information($id, $username, $email, $numberphone, $pass);
                        header('location: index.php?action=account_information');
                    }
                    break;
                    
                case 'update_account':
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $kqone = get_account($id);
                        $kq = get_all_accounts();
                        header('location: index.php?action=account_management&id=' . $item['id'] . '');
                    }
                    if (isset($_POST['id'])) {
                        $id = $_POST['id'];
                        $user = $_POST['user'];
                        if (isset($_POST['optionsRadios'])) {
                            $radio_value = $_POST['optionsRadios'];
                            echo $radio_value;
                            if ($radio_value == 'up') $role = 1;
                            elseif ($radio_value == 'down') $role = 0;   
                        }
                        // $role = $_POST['category_description'];
                        update_account($id, $user, $role);
                        $kq = get_all_accounts();
                        header('location: index.php?action=account_management');
                    }
                    break;

            case 'catalog_management':
                $kq = get_all_categories();
                include "view/modules/catalog_management.php";
                break;

            case 'add_category':
                if (isset($_POST['add_category']) && ($_POST['add_category'])) {
                    $category_name = $_POST['category_name'];
                    $category_description = $_POST['category_description'];
                    add_category($category_name, $category_description);
                }
                $kq = get_all_categories();
                header('location: index.php?action=catalog_management');
                break;

            case 'update_category':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $kqone = get_catalog($id);
                    $kq = get_all_categories();
                    header('location: index.php?action=catalog_management&id=' . $item['id'] . '');
                }
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $category_name = $_POST['category_name'];
                    $category_description = $_POST['category_description'];
                    update_category($id, $category_name, $category_description);
                    $kq = get_all_categories();
                    header('location: index.php?action=catalog_management');
                }
                break;

            case 'delete_category':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    delete_category($id);
                }
                $kq = get_all_categories();
                header('location: index.php?action=catalog_management');
                break;
            
                case 'delete_account':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    delete_account($id);
                }
                $kq = get_all_accounts();
                header('location: index.php?action=account_management');
                break;

            case 'option_category':
                if (!isset($_SESSION['option_category']))
                    $_SESSION['option_category'] = [];

                break;

            // case 'product_management':
            //     include "view/modules/product_management.php";
            //     break;

            case 'buttons':
                include "view/modules/buttons.php";
                break;

            case 'dropdowns':
                include "view/modules/dropdowns.php";
                break;

            case 'typography':
                include "view/modules/typography.php";
                break;

            case 'mdi':
                include "view/modules/mdi.php";
                break;

            case 'basic_elements':
                include "view/modules/basic_elements.php";
                break;

            case 'chartjs':
                include "view/modules/chartjs.php";
                break;

            case 'basic-table':
                include "view/modules/basic-table.php";
                break;

            case 'category':
                $kq = get_all_categories();
                include "view/category.php";
                break;

            case 'deletesp':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    Deletesp($id);
                }
                $kq = getAll_sanpham();
                include "view/productAd.php";
                break;

            case 'deletedm':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    Deletedm($id);
                }
                $kq = get_all_categories();
                include "view/category.php";
                break;

            case 'updatedmform':
                if (isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $kqone = get_catalog($id);
                    $kq = get_all_categories();
                    include "view/updatedmform.php";
                }
                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    Updatedm($id, $name);
                    $kq = get_all_categories();
                    include "view/category.php";
                }
                break;

            case 'sanpham_update':
                $dsdm = get_all_categories();
                if ((isset($_POST['capnhat'])) && ($_POST['capnhat'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $gia = $_POST['gia'];
                    $id = $_POST['id'];
                    if ($_FILES['img']['name'] != "") {
                        $target_dir = "../uploads/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        $img = $target_file;
                        $uploadOk = 1;
                        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                        if (
                            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif"
                        ) {
                            // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                            $uploadOk = 0;
                        }
                        if ($uploadOk == 1) {
                            move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                            // if($_FILES['img']['name']!="") $img = $_FILES['img']['name']; else $img = "";
                        }
                    } else {
                        $img = "";
                    }
                    Updatesp($id, $tensp, $img, $gia, $iddm);
                }
                $kq = getAll_sanpham();
                include "view/productAd.php";
                break;

            case 'updatespform':
                $dsdm = get_all_categories();
                if ((isset($_GET['id'])) && ($_GET['id'] > 0)) {
                    var_dump(Getonesp($_GET['id']));
                    $spct = Getonesp($_GET['id']);
                    var_dump($spct[0]['tensp']);
                }
                $kq = getAll_sanpham();
                include "view/updatespform.php";
                break;

            case 'adddm':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $name = $_POST['name'];
                    Themdm($name);
                }
                $kq = get_all_categories();
                include "view/category.php";
                break;

            case 'productAd':
                $dsdm = get_all_categories();
                $kq = getAll_sanpham();
                include "view/productAd.php";
                break;

            case 'productAdd':
                if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                    $iddm = $_POST['iddm'];
                    $tensp = $_POST['tensp'];
                    $gia = $_POST['gia'];

                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    $img = $target_file;
                    $uploadOk = 1;
                    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    if (
                        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                        && $imageFileType != "gif"
                    ) {
                        // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                        $uploadOk = 0;
                    }
                    if ($uploadOk == 1) {
                        move_uploaded_file($_FILES["img"]["tmp_name"], $target_file);
                        // if($_FILES['img']['name']!="") $img = $_FILES['img']['name']; else $img = "";
                        insert_sanpham($iddm, $tensp, $img, $gia);
                    }
                }
                $dsdm = get_all_categories();
                $kq = getAll_sanpham();
                include "view/productAd.php";
                break;

            case 'addToCart':
                include "view/addToCart.php";
                break;

            case 'deleteCart':
                include "view/deleteCart.php";
                break;

            default:
                include "view/modules/home.php";
                break;
        }

    } else {
        include "view/modules/home.php";
    }

    include "view/footer.php";


} else {
    header('location: ../index.php?action=login');
}
?>