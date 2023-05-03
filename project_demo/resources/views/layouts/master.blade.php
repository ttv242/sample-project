<!doctype html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/listed/index by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2023 10:37:22 GMT -->

<head>
    <title>Sản phẩm Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script nonce="a3f6ef76-c98b-4a10-9ce9-8fc8febd30ed">
        (function(w, d) {
            ! function(cO, cP, cQ, cR) {
                cO[cQ] = cO[cQ] || {};
                cO[cQ].executed = [];
                cO.zaraz = {
                    deferred: [],
                    listeners: []
                };
                cO.zaraz.q = [];
                cO.zaraz._f = function(cS) {
                    return function() {
                        var cT = Array.prototype.slice.call(arguments);
                        cO.zaraz.q.push({
                            m: cS,
                            a: cT
                        })
                    }
                };
                for (const cU of ["track", "set", "debug"]) cO.zaraz[cU] = cO.zaraz._f(cU);
                cO.zaraz.init = () => {
                    var cV = cP.getElementsByTagName(cR)[0],
                        cW = cP.createElement(cR),
                        cX = cP.getElementsByTagName("title")[0];
                    cX && (cO[cQ].t = cP.getElementsByTagName("title")[0].text);
                    cO[cQ].x = Math.random();
                    cO[cQ].w = cO.screen.width;
                    cO[cQ].h = cO.screen.height;
                    cO[cQ].j = cO.innerHeight;
                    cO[cQ].e = cO.innerWidth;
                    cO[cQ].l = cO.location.href;
                    cO[cQ].r = cP.referrer;
                    cO[cQ].k = cO.screen.colorDepth;
                    cO[cQ].n = cP.characterSet;
                    cO[cQ].o = (new Date).getTimezoneOffset();
                    if (cO.dataLayer)
                        for (const da of Object.entries(Object.entries(dataLayer).reduce(((db, dc) => ({
                                ...db[1],
                                ...dc[1]
                            }))))) zaraz.set(da[0], da[1], {
                            scope: "page"
                        });
                    cO[cQ].q = [];
                    for (; cO.zaraz.q.length;) {
                        const dd = cO.zaraz.q.shift();
                        cO[cQ].q.push(dd)
                    }
                    cW.defer = !0;
                    for (const de of [localStorage, sessionStorage]) Object.keys(de || {}).filter((dg => dg
                        .startsWith("_zaraz_"))).forEach((df => {
                        try {
                            cO[cQ]["z_" + df.slice(7)] = JSON.parse(de.getItem(df))
                        } catch {
                            cO[cQ]["z_" + df.slice(7)] = de.getItem(df)
                        }
                    }));
                    cW.referrerPolicy = "origin";
                    cW.src = "../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(cO[cQ])));
                    cV.parentNode.insertBefore(cW, cV)
                };
                ["complete", "interactive"].includes(cP.readyState) ? zaraz.init() : cO.addEventListener(
                    "DOMContentLoaded", zaraz.init)
            }(w, d, "zarazData", "script");
        })(window, document);
    </script>
</head>

<body>
    <header role="banner">
        <nav class="navbar navbar-expand-md navbar-dark bg-light">
            <div class="container">
                <a class="navbar-brand" href="{{route('home')}}">SẢN PHẨM DEMO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                    aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                    <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{route('home')}}">Trang chủ</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php?action=products" id="dropdown04"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Danh mục</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="/catelory">Tất cả sản phẩm</a>
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
                            <a class="nav-link" href="{{route('blog')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Liên hệ</a>
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
                            <a class="nav-link dropdown-toggle" href="login" id="dropdown04" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">Tài khoản</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown04">
                                <a class="dropdown-item" href="{{route('register')}}">Đăng ký</a>
                                <a class="dropdown-item" href="{{route('login')}}">Đăng nhập</a>
                            </div>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>




    @yield('content')










    <footer class="site-footer">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-4">
                    <h3 class="mb-4">About</h3>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, quod!</p>
                    <ul class="list-unstyled ">
                        <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-location"></span></span><span
                                class="">34
                                Street Name, City Name Here, United States</span></li>
                        <li class="d-flex"><span class="mr-3"><span class="icon ion-ios-telephone"></span></span><span
                                class="">+1
                                242 4942 290</span></li>
                        <li class="d-flex"><span class="mr-3"><span class="icon ion-email"></span></span><span
                                class=""><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection"
                                    class="__cf_email__"
                                    data-cfemail="345d5a525b744d5b4146505b59555d5a1a575b59">[email&#160;protected]</a></span>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h3 class="mb-4">Links</h3>
                    <ul class="list-unstyled ">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Destination</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3 class="mb-4">Latest Blog</h3>
                    <ul class="list-unstyled blog-entry-footer">
                        <li><a href="#">
                                <span class="post-meta">March 20, 2018</span>
                                <h3>7 Best Destination in The World</h3>
                            </a>
                        </li>
                        <li><a href="#">
                                <span class="post-meta">March 20, 2018</span>
                                <h3>4 Hour Work Week And The Rest Is Travel</h3>
                            </a>
                        </li>
                        <li><a href="#">
                                <span class="post-meta">March 20, 2018</span>
                                <h3>Why You Should Travel Today</h3>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Connect</h3>
                    <p>
                        <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                        <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                        <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">

                    Copyright &copy;
                    <script data-cfasync="false" src="{{ asset('js/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script>
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made
                    with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com/"
                        target="_blank">Colorlib</a>

                </div>
            </div>
        </div>
    </footer>


    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#f4b214" />
        </svg></div>
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
    <script>
        // This example displays an address form, using the autocomplete feature
        // of the Google Places API to help users fill in the information.

        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

        var placeSearch, autocomplete;
        var componentForm = {
            street_number: 'short_name',
            route: 'long_name',
            locality: 'long_name',
            administrative_area_level_1: 'short_name',
            country: 'long_name',
            postal_code: 'short_name'
        };

        function initAutocomplete() {
            // Create the autocomplete object, restricting the search to geographical
            // location types.
            autocomplete = new google.maps.places.Autocomplete(
                /** @type {!HTMLInputElement} */
                (document.getElementById('autocomplete')), {
                    types: ['geocode']
                });

            // When the user selects an address from the dropdown, populate the address
            // fields in the form.
            autocomplete.addListener('place_changed', fillInAddress);
        }

        function fillInAddress() {
            // Get the place details from the autocomplete object.
            var place = autocomplete.getPlace();

            for (var component in componentForm) {
                document.getElementById(component).value = '';
                document.getElementById(component).disabled = false;
            }

            // Get each component of the address from the place details
            // and fill the corresponding field on the form.
            for (var i = 0; i < place.address_components.length; i++) {
                var addressType = place.address_components[i].types[0];
                if (componentForm[addressType]) {
                    var val = place.address_components[i][componentForm[addressType]];
                    document.getElementById(addressType).value = val;
                }
            }
        }

        // Bias the autocomplete object to the user's geographical location,
        // as supplied by the browser's 'navigator.geolocation' object.
        function geolocate() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var geolocation = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };
                    var circle = new google.maps.Circle({
                        center: geolocation,
                        radius: position.coords.accuracy
                    });
                    autocomplete.setBounds(circle.getBounds());
                });
            }
        }
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;libraries=places&amp;callback=initAutocomplete"
        async defer></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v2b4487d741ca48dcbadcaf954e159fc61680799950996"
        integrity="sha512-D/jdE0CypeVxFadTejKGTzmwyV10c1pxZk/AqjJuZbaJwGMyNHY3q/mTPWqMUnFACfCTunhZUVcd4cV78dK1pQ=="
        data-cf-beacon='{"rayId":"7b9408633cd16c2a","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
        crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/listed/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2023 10:37:32 GMT -->

</html>
