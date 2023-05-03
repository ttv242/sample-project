<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from colorlib.com/etc/lf/Login_v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2023 10:40:04 GMT -->

<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="{{asset('images/login/icons/favicon.ico')}}"/>

	<link rel="stylesheet" type="text/css" href="{{asset('vendor/login/bootstrap/css/bootstrap.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('fonts/login/font-awesome-4.7.0/css/font-awesome.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('fonts/login/iconic/css/material-design-iconic-font.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('vendor/login/animate/animate.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('vendor/login/css-hamburgers/hamburgers.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('vendor/login/animsition/css/animsition.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('vendor/login/select2/select2.min.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('vendor/login/daterangepicker/daterangepicker.css')}}">

	<link rel="stylesheet" type="text/css" href="{{asset('css/login/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/login/main.css')}}">

	<meta name="robots" content="noindex, follow">
	<script
		nonce="c1a1f7c7-7758-4578-a641-0224bde5698e">(function (w, d) { !function (cO, cP, cQ, cR) { cO[cQ] = cO[cQ] || {}; cO[cQ].executed = []; cO.zaraz = { deferred: [], listeners: [] }; cO.zaraz.q = []; cO.zaraz._f = function (cS) { return function () { var cT = Array.prototype.slice.call(arguments); cO.zaraz.q.push({ m: cS, a: cT }) } }; for (const cU of ["track", "set", "debug"]) cO.zaraz[cU] = cO.zaraz._f(cU); cO.zaraz.init = () => { var cV = cP.getElementsByTagName(cR)[0], cW = cP.createElement(cR), cX = cP.getElementsByTagName("title")[0]; cX && (cO[cQ].t = cP.getElementsByTagName("title")[0].text); cO[cQ].x = Math.random(); cO[cQ].w = cO.screen.width; cO[cQ].h = cO.screen.height; cO[cQ].j = cO.innerHeight; cO[cQ].e = cO.innerWidth; cO[cQ].l = cO.location.href; cO[cQ].r = cP.referrer; cO[cQ].k = cO.screen.colorDepth; cO[cQ].n = cP.characterSet; cO[cQ].o = (new Date).getTimezoneOffset(); if (cO.dataLayer) for (const da of Object.entries(Object.entries(dataLayer).reduce(((db, dc) => ({ ...db[1], ...dc[1] }))))) zaraz.set(da[0], da[1], { scope: "page" }); cO[cQ].q = []; for (; cO.zaraz.q.length;) { const dd = cO.zaraz.q.shift(); cO[cQ].q.push(dd) } cW.defer = !0; for (const de of [localStorage, sessionStorage]) Object.keys(de || {}).filter((dg => dg.startsWith("_zaraz_"))).forEach((df => { try { cO[cQ]["z_" + df.slice(7)] = JSON.parse(de.getItem(df)) } catch { cO[cQ]["z_" + df.slice(7)] = de.getItem(df) } })); cW.referrerPolicy = "origin"; cW.src = "../../../cdn-cgi/zaraz/sd0d9.js?z=" + btoa(encodeURIComponent(JSON.stringify(cO[cQ]))); cV.parentNode.insertBefore(cW, cV) };["complete", "interactive"].includes(cP.readyState) ? zaraz.init() : cO.addEventListener("DOMContentLoaded", zaraz.init) }(w, d, "zarazData", "script"); })(window, document);</script>
</head>

<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('view/images/login/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="index.php?action=logined" method="POST">
					<span class="login100-form-logo">
						<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
							class="bi bi-shield-lock-fill" viewBox="0 0 16 16">
							<path fill-rule="evenodd"
								d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.777 11.777 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7.159 7.159 0 0 0 1.048-.625 11.775 11.775 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.541 1.541 0 0 0-1.044-1.263 62.467 62.467 0 0 0-2.887-.87C9.843.266 8.69 0 8 0zm0 5a1.5 1.5 0 0 1 .5 2.915l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99A1.5 1.5 0 0 1 8 5z" />
						</svg>
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						ĐĂNG NHẬP
					</span>
					<?php
						if (isset($_GET['erro'])) {
					?>
						<div class="wrap-input100 validate-input" data-validate="Enter username">
							<input class="input100" type="text" name="user" placeholder="Tài khoản hoặc mật khẩu không tồn tại">
							<span class="focus-input100" data-placeholder="&#xf207;"></span>
						</div>
						<div class="wrap-input100 validate-input" data-validate="Enter password">
							<input class="input100" type="password" name="pass" placeholder="Xin mời đăng nhập lại">
							<span class="focus-input100" data-placeholder="&#xf191;"></span>
						</div>
					<?php
					} else {
					?>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="user" placeholder="Tài khoản">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Mật khẩu">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<?php
					}
					?>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Nhớ mật khẩu
						</label>
					</div>
					<div class="container-login100-form-btn">
						<input type='submit' class="login100-form-btn" name='logined' value='Đăng nhập'>
					</div>
					<div class="text-center p-t-90">
						<a class="txt1" href="{{asset('#')}}">
							Quên mật khẩu? |
						</a>
						<a href='{{route('register')}}' class="txt1">
							Đăng ký |
						</a>
						<a href='{{route('home')}}' class="txt1">
							Về trang chủ
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>

	<script src="{{asset('vendor/login/jquery/jquery-3.2.1.min.js')}}"></script>

	<script src="{{asset('vendor/login/animsition/js/animsition.min.js')}}"></script>

	<script src="{{asset('vendor/login/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('vendor/login/bootstrap/js/bootstrap.min.js')}}"></script>

	<script src="{{asset('vendor/login/select2/select2.min.js')}}"></script>

	<script src="{{asset('vendor/login/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('vendor/login/daterangepicker/daterangepicker.js')}}"></script>

	<script src="{{asset('vendor/login/countdowntime/countdowntime.js')}}"></script>

	<script src="{{asset('js/login/main.js')}}"></script>

	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
	<script defer
		src="https://static.cloudflareinsights.com/beacon.min.js/v2b4487d741ca48dcbadcaf954e159fc61680799950996"
		integrity="sha512-D/jdE0CypeVxFadTejKGTzmwyV10c1pxZk/AqjJuZbaJwGMyNHY3q/mTPWqMUnFACfCTunhZUVcd4cV78dK1pQ=="
		data-cf-beacon='{"rayId":"7b940c63da3b4ca7","version":"2023.3.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}'
		crossorigin="anonymous"></script>
</body>

<!-- Mirrored from colorlib.com/etc/lf/Login_v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Apr 2023 10:40:09 GMT -->

</html>
