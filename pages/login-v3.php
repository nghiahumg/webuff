<?php
$text = getCurURL();
$check_url = (explode('/', $text));
$url_name = strtoupper($check_url['3']);
?>
<!doctype html>
<html lang="vi">

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

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500&family=Roboto+Condensed&display=swap" rel="stylesheet">
    <meta name="twitter:title" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?= $NTD->site('ten_website'); ?>">
    <meta name="twitter:description" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?= $NTD->site('ten_website'); ?>">
    <meta name="csrf-token" content="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="b9e3e84309a92aaf852234bf-|49" defer=""></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" type="image/png" href="<?= $NTD->site('favicon'); ?>" />
    <link rel="stylesheet" href="/assets/themes/login-v3/css/bootstrap-icons.min.css?<?= rand(1, 99999999); ?>" type="text/css">
    <link rel="stylesheet" href="/assets/themes/login-v3/css/bootstrap-docs.css?<?= rand(1, 99999999); ?>" type="text/css">
    <link rel="stylesheet" href="/assets/themes/login-v3/css/slick.css?<?= rand(1, 99999999); ?>" type="text/css">
    <link rel="stylesheet" href="/assets/themes/login-v3/css/font-awesome.min.css?<?= rand(1, 99999999); ?>" type="text/css">
    <link rel="stylesheet" href="/assets/themes/login-v3/css/app.min.css?<?= rand(1, 99999999); ?>" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/themes/login-v3/css/app.css?<?= rand(1, 99999999); ?>">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EVLQMPJW25" type="b9e3e84309a92aaf852234bf-text/javascript"></script>
    <script type="b9e3e84309a92aaf852234bf-text/javascript"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script type="b9e3e84309a92aaf852234bf-text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-EVLQMPJW25');
    </script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style></style>
</head>

<body class="dark  auth">
    <div class="preloader">
        <div class="preloader-icon"></div>
    </div>
    <div class="form-wrapper">
        <div class="container">
            <div class="card">
                <div class="row g-0">
                    <div class="col">
                        <?php if ($url_name == "LOGIN") { ?>
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="my-5 text-center">
                                        <h1 class="display-8 fw-bold">Đăng nhập tài khoản</h1>
                                        <p class="text-muted">Xin mời nhập đẩy đủ thông tin.</p>
                                    </div>

                                    <form submit-ajax="NTD" method="post" action="<?= BASE_URL('api/account/login'); ?>" class="mb-5">
                                        <o id="callback"></o>
                                        <input type="hidden" name="_token" value="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">

                                        <div class="mb-3">
                                            <label for="" class="form-label">Tài khoản</label>
                                            <input type="text" class="form-control" name="username" value="" placeholder="Nhập tài khoản">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Mật khẩu</label>
                                            <input type="password" class="form-control" name="password" value="" placeholder="Nhập mật khẩu">
                                        </div>

                                        <div class="row">
                                            <div class="col-7">
                                                <div class="custom-control custom-checkbox mb-3 text-left"></div>
                                            </div>
                                            <div class="col-5">
                                                <div class="forgot-password"><a class="custom-control-label" href="/Forgot-Password">Quên mật khẩu ?</a></div>
                                            </div>
                                        </div>

                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary btn-block" type="submit">Đăng
                                                nhập</button>
                                    
                            

                                    <p class="text-center d-block mt-5 mt-lg-0">
                                        Bạn chưa có tài khoản? <a href="/Register">Đăng kí</a>.
                                    </p>
                                
                            </div>

                        <?php } elseif ($url_name == "REGISTER") { ?>
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="my-5 text-center">

                                        <h1 class="display-8 fw-bold">Đăng kí tài khoản</h1>
                                        <p class="text-muted">Xin mời nhập đẩy đủ thông tin.</p>
                                    </div>
                                    <form submit-ajax="NTD" method="post" action="<?= BASE_URL('api/account/register'); ?>" class="mb-5">
                                        <o id="callback"></o>

                                        <input type="hidden" name="_token" value="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Họ và tên</label>
                                            <input type="text" class="form-control" name="name" value="" placeholder="Nhập họ và tên">
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="email" value="" placeholder="Nhập địa chỉ email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Tài khoản</label>
                                            <input type="text" class="form-control" name="username" value="" placeholder="Nhập tài khoản">
                                        </div>

                                        <div class="mb-3">
                                            <label for="" class="form-label">Mật khẩu</label>
                                            <input type="password" class="form-control" name="password" value="" placeholder="Nhập mật khẩu">
                                        </div>
                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary btn-block" type="submit">Đăng
                                                kí</button>
                                        </div>
                                    </form>

                                    <p class="text-center d-block mt-5 mt-lg-0">
                                        Bạn đã có tài khoản? <a href="/Login">Đăng nhập</a>.
                                    </p>
                                </div>
                            </div>
                        <?php } elseif ($url_name == "FORGOT-PASSWORD") { ?>
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="my-5 text-center">
                                        <h1 class="display-8 fw-bold">Quên mật khẩu</h1>
                                        <p class="text-muted">Xin mời nhập email.</p>
                                    </div>

                                    <form submit-ajax="NTD" method="post" action="<?= BASE_URL('api/account/forgot-password'); ?>" class="mb-5">
                                        <o id="callback"></o>
                                        <input type="hidden" name="_token" value="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">
                                        <input type="hidden" name="action" value="get_otp">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Email</label>
                                            <input type="text" class="form-control" name="email" value="" placeholder="Nhập email của bạn">
                                        </div>



                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary btn-block" type="submit">Lấy mã xác minh</button>
                                        </div>
                                    </form>
                                    <p class="text-center d-block mt-5 mt-lg-0">
                                        <a href="/Login">Quay lại đăng nhập</a>.
                                    </p>
                                </div>
                            </div>
                        <?php } elseif ($url_name == "CHANGE-PASSWORD") { ?>
                            <div class="row">
                                <div class="col-md-10 offset-md-1">
                                    <div class="my-5 text-center">
                                        <h1 class="display-8 fw-bold">Đổi mật khẩu</h1>
                                        <p class="text-muted">Xin mời nhập thông tin.</p>
                                    </div>

                                    <form submit-ajax="NTD" method="post" action="<?= BASE_URL('api/account/forgot-password'); ?>" class="mb-5">
                                        <o id="callback"></o>
                                        <input type="hidden" name="_token" value="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">
                                        <input type="hidden" name="action" value="change_word">
                                        <input type="hidden" name="email" value="<?= $_GET['email']; ?>">
                                        <div class="mb-3">
                                            <label for="" class="form-label">Mã OTP</label>
                                            <input type="number" class="form-control" name="otp" value="" placeholder="Nhập mã xác thực nhận được">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Mật Khẩu</label>
                                            <input type="text" class="form-control" name="password" value="" placeholder="Nhập mật khẩu mới">
                                        </div>
                                        <div class="mb-3">
                                            <label for="" class="form-label">Nhập Lại Mật Khẩu</label>
                                            <input type="password" class="form-control" name="repassword" value="" placeholder="Nhập lại mật khẩu mới">
                                        </div>

                                        <div class="d-grid gap-2">
                                            <button class="btn btn-primary btn-block" type="submit">Đổi mật khẩu</button>
                                        </div>
                                    </form>
                                    <p class="text-center d-block mt-5 mt-lg-0">
                                        <a href="/Login">Quay lại đăng nhập</a>.
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="/assets/js-giao-dien/bundle.js"></script>
    <script src="/assets/js-giao-dien/app.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/7.0.3/pusher.min.js"></script>
    <script>
        const pusher = new Pusher('8424c10da800c48a00cf', {
            cluster: 'ap1'
        });
    </script>
    <script src="/assets/js-giao-dien/function.js?ntd=<?= rand(1, 99999999); ?>"></script>


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

    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="b9e3e84309a92aaf852234bf-|49" defer=""></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/7.0.3/pusher.min.js" type="e75d470292950b275474104f-text/javascript"></script>
    <script type="e75d470292950b275474104f-text/javascript">
        const pusher = new Pusher('8424c10da800c48a00cf', {
            cluster: 'ap1'
        });
    </script>

    <script src="/assets/themes/login-v3/js/rocket-loader.min.js" data-cf-settings="e75d470292950b275474104f-|49" defer=""></script>
</body>

</html>