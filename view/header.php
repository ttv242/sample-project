<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/listed/index by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2023 10:37:22 GMT -->

<head>
    <title>Sản phẩm Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="view/css/bootstrap.css">
    <link rel="stylesheet" href="view/css/animate.css">
    <link rel="stylesheet" href="view/css/owl.carousel.min.css">
    <link rel="stylesheet" href="view/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="view/fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="view/css/style.css">
    <script
        nonce="a3f6ef76-c98b-4a10-9ce9-8fc8febd30ed">(function (w, d) { !function (cO, cP, cQ, cR) { cO[cQ] = cO[cQ] || {}; cO[cQ].executed = []; cO.zaraz = { deferred: [], listeners: [] }; cO.zaraz.q = []; cO.zaraz._f = function (cS) { return function () { var cT = Array.prototype.slice.call(arguments); cO.zaraz.q.push({ m: cS, a: cT }) } }; for (const cU of ["track", "set", "debug"]) cO.zaraz[cU] = cO.zaraz._f(cU); cO.zaraz.init = () => { var cV = cP.getElementsByTagName(cR)[0], cW = cP.createElement(cR), cX = cP.getElementsByTagName("title")[0]; cX && (cO[cQ].t = cP.getElementsByTagName("title")[0].text); cO[cQ].x = Math.random(); cO[cQ].w = cO.screen.width; cO[cQ].h = cO.screen.height; cO[cQ].j = cO.innerHeight; cO[cQ].e = cO.innerWidth; cO[cQ].l = cO.location.href; cO[cQ].r = cP.referrer; cO[cQ].k = cO.screen.colorDepth; cO[cQ].n = cP.characterSet; cO[cQ].o = (new Date).getTimezoneOffset(); if (cO.dataLayer) for (const da of Object.entries(Object.entries(dataLayer).reduce(((db, dc) => ({ ...db[1], ...dc[1] }))))) zaraz.set(da[0], da[1], { scope: "page" }); cO[cQ].q = []; for (; cO.zaraz.q.length;) { const dd = cO.zaraz.q.shift(); cO[cQ].q.push(dd) } cW.defer = !0; for (const de of [localStorage, sessionStorage]) Object.keys(de || {}).filter((dg => dg.startsWith("_zaraz_"))).forEach((df => { try { cO[cQ]["z_" + df.slice(7)] = JSON.parse(de.getItem(df)) } catch { cO[cQ]["z_" + df.slice(7)] = de.getItem(df) } })); cW.referrerPolicy = "origin"; cW.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(cO[cQ]))); cV.parentNode.insertBefore(cW, cV) };["complete", "interactive"].includes(cP.readyState) ? zaraz.init() : cO.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>
</head>

<body>
    <header role="banner">
        <nav class="navbar navbar-expand-md navbar-dark bg-light">
            <div class="container">
                <a class="navbar-brand" href="home.html">SẢN PHẨM DEMO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                    <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="home.html">Trang chủ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php?action=products" id="dropdown04"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danh mục</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="index.php?action=products">Tất cả sản phẩm</a>
                                <?php
                                if (isset($kq)) {
                                    foreach ($kq as $item) {
                                        echo '<a class="dropdown-item" href="index.php?action=products" value="' . $item['id'] . '">' . $item['category_name'] . '</a>';
                                    }
                                }
                                ?>
                                <!-- <a class="dropdown-item" href="index.php?action=products">HTML - CSS</a>
                                <a class="dropdown-item" href="index.php?action=products">JAVASCRIPT</a>
                                <a class="dropdown-item" href="index.php?action=products">REACTJS</a>
                                <a class="dropdown-item" href="index.php?action=products">PHP - MYSQL</a>
                                <a class="dropdown-item" href="index.php?action=destination">Destination</a> -->
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="shoppingCart.html">Giỏ hàng</a>
                        </li>
                        <?php
                        if (isset($_SESSION['username']) && ($_SESSION['username'])) {
                            echo '
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" id="dropdown04"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài khoản của tôi</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                                        <a class="dropdown-item" href="userinfo.html" style="text-transform: capitalize;">' . $_SESSION['username'] . '</a>
                                        <a class="dropdown-item" href="logout.html">Đăng xuất</a>
                                    </div>
                                </li>';
                        } else { ?>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="login" id="dropdown04"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tài khoản</a>
                                <div class="dropdown-menu" aria-labelledby="dropdown04">
                                    <a class="dropdown-item" href="register.html">Đăng ký</a>
                                    <a class="dropdown-item" href="login.html">Đăng nhập</a>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>