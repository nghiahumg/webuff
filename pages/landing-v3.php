<!DOCTYPE html>

<html lang="vi">
<meta charset="utf-8">

<head>
	<title><?= $NTD->site('ten_website'); ?> | Hệ Thống Dịch Vụ Mạng Xã Hội Chất Lượng.</title>
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
	<meta property="og:title" content="<?= $NTD->site('gioi_thieu_web'); ?>" />
	<meta property="og:description" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?= $NTD->site('ten_website'); ?>" />
	<meta property="og:image" content="<?= $NTD->site('anhbia'); ?>" />
	<meta property="fb:app_id" content="" />

	<meta name="csrf-token" content="9jILCFLdUiKHj5NIvPwKO98dWO5obzeL3msiDKcQ">
	<link rel="shortcut icon" type="image/png" href="<?= $NTD->site('favicon'); ?>">


	<!-- Custom Browsers Color Start -->
	<meta name="theme-color" content="#000">

	<link rel="stylesheet" href="/assets/themes/landing-font-end-3/css/main.min.css?<?= rand(1, 9999999); ?>">
	<link rel="stylesheet" href="/assets/themes/landing-font-end-3/css/app.css?<?= rand(1, 9999999); ?>">
	<!-- Load google font
	================================================== -->
	<script type="text/javascript">
		WebFontConfig = {
			google: {
				families: ['Catamaran:300,400,600,700', 'Raleway:100,700', 'Roboto:700']
			}
		};
		(function() {
			var wf = document.createElement('script');
			wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
				'://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
			wf.type = 'text/javascript';
			wf.async = 'true';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wf, s);
		})();
	</script>

	<!-- Load other scripts
	================================================== -->
	<script type="text/javascript">
		var _html = document.documentElement;
		_html.className = _html.className.replace("no-js", "js");
	</script>

	<style>
		.preloader {
			width: 100%;
			height: 100%;
			position: fixed;
			background-color: #fff;
			z-index: 9999;
		}
	</style>

</head>

<body>
	<style>
		.logo__img {
			background-image: url(<?= $NTD->site('logo_mini'); ?>);
		}

		.logo__img {
			background-image: url(<?= $NTD->site('logo_mini'); ?>)
		}
	</style>
	<div class="preloader"></div>

	<header class="header">
		<a href="#" class="logo">
			<div class="logo__img"></div>
			<div class="logo__title"><?= $NTD->site('ten_website'); ?></div>
		</a>

		<ul class="menu">
			<li class="menu__item">
				<a href="#" class="menu__link">Home</a>
			</li>
			<li class="menu__item">
				<a href="#about" class="menu__link">About</a>
			</li>
			<li class="menu__item">
				<a href="#services" class="menu__link">Services</a>
			</li>
			<li class="menu__item">
				<a href="#step" class="menu__link">Steps</a>
			</li>

		</ul>

		<div class="header__right">

			<div class="sign-in-wrap">
				<a href="/Login" class="btn-sign-in">Sign in</a>
			</div>
			<div class="sign-up-wrap">
				<a href="/Register" class="btn-sign-up">Sign up</a>
			</div>
		</div>

		<div class="btn-menu">
			<div class="one"></div>
			<div class="two"></div>
			<div class="three"></div>
		</div>
	</header>

	<div class="fixed-menu">
		<div class="fixed-menu__header">
			<a href="#" class="logo logo--color">
				<div class="logo__img"></div>
				<div class="logo__title"><?= $NTD->site('ten_website'); ?></div>
			</a>

			<div class="btn-close">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 47.971 47.971" style="enable-background:new 0 0 47.971 47.971;" xml:space="preserve" width="512px" height="512px">
					<path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88   c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242   C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879   s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z" fill="#006DF0" />
				</svg>
			</div>
		</div>

		<div class="fixed-menu__content">

			<ul class="mob-menu">
				<li class="mob-menu__item">
					<a href="#" class="mob-menu__link">Home</a>
				</li>
				<li class="mob-menu__item">
					<a href="#about" class="mob-menu__link">About</a>
				</li>
				<li class="mob-menu__item">
					<a href="#services" class="mob-menu__link">Services</a>
				</li>
				<li class="mob-menu__item">
					<a href="#step" class="mob-menu__link">Steps</a>
				</li>


			</ul>


			<div class="btn-wrap">
				<a href="/Login" class="btn-sign-in">Sign in</a>
				<a href="/Register" class="btn-sign-up">Sign up</a>
			</div>


		</div>
	</div>

	<div class="wrapper">

		<img src="img/big-triangle-bg-right.png" class="wrapper__bg" alt="">

		<section class="promo">
			<div class="container">
				<div class="row align-items-center ">
					<div class="col">
						<div class="promo__content" data-aos="fade-up">
							<div class="promo__subtitle"><?= $NTD->site('ten_website'); ?></div>
							<h3 class="title title--big title--white promo__title">
								Hệ thống dịch vụ mạng xã hội
								<span></span>
							</h3>
							<p>
								Trang cung cấp dịch vụ mạng xã hội hàng đầu việt nam, Chúng tôi mang đến cho bạn cách tăng tương tác, Tạo sự nổi tiếng cho bạn trên các nền tảng Facebook, TikTok, Instagram,...

							</p><a href="/Login" class="btn-sign-in2">Bắt Đầu</a>

						</div>

						<img src="/assets/images/city.png" data-aos="fade-left" alt="" class="promo__img">
					</div>
				</div>
			</div>
			<img src="img/aboutBg.png" class="promo__bg" alt="">
		</section>

		<section class="partners partners--top-animation section section--small-pt">

		</section>

		<section id="about" class="about section section--no-pt ">

			<div class="container">
				<div class="row about__first-row">
					<img src="/assets/images/hero-18-img.png" width="30%" class="about__img-1" alt="">
					<div class="col-lg-5" data-aos="fade-right">
						<div class="block-header">
							<div class="subtitle subtitle--tire">About</div>
							<h2 class="title title--black title--medium">Nên chọn dịch vụ của chúng tôi</h2>
						</div>

						<p>
							Chúng tôi cung cấp dịch vụ rẻ nhất trong số các đối thủ cạnh tranh của chúng tôi. Nếu bạn đang tìm kiếm một cách cực kỳ dễ dàng để cung cấp các dịch vụ tiếp thị bổ sung cho khách hàng hiện tại và khách hàng mới của mình, thì không cần tìm đâu xa! trang web của chúng tôi cung cấp điều đó và hơn thế nữa!

						</p>

						<ul class="about__list-marker">
							<li>
								Luôn luôn đổi mới
							</li>
							<li>
								Tốc độ cao
							</li>
							<li>
								Thấu hiểu thị trường
							</li>
						</ul>

					</div>
				</div>
				<div class="row about__second-row">
					<img src="/assets/images/seo-05.png" width="40%" class="about__img-2" alt="">
					<div class="col-lg-6 offset-lg-6" data-aos="fade-left">
						<div class="block-header">

							<h2 class="title title--black title--medium">Nhanh chóng và tiện lợi</h2>
						</div>

						<p>
							Được đồng bộ hoá hoàn toàn và hỗ trợ rất nhanh.
							Chúng tôi sử dụng những công cụ tốt nhất để mang đến cho bạn trải nghiệm tuyệt vời nhất.
						</p>

						<ul class="about__list-check">
							<li> Chúng tôi sử dụng các server và kỹ thuật tốt nhất để phục vụ bạn </li>
							<li> <span>Công nghê</span> phần mềm quản lý tối ưu cao </li>
							<li> <span>Cập nhật</span> hệ thông liên tục để bạn có trải nghiệm tốt nhất </li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="services" class="service section section--no-pt">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="block-header block-header--animated block-header--center">
							<div class="subtitle">Services</div>
							<h2 class="title title--medium title--black">Hệ thống dịch vụ</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-3 col-md-6">
						<div class="service__item" data-aos="fade-up">
							<div class="service__item-content">
								<div class="service__item-icon">
									<img src="/assets/images/facebook.svg" width="60px" alt="">
								</div>

								<h3 class="service__item-title">Facebook</h3>
								<p>
									Giúp bạn nổi tiếng, hiệu quả hơn trong maketting, bán hàng
								</p>
							</div>


						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="service__item" data-aos="fade-up" data-aos-delay="200">
							<div class="service__item-content">
								<div class="service__item-icon">
									<img src="/assets/svg/intas.png" width="60px" alt="">
								</div>

								<h3 class="service__item-title">Instagram</h3>
								<p>
									Tăng sự thu hút một cách dễ dàng hiệu quả
								</p>
							</div>


						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="service__item" data-aos="fade-up" data-aos-delay="400">
							<div class="service__item-content">
								<div class="service__item-icon">
									<img src="/assets/svg/tiktok-logo.png" width="60px" alt="">
								</div>

								<h3 class="service__item-title">TikTok</h3>
								<p>
									Giúp bạn có một lượng tương tác cao mà không tốn quá nhiều thời gian
								</p>
							</div>


						</div>
					</div>
					<div class="col-xl-3 col-md-6">
						<div class="service__item" data-aos="fade-up" data-aos-delay="600">
							<div class="service__item-content">
								<div class="service__item-icon">
									<img src="/assets/svg/youtube-play--v2.png" width="60px" alt="">
								</div>

								<h3 class="service__item-title">Youtube</h3>
								<p>
									Giúp kênh của bạn lên đề xuất,tăng hiệu quả tạo sự thu hút
								</p>
							</div>


						</div>
					</div>
				</div>
			</div>
		</section>



		<section class="process section" id="step">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="block-header block-header--animated block-header--center">
							<div class="subtitle">Process</div>
							<h2 class="title title--medium title--white">Cách sử dụng dịch vụ</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="process__steps">
							<div class="process__step" data-aos="fade-left">
								<div class="process__step-icon">
									<img src="/assets/images/external-register-training-management-system-flat-flat-geotatah.png" width="80px" alt="">
								</div>
								<h3 class="process__step-title">
									Đăng kí
								</h3>
							</div>

							<div class="process__step" data-aos="fade-left" data-aos-delay="200">
								<div class="process__step-icon">
									<img src="/assets/images/external-coin-pirates-justicon-lineal-color-justicon.png" width="80px" alt="">
								</div>
								<h3 class="process__step-title">
									Nạp tiền
								</h3>
							</div>

							<div class="process__step" data-aos="fade-left" data-aos-delay="400">
								<div class="process__step-icon">
									<img src="/assets/images/green-earth.png" width="80px" alt="">
								</div>
								<h3 class="process__step-title">
									Chọn dịch vụ
								</h3>
							</div>
							<div class="process__step" data-aos="fade-left" data-aos-delay="600">
								<div class="process__step-icon">
									<img src="/assets/images/cloud-checked.png" width="80px" alt="">
								</div>
								<h3 class="process__step-title">
									Tiến hành tạo đơn
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="subscribe section">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="block-header block-header--animated block-header--center">
							<div class="subtitle">Newslatter</div>
							<h2 class="title title--medium title--white">Subscribe</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<form id="subscribe-bot" action="#" class="subscribe__form form">
							<input type="email" name="subscribe_bot__email" placeholder="Email" class="form__input subscribe__form-input">
							<button class="form__btn subscribe__form-btn">Send</button>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col">

						<ul class="social-list">
							<li class="social-list__item">

								<a href="" class="social-list__link">
									<i class="fontello-icon icon-twitter">&#xf309;</i>
								</a>
							</li>
							<li class="social-list__item">
								<a href="" class="social-list__link">
									<i class="fontello-icon icon-facebook">&#xf30c;</i>
								</a>
							</li>
							<li class="social-list__item">
								<a href="" class="social-list__link">
									<i class="fontello-icon icon-telegram">&#xf2c6;</i>
								</a>
							</li>
							<li class="social-list__item">
								<a href="" class="social-list__link">
									<i class="fontello-icon icon-bitcoin">&#xf15a;</i>
								</a>
							</li>
							<li class="social-list__item">
								<a href="" class="social-list__link">
									<i class="fontello-icon icon-youtube-play">&#xf16a;</i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<footer class="footer ">
			<div class="row">
				<div class="col"><br>
					<center> © <?= $NTD->site('ten_website'); ?> | All rights reserved.</center>
				</div>
			</div>
		</footer>


	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script>
		window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')
	</script>

	<script src="/assets/themes/landing-font-end-3/js/scripts.min.js"></script>

</body>

</html>