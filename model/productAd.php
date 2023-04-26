<?php
function insert_sanpham($iddm, $tensp, $img, $gia)
{
    $conn = connectdb();

    $sql = "INSERT INTO tbl_sanpham (iddm, tensp, img, gia)
        VALUES ('$iddm', '$tensp', '$img', '$gia')";
    // use exec() because no results are returned
    $conn->exec($sql);
}
function getAll_sanpham()
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_sanpham");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function Getonesp($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_sanpham WHERE id=" . $id);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

function Deletesp($id)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_sanpham");
    $stmt->execute();

    // sql to delete a record
    $sql = "DELETE FROM tbl_sanpham WHERE id=" . $id;

    // use exec() because no results are returned
    $conn->exec($sql);
}

function Updatesp($id, $tensp, $img, $gia, $iddm)
{
    $conn = connectdb();
    if ($img == "") {
        $sql = "UPDATE tbl_sanpham SET tensp='" . $tensp . "', gia='" . $gia . "', iddm='" . $iddm . "' WHERE id=" . $id;
    } else {
        $sql = "UPDATE tbl_sanpham SET tensp='" . $tensp . "', gia='" . $gia . "', iddm='" . $iddm . "', img='" . $img . "' WHERE id=" . $id;
    }

    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();
}
function getall_sp($iddm = 0, $kyw = "")
{
    $conn = connectdb();
    $sql = "SELECT * FROM tbl_sanpham WHERE 1";
    if ($iddm > 0) {$sql.=" AND iddm=".$iddm;}
    if ($kyw != "") {$sql.=" AND tensp like '%".$kyw."%'";}
    $sql.=" order by id DESC";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

// function getall_sp() {
//     $conn = connectdb();
//     $sql ="SELECT * FROM tbl_sanpham order by id DESC";
//     $stmt = $conn->prepare($sql);
//     $stmt->execute();

//     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//     $kq = $stmt->fetchAll();
//     return $kq;
// }

function showpro($ds)
{
    foreach ($ds as $sp) {
        if ($sp['gia'] == 0) {
            $gia = "Đang cập nhật";
        } else {
            if ($sp['gia'] > 0) {
                $gia = '<del>$' . $sp['gia'] . '</del>$' . $sp['gia'];
            } else {
                $gia = '$' . $sp['gia'];
            }
        }
        echo '
            <form action="index.php?action=addcart" method="POST">
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">

                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img src="./uploads/'.$sp['img'].'" alt="IMG-PRODUCT">
                            <input type="submit" name="addtocart" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04" value="ADD TO CART"></input>
                        </div>
                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="product-detail.html" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                    '.$sp['tensp'].'
                                </a>
                                <span class="stext-105 cl3">
                                    '.$gia.'
                                </span>
                            </div>
                            <div class="block2-txt-child2 flex-r p-t-3">
                                <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                    <img class="icon-heart1 dis-block trans-04" src="./view/images/icons/icon-heart-01.png"
                                        alt="ICON">
                                    <img class="icon-heart2 dis-block trans-04 ab-t-l" src="./view/images/icons/icon-heart-02.png"
                                        alt="ICON">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="'.$sp['id'].'"></input>
                <input type="hidden" name="tensp" value="'.$sp['tensp'].'"></input>
                <input type="hidden" name="img" value="'.$sp['img'].'"></input>
                <input type="hidden" name="gia" value="'.$sp['gia'].'"></input>

            </form>';
    }
}
?>