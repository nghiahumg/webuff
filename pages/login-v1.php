<!DOCTYPE html>
<html lang="en">

<head>

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
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="/assets/themes/css/style.css?<?= rand(1, 9999999); ?>" />
  <title>Tài Khoản</title>
  <script src="https://kit.fontawesome.com/yourcode.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
  <!-- Favicon Link -->
  <link rel="shortcut icon" type="image/png" href="<?= $NTD->site('favicon'); ?>">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
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

</head>

<body>
  <div class="container">
    <div class="forms-container">
      <div class="signin-signup">
        <form submit-ajax="NTD" method="post" action="<?= BASE_URL('api/account/login'); ?>" class="sign-in-form">
          <o id="callback"></o>
          <input type="hidden" name="_token" value="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">
          <h2 class="title">Sign in</h2>


          <div class="input-field">
            <i class="fas fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Nhập tài khoản" name="username">
          </div>





          <div class="input-field">
            <i class="fas fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Nhập mật khẩu" name="password">
          </div>
          <div class="bitton-ntd">
            <button type="submit" callback="" class="btn solid ">Đăng Nhập</button>

          </div>
        </form>
        <form submit-ajax="NTD" method="post" action="<?= BASE_URL('api/account/register'); ?>" class="sign-up-form">
          <o id="callback"></o>
          <input type="hidden" name="_token" value="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">



          <h2 class="title2">Sign up</h2>

          <div class="input-field">

            <i class="fa fa-user-plus" aria-hidden="true"></i>
            <input placeholder="Nhập họ và tên" name="name">
          </div>
          <div class="input-field">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <input type="email" name="email" placeholder="Nhập email">
          </div>


          <div class="input-field">
            <i class="fas fa-user" aria-hidden="true"></i>
            <input type="text" placeholder="Nhập tài khoản" name="username">
          </div>

          <div class="input-field">
            <i class="fas fa-lock" aria-hidden="true"></i>
            <input type="password" placeholder="Nhập mật khẩu" name="password">
          </div>
          <div class="bitton-ntd2">
            <button type="submit" callback="" class="btn">Đăng Kí</button>
          </div><br>

        </form>
      </div>
    </div>

    <div class="panels-container">
      <div class="panel left-panel">
        <div class="content">
          <h3>Bạn chưa có tài khoản ?</h3>
          <p>
            Hãy bắt đầu bằng việc tạo tài khoản để sử dụng dịch vụ của chúng tôi !
          </p>
          <button class="btn transparent" id="sign-up-btn">
            Đăng kí
          </button>
        </div>
        <img src="/assets/themes/img/vnaKa8X.018caf47.png" class="image" alt="" />
      </div>
      <div class="panel right-panel">
        <div class="content">
          <h3>Bạn đã có tài khoản ?</h3>
          <p>
            Còn chờ đợi gì nữa, hãy đăng nhập ngay để sử dụng những dịch vụ đang giảm giá của chúng tôi .
          </p>
          <button class="btn transparent" id="sign-in-btn">
            Đăng nhập
          </button>
        </div>
        <img src="/assets/themes/img/QFizvnl.688859e6.png" class="image" alt="" />
      </div>
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



  <script src="/assets/themes/js/app.js"></script>
</body>

</html>