<?php
$text = getCurURL();
$check_url = (explode('/', $text));
$url_name = strtoupper($check_url['3']);
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<title><?php if ($url_name == "LOGIN") { ?>Đăng nhập tài khoản<?php } elseif ($url_name == "REGISTER") { ?>Đăng kí tài khoản <?php } elseif ($url_name == "FORGOT-PASSWORD") { ?>Quên Mật Khẩu <?php } elseif ($url_name == "CHANGE-PASSWORD") { ?>Đổi Mật Khẩu<?php } ?></title>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta name="MobileOptimized" content="320">
	<meta http-equiv="content-language" content="vi" />
	<meta name="copyright" content="<?= $_SERVER['SERVER_NAME'] ?>" />
	<meta name="author" content="<?= $_SERVER['SERVER_NAME'] ?>" />
	<meta name="keyword" content="<?= $NTD->site('tu_khoa'); ?>" />
	<meta name="robots" content="index, follow" />
	<meta name="revisit-after" content="1 days" />
	<meta http-equiv="content-language" content="vi" />
	<meta property="og:url" content="https://<?= $_SERVER['SERVER_NAME'] ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:domain" content="<?= $_SERVER['SERVER_NAME'] ?>" />
	<meta property="og:title" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?= $NTD->site('ten_website'); ?>" />
	<meta property="og:description" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?= $NTD->site('ten_website'); ?>" />
	<meta property="og:image" content="<?= BASE_URL('assets/img/home-banner.jpg'); ?>" />
	<meta property="fb:app_id" content="" />
	<meta name="twitter:title" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?= $NTD->site('ten_website'); ?>">
	<meta name="twitter:description" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?= $NTD->site('ten_website'); ?>">
	<meta name="csrf-token" content="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">
	<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="b9e3e84309a92aaf852234bf-|49" defer=""></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<style>
		.login101-form-btn {
			display: -webkit-box;
			display: -webkit-flex;
			display: -moz-box;
			display: -ms-flexbox;
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 0 20px;
			min-width: 160px;
			height: 40px;
			background-color: #5ca4f1;
			border-radius: 25px;
			font-size: 16px;
			color: #fff;
			line-height: 1.2;
			-webkit-transition: all 0.4s;
			-o-transition: all 0.4s;
			-moz-transition: all 0.4s;
			transition: all 0.4s;
		}
	</style>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	<link rel="icon" type="image/png" href="<?= $NTD->site('favicon'); ?>" />

	<link rel="stylesheet" type="text/css" href="/assets/themes/login-fonend-vendor/bootstrap/css/bootstrap.min.css?<?= rand(1, 99999999); ?>">

	<link rel="stylesheet" type="text/css" href="/assets/themes/login-fonend-fonts/font-awesome-4.7.0/css/font-awesome.min.css?<?= rand(1, 99999999); ?>">

	<link rel="stylesheet" type="text/css" href="/assets/themes/login-fonend-fonts/Linearicons-Free-v1.0.0/icon-font.min.css?<?= rand(1, 99999999); ?>">

	<link rel="stylesheet" type="text/css" href="/assets/themes/login-fonend-vendor/animate/animate.css?<?= rand(1, 99999999); ?>">

	<link rel="stylesheet" type="text/css" href="/assets/themes/login-fonend-vendor/css-hamburgers/hamburgers.min.css?<?= rand(1, 99999999); ?>">

	<link rel="stylesheet" type="text/css" href="/assets/themes/login-fonend-vendor/animsition/css/animsition.min.css?<?= rand(1, 99999999); ?>">

	<link rel="stylesheet" type="text/css" href="/assets/themes/login-fonend-vendor/select2/select2.min.css?<?= rand(1, 99999999); ?>">

	<link rel="stylesheet" type="text/css" href="/assets/themes/login-fonend-vendor/daterangepicker/daterangepicker.css?<?= rand(1, 99999999); ?>">

	<link rel="stylesheet" type="text/css" href="/assets/themes/login-fonend-css/util.css?<?= rand(1, 99999999); ?>">
	<link rel="stylesheet" type="text/css" href="/assets/themes/login-fonend-css/main.css?<?= rand(1, 99999999); ?>">

</head>

<body>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
	</style>
	<div class="limiter">
		<div class="container-login100">
			<?php
			if ($url_name == "LOGIN") { ?>
				<div class="wrap-login100">
					<div class="login100-form-title" style="background-image: url(/assets/themes/login-fonend-images/bg-01.jpg);">
						<span class="login100-form-title-1">
							Sign In
						</span>
					</div>


					<form submit-ajax="NTD" method="post" action="<?= BASE_URL('api/account/login'); ?>" class="login100-form validate-form">
						<o id="callback"></o>
						<input type="hidden" name="_token" value="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">

						<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
							<span class="label-input100">Tài Khoản</span>
							<input class="input100" type="text" placeholder="Nhập tài khoản" name="username">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
							<span class="label-input100">Mật Khẩu</span>
							<input class="input100" type="password" placeholder="Nhập mật khẩu" name="password">
							<span class="focus-input100"></span>
						</div>

						<div class="flex-sb-m w-full p-b-30">
							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
								<label class="label-checkbox100" for="ckb1">
									Ghi nhớ
								</label>
							</div>

							<div>
								<a href="/Forgot-Password" class="txt1">
									Quên Mật Khẩu ?
								</a>
							</div>
						</div>

						<div class="">
							<button type="submit" callback="" class="login101-form-btn">
								Đăng Nhập
							</button>
						</div>
						<div class="">
							<a type="button" href="/Register">
								<h5 class="login101-form-btn">Đăng Kí</h5>
							</a>

						</div>

					</form>



				</div>

			<?php } elseif ($url_name == "REGISTER") { ?>

				<div class="wrap-login100">
					<div class="login100-form-title" style="background-image: url(/assets/themes/login-fonend-images/bg-01.jpg);">
						<span class="login100-form-title-1">
							Sign Up
						</span>
					</div>


					<form submit-ajax="NTD" method="post" action="<?= BASE_URL('api/account/register'); ?>" class="login100-form validate-form">
						<o id="callback"></o>

						<input type="hidden" name="_token" value="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">
						<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
							<span class="label-input100">Họ Tên</span>
							<input class="input100" type="text" placeholder="Nhập họ và tên" name="name">
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
							<span class="label-input100">Email</span>
							<input class="input100" type="email" placeholder="Nhập email" name="email">
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
							<span class="label-input100">Tài khoản</span>
							<input class="input100" type="text" placeholder="Nhập tài khoản" name="username">
							<span class="focus-input100"></span>
						</div>

						<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
							<span class="label-input100">Mật khẩu</span>
							<input class="input100" type="password" placeholder="Nhập mật khẩu" name="password">
							<span class="focus-input100"></span>
						</div>

						<div class="flex-sb-m w-full p-b-30">
							<div class="contact100-form-checkbox">
								<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
								<label class="label-checkbox100" for="ckb1">
									Đồng ý với <a href="#">điều khoản.</a>
								</label>
							</div>

							<div>

							</div>
						</div>

						<div class="container-login101-form-btn">
							<button type="submit" callback="" class="login101-form-btn">
								Đăng kí
							</button>
						</div>
						<div class="">
							<a type="button" href="/Login">
								<h5 class="login101-form-btn">Đăng Nhập</h5>
							</a>

						</div>
					</form>



				</div>
			<?php } elseif ($url_name == "FORGOT-PASSWORD") { ?>

				<div class="wrap-login100">
					<div class="login100-form-title" style="background-image: url(/assets/themes/login-fonend-images/bg-01.jpg);">
						<span class="login100-form-title-1">
							Forgot Password
						</span>
					</div>


					<form submit-ajax="NTD" method="post" action="<?= BASE_URL('api/account/forgot-password'); ?>" class="login100-form validate-form">
						<o id="callback"></o>

						<input type="hidden" name="_token" value="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">
						<input type="hidden" name="action" value="get_otp">
						<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
							<span class="label-input100">Email</span>
							<input class="input100" type="text" placeholder="Nhập email của bạn" name="email">
							<span class="focus-input100"></span>
						</div>

						<div class="container-login101-form-btn">
							<button type="submit" callback="" class="login101-form-btn">
								Lấy mã xác thực
							</button>
						</div>
						<div class="">
							<a type="button" href="/Login">
								<h5 class="login101-form-btn">Đăng Nhập</h5>
							</a>

						</div>
					</form>



				</div>
			<?php } elseif ($url_name == "CHANGE-PASSWORD") { ?>
				<div class="wrap-login100">
					<div class="login100-form-title" style="background-image: url(/assets/themes/login-fonend-images/bg-01.jpg);">
						<span class="login100-form-title-1">
							Change Password
						</span>
					</div>


					<form submit-ajax="NTD" method="post" action="<?= BASE_URL('api/account/forgot-password'); ?>" class="login100-form validate-form">
						<o id="callback"></o>

						<input type="hidden" name="_token" value="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">
						<input type="hidden" name="action" value="change_word">
						<input type="hidden" name="email" value="<?= $_GET['email']; ?>">
						<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
							<span class="label-input100">Mã OTP</span>
							<input class="input100" type="number" placeholder="Nhập mã otp đã nhận" name="otp">
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
							<span class="label-input100">Mật Khẩu</span>
							<input class="input100" type="text" placeholder="Nhập mật khẩu" name="password">
							<span class="focus-input100"></span>
						</div>
						<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
							<span class="label-input100">Nhập Lại Mật Khẩu</span>
							<input class="input100" type="text" placeholder="Nhập lại mật khẩu" name="repassword">
							<span class="focus-input100"></span>
						</div>
						<div class="container-login101-form-btn">
							<button type="submit" callback="" class="login101-form-btn">
								Đổi mật khẩu
							</button>
						</div>
						<div class="">
							<a type="button" href="/Login">
								<h5 class="login101-form-btn">Đăng Nhập</h5>
							</a>

						</div>
					</form>



				</div>
			<?php } ?>

		</div>
	</div>
	<script src="<?= BASE_URL('assets/js/backend-bundle.min.js'); ?>" type="b9e3e84309a92aaf852234bf-text/javascript"></script>
	<script src="<?= BASE_URL('assets/js/all.min.js?' . time()); ?>" type="b9e3e84309a92aaf852234bf-text/javascript"></script>

	<script type="b9e3e84309a92aaf852234bf-text/javascript">
		const pusher = new Pusher('668e4c588c763d16fcc4', {
			cluster: 'ap1'
		});
	</script>

	<script>
		function rescallback(response) {
			if (response.status === true) {
				$('.rescallback').show();
				$('#callback').html(response.data);
				window.location.href = "/home";
				window.location.href = "/home";
			} else {
				$('.rescallback').hide();
				$('#callback').html(response.data);
			}
		}
	</script>


	<script src="<?= BASE_URL('assets/js/function.vendors3243242.js?' . time()); ?>" type="b9e3e84309a92aaf852234bf-text/javascript"></script>
	<script type="b9e3e84309a92aaf852234bf-text/javascript">
		$(document).ready(function() {
			if (!getCookie('modalSystem')) {
				$('#modalSystem').modal('show');
			}
		});

		function closeModalSystem() {
			setCookie('modalSystem', true, 1);
			$('#modalSystem').modal('hide');
		}
	</script>

	<script src="/assets/themes/login-fonend-vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="/assets/themes/login-fonend-vendor/animsition/js/animsition.min.js"></script>

	<script src="/assets/themes/login-fonend-vendor/bootstrap/js/popper.js"></script>
	<script src="/assets/themes/login-fonend-vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="/assets/themes/login-fonend-vendor/select2/select2.min.js"></script>

	<script src="/assets/themes/login-fonend-vendor/daterangepicker/moment.min.js"></script>
	<script src="/assets/themes/login-fonend-vendor/daterangepicker/daterangepicker.js"></script>

	<script src="/assets/themes/login-fonend-vendor/countdowntime/countdowntime.js"></script>

	<script src="/assets/themes/login-fonend-js/main.js"></script>

</body>

</html>