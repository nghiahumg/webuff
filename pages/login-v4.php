
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
    <meta name="twitter:title" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?= $NTD->site('ten_website'); ?>">
    <meta name="twitter:description" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?= $NTD->site('ten_website'); ?>">
    <meta name="csrf-token" content="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">
    <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="b9e3e84309a92aaf852234bf-|49" defer=""></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="icon" type="image/png" href="<?= $NTD->site('favicon'); ?>" />
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css?<?=rand(1,999999999);?>">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css?<?=rand(1,999999999);?>" rel="stylesheet">
    <link rel="stylesheet" href="/assets/themes/login-v4/css/style.css?<?=rand(1,999999999);?>?<?= rand(1, 999999); ?>">
    <link rel="stylesheet" href="/assets/themes/login-v4/css/main.css?<?=rand(1,999999999);?>?<?= rand(1, 999999); ?>">
    <link rel="stylesheet" href="/assets/themes/login-v4/css/app.css?<?=rand(1,999999999);?>?<?= rand(1, 999999); ?>">
    <link rel="stylesheet" href="/assets/themes/login-v4/css/bootstrap.css?<?=rand(1,999999999);?>?<?= rand(1, 999999); ?>">
</head>

<div class="wrapper">
    <section class="login-content">
        <div class="container h-100">
            <div class="row justify-content-center align-items-center height-self-center">
                <div class="col-md-5 col-sm-12 col-12 align-self-center">
                    <div class="sign-user_card">

                        <?php if ($url_name == "LOGIN") { ?>
                            <h4 class="title">Đăng nhập hệ thống</h4>
                            <p></p>
                            <small class="">Vui lòng điền thông tin.</small>
                            <p></p>

                            <form submit-ajax="NTD" method="post" action="<?= BASE_URL('api/account/login'); ?>">

                                <o id="callback"></o>
                                <input type="hidden" name="_token" value="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">

                                            <input class="floating-input form-control" type="text" name="username" placeholder="Nhập Tài Khoản">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input class="floating-input form-control" type="password" name="password" placeholder="Nhập Mật Khẩu">
                                        </div>
                                    </div>
                                    <div class="col-6">

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" checked="">
                                            <label class="custom-control-label" for="customCheck1">Ghi nhớ</label>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="forgot-password"><a class="form-control-label" href="/Forgot-Password">Quên mật khẩu ?</a></div>
                                    </div>
                                </div> <br>
                                <button type="submit" class="btn btn-info-but btn-block btn-lg">
                                    <h5 class="text-button">Đăng nhập</h5>
                                </button>
                                <hr>

                                <p class="mt-3"> Bạn Chưa Có Tài Khoản? <a href="/Register" class="text-primary">Đăng Kí Ngay.</a> </p>
                            </form>

                        <?php } elseif ($url_name == "REGISTER") { ?>
                            <h4 class="title">Đăng ký tài khoản</h4>
                            <p></p>
                            <small class="">Vui lòng điền thông tin.</small>
                            <p></p>

                            <form submit-ajax="NTD" method="post" action="<?= BASE_URL('api/account/register'); ?>">
                                <o id="callback"></o>

                                <input type="hidden" name="_token" value="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">

                                            <input class="floating-input form-control" type="text" name="name" placeholder="Nhập Họ Tên">
                                        </div>

                                    </div>
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">

                                            <input class="floating-input form-control" type="email" name="email" placeholder="Nhập Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">

                                            <input class="floating-input form-control" type="text" name="username" placeholder="Tài Khoản">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">
                                            <input class="floating-input form-control" type="password" name="password" placeholder="******">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" checked="">
                                            <label class="custom-control-label" for="customCheck1">Đồng ý <a href="#">điều khoản.</a></label>
                                        </div>
                                    </div>

                                    <div class="col-6">

                                    </div>
                                </div> <br>
                                <button type="submit" class="btn btn-info-but btn-block btn-lg">
                                    <h5 class="text-button">Đăng kí</h5>
                                </button>
                                <hr>

                                <p class="mt-3"> Bạn Đã Có Tài Khoản? <a href="/Login" class="text-primary">Đăng Nhập.</a> </p>
                            </form>
                        <?php } elseif ($url_name == "FORGOT-PASSWORD") { ?>
                            <h4 class="title">Quên mật khẩu</h4>
                            <p></p>

                            <small class="">Vui lòng điền thông tin.</small>
                            <p></p>

                            <form submit-ajax="NTD" method="post" action="<?= BASE_URL('api/account/forgot-password'); ?>">
                                <o id="callback"></o>

                                <input type="hidden" name="_token" value="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">
                                <input type="hidden" name="action" value="get_otp">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">

                                            <input class="floating-input form-control" type="email" name="email" placeholder="Nhập email của bạn">
                                        </div>
                                    </div>

                                </div> <br>
                                <button type="submit" rescallback="" class="btn btn-info-but btn-block btn-lg">
                                    <h5 class="text-button">Lấy Mã Xác Minh</h5>
                                </button><br>
                                <a type="button" href="/Login" class="btn btn-primary btn-block btn-lg">
                                    <h7 class="text-button">Quay Lại Đăng Nhập</h7>
                                </a>






                            </form>
                        <?php } elseif ($url_name == "CHANGE-PASSWORD") { ?>
                            <h4 class="title">Đổi mật khẩu</h4>
                            <p></p>
                            <small class="">Vui lòng điền thông tin.</small>
                            <p></p>

                            <form submit-ajax="NTD" method="post" action="<?= BASE_URL('api/account/forgot-password'); ?>">
                                <o id="callback"></o>

                                <input type="hidden" name="_token" value="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">
                                <input type="hidden" name="action" value="change_word">
                                <input type="hidden" name="email" value="<?= $_GET['email']; ?>">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">

                                            <input class="floating-input form-control" type="text" name="otp" placeholder="Nhập mã otp">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">

                                            <input class="floating-input form-control" type="text" name="password" placeholder="Nhập mật khẩu mới">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="floating-label form-group">

                                            <input class="floating-input form-control" type="text" name="repassword" placeholder="Nhập lại mật khẩu">
                                        </div>
                                    </div>
                                </div> <br>
                                <button type="submit" rescallback="" class="btn btn-info-but btn-block btn-lg">
                                    <h5 class="text-button">Đổi Mật Khẩu</h5>
                                </button><br>
                                <a type="button" href="/Login" class="btn btn-primary btn-block btn-lg">
                                    <h7 class="text-button">Quay Lại Đăng Nhập</h7>
                                </a>






                            </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="<?= BASE_URL('assets/js/backend-bundle.min.js'); ?>" type="b9e3e84309a92aaf852234bf-text/javascript"></script>
<script src="<?= BASE_URL('assets/js/all.min.js?' . time()); ?>" type="b9e3e84309a92aaf852234bf-text/javascript"></script>

<script type="b9e3e84309a92aaf852234bf-text/javascript">
    const pusher = new Pusher('668e4c588c763d16fcc4', {
        cluster: 'ap1'
    });
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

<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="b9e3e84309a92aaf852234bf-|49" defer=""></script>

</body>

</html>