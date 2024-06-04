<!DOCTYPE html>

<html lang="vi">

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
  <meta name="og:title" content="<?= $NTD->site('gioi_thieu_web'); ?>">
  <meta name="og:description" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?= $NTD->site('ten_website'); ?>">
  <meta property="og:url" content="https://<?= $_SERVER['SERVER_NAME'] ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:domain" content="<?= $_SERVER['SERVER_NAME'] ?>" />


  <meta property="og:image" content="<?= $NTD->site('anhbia'); ?>" />


  <meta name="csrf-token" content="9jILCFLdUiKHj5NIvPwKO98dWO5obzeL3msiDKcQ">
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
  <link rel="shortcut icon" type="image/png" href="<?= $NTD->site('favicon'); ?>">

  <link rel="stylesheet" href="assets/libs/@fortawesome/fontawesome-free/css/all.min.css?<?= rand(1, 999999); ?>"><!-- Page CSS -->
  <link rel="stylesheet" href="/assets/themes/landing-font-end-4/css/swiper.min.css?<?= rand(1, 999999); ?>">

  <link rel="stylesheet" href="/assets/themes/landing-font-end-4/css/purpose.css?<?= rand(1, 999999); ?>" id="stylesheet">
</head>

<body>
  <header class="header header-transparent" id="header-main">

    <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-dark bg-dark" id="navbar-main">
      <div class="container px-lg-0">
        <!-- Logo -->
        <a class="navbar-brand mr-lg-5" href="index.html">
          <img alt="Image placeholder" src="<?= $NTD->site('logo'); ?>" id="navbar-logo" style="height: 50px;">
        </a>
        <!-- Navbar collapse trigger -->
        <button class="navbar-toggler pr-0" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-main-collapse">
          <ul class="navbar-nav align-items-lg-center">
            <!-- Home - Overview  -->
            <li class="nav-item active">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#about">About</a>
            </li>
            <!-- Pages menu -->
            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="nav-link" href="#service">Service</a>

            </li>

            <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
              <a class="nav-link" href="#review">Reviewer</a>

            </li>
          </ul>
          <ul class="navbar-nav align-items-lg-center ml-lg-auto">

            <li class="nav-item mr-0">
              <a href="/Login" target="_blank" class="nav-link d-lg-none">Bắt đầu</a>
              <a href="/Login" target="_blank" class="btn btn-sm btn-white rounded-pill btn-icon rounded-pill d-none d-lg-inline-flex" data-toggle="tooltip" data-placement="left" title="Go to Bootstrap Themes">
                <span class="btn-inner--icon"><i class="fas fa-sign-in-alt"></i></span>
                <span class="btn-inner--text">Bắt đầu</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


  <div class="main-content">

    <section id="home" class="header-1 section-rotate bg-section-secondary" data-offset-top="#header-main">
      <div class="section-inner bg-gradient-primary"></div>
      <!-- SVG illustration -->
      <div class="pt-7 position-absolute middle right-0 col-lg-7 col-xl-6 d-none d-lg-block">
        <figure class="w-100" style="max-width: 1000px;">
          <img alt="Image placeholder" src="/assets/images/work-chat.svg" class="svg-inject img-fluid" style="height: 1000px;">
        </figure>
      </div>
      <!-- SVG background -->
      <div class="bg-absolute-cover bg-size--contain d-flex align-items-center">
        <figure class="w-100 d-none d-lg-block">
          <img alt="Image placeholder" src="/assets/images/bg-4.svg" class="svg-inject" style="height: 1000px;">
        </figure>
      </div>
      <!-- Hero container -->
      <div class="container py-5 pt-lg-6 d-flex align-items-center position-relative zindex-100">
        <div class="col">
          <div class="row">
            <div class="col-lg-5 col-xl-6 text-center text-lg-left">
              <div class="d-none d-lg-block mb-4">
                <div class="alert alert-modern alert-dark">
                  <span class="badge badge-danger badge-pill">
                    Hot
                  </span>
                  <span class="alert-content">Chào mừng đến với hệ thống dịch vụ <?= $NTD->site('ten_website'); ?></span>
                </div>
              </div>
              <div>
                <h2 class="text-white mb-4">

                  <span class="d-block">Hệ Thống Dịch Vụ Mạng Xã Hội Giá Rẻ !</span>
                </h2>
                <p class="lead text-white">Chúng tôi chuyên cung cấp các dịch vụ để tăng tương tác , bán hàng hiệu quả trên các Mạng xã hội như Facebook, Instagram, Tiktok...</p>
                <div class="mt-5">
                  <a href="/Login" class="btn btn-white rounded-pill hover-translate-y-n3 btn-icon mr-sm-4 scroll-me">
                    <span class="btn-inner--text">Đăng Nhập</span>

                  </a>
                  <a href="/Register" class="btn btn-outline-white rounded-pill hover-translate-y-n3 btn-icon d-none d-xl-inline-block scroll-me">

                    <span class="btn-inner--text">Đăng Kí</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="about" class="slice slice-lg">
      <div class="container">
        <div class="row row-grid justify-content-around align-items-center">
          <div class="col-lg-5 order-lg-2">
            <div class=" pr-lg-4">
              <h5 class=" h3">Nền Tảng Hoàn Hảo Cho Tiếp Thị Truyền Thông Xã Hội.</h5>
              <p class="lead mt-4 mb-5"><?= $NTD->site('ten_website'); ?> là việc sử dụng các nền tảng truyền thông xã hội như Instagram, Facebook, Youtube, TikTok, Shopee và nhiều nền tảng khác để quảng bá bản thân hoặc công ty của bạn. Nếu bạn đang tìm cách tăng cường sự hiện diện trực tuyến của mình, thì lựa chọn tốt nhất của bạn, nơi chúng tôi cung cấp các dịch vụ giúp bạn tăng cường sự hiện diện trực tuyến của mình trên TẤT CẢ các nền tảng truyền thông xã hội với mức giá rẻ nhất.</p><a href="/Login" class="link link-underline-primary">Bắt đầu ngay</a>
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <img alt="Image placeholder" src="/assets/images/vnaKa8X.018caf47.png" class="img-fluid img-center">
          </div>
        </div>
      </div>
    </section>
    <section id="service" class="slice bg-section-secondary">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-6">
            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
              <div class="px-4 py-5">
                <img src="/assets/images/external-rocket-achievements-flaticons-flat-flat-icons-2.png" width="80px" alt="" loading="lazy">
              </div>
              <div class="px-4 pb-5">
                <h5>Tốc Độ</h5>
                <p class="text-muted">Dịch vụ của chúng tôi được tự động hóa và thường mất vài phút.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
              <div class="px-4 py-5">
                <img src="/assets/images/external-dollar-finance-kiranshastry-lineal-color-kiranshastry.png" width="80px" alt="" loading="lazy">
              </div>
              <div class="px-4 pb-5">
                <h5>Giá Cả</h5>
                <p class="text-muted">Chúng tôi mang đến cho bạn một trang dịch vụ mạng xã hội chất lượng, chi phí dịch vụ rất rẻ.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
              <div class="px-4 py-5">
                <img src="/assets/images/idea-bank.png" alt="" width="80px" loading="lazy">
              </div>
              <div class="px-4 pb-5">
                <h5>Thanh Toán</h5>
                <p class="text-muted">Chúng tôi có một phương pháp Phổ biến là ngân hàng, momo và nhiều phương pháp khác có thể được đáp ứng theo yêu cầu.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
              <div class="px-4 py-5">
                <img src="/assets/images/hper.png" alt="" width="80px" loading="lazy">
              </div>
              <div class="px-4 pb-5">
                <h5>Hỗ Trợ 24/7</h5>
                <p class="text-muted">Bạn có thể tin tưởng vào hệ thống hỗ trợ 24/7 của chúng tôi, chúng tôi sẽ giải quyết mọi thắc mắc của bạn.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
              <div class="px-4 py-5">
                <img src="/assets/images/external-protect-mother-earth-day-others-bzzricon-studio.png" width="80px" alt="Icon">
              </div>
              <div class="px-4 pb-5">
                <h5>Bảo Mật</h5>
                <p class="text-muted">Chúng tôi cam kết sẽ bảo mật thông tin người dùng 1 cách tốt nhất.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <div class="card text-center hover-shadow-lg hover-translate-y-n10">
              <div class="px-4 py-5">
                <img alt="Image placeholder" src="/assets/images/external-technology-literary-genres-becris-lineal-color-becris.png" class="svg-inject" width="80px">
              </div>
              <div class="px-4 pb-5">
                <h5>Công Nghệ</h5>
                <p class="text-muted">Hệ thống được vận hành hoàn toàn tự động 24/24.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="fluid-paragraph text-center mt-5">
        <p>
          <strong class="text-primary"><?= $NTD->site('ten_website'); ?></strong> Luôn tạo cho bạn sự tin tưởng nhất
        </p>
      </div>
    </section>
    <!-- Features (v2) -->

    <!-- Features (v3) -->
    <section class="slice slice-lg">
      <div class="container">
        <div class="row row-grid justify-content-around align-items-center">
          <div class="col-lg-5">
            <div class="">
              <h5 class=" h3">Nên chọn dịch vụ của chúng tôi</h5>
              <p class="lead my-4">Chúng tôi cung cấp dịch vụ rẻ nhất trong số các đối thủ cạnh tranh của chúng tôi. Nếu bạn đang tìm kiếm một cách cực kỳ dễ dàng để cung cấp các dịch vụ tiếp thị bổ sung cho khách hàng hiện tại và khách hàng mới của mình, thì không cần tìm đâu xa! trang web của chúng tôi cung cấp điều đó và hơn thế nữa!</p>
              <ul class="list-unstyled">
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="icon icon-shape icon-primary icon-sm rounded-circle mr-3">
                        <i class="fas fa-store-alt"></i>
                      </div>
                    </div>
                    <div>
                      <span class="h6 mb-0">Luôn luôn đổi mới</span>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="icon icon-shape icon-warning icon-sm rounded-circle mr-3">
                        <i class="fas fa-palette"></i>
                      </div>
                    </div>
                    <div>
                      <span class="h6 mb-0">Tốc độ cao</span>
                    </div>
                  </div>
                </li>
                <li class="py-2">
                  <div class="d-flex align-items-center">
                    <div>
                      <div class="icon icon-shape icon-success icon-sm rounded-circle mr-3">
                        <i class="fas fa-cog"></i>
                      </div>
                    </div>
                    <div>
                      <span class="h6 mb-0">Thấu hiểu thị trường</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-6">
            <img alt="Image placeholder" src="/assets/images/hero-18-img.png" class="img-fluid img-center">
          </div>
        </div>
      </div>
    </section>
    <!-- Features (v4) -->

    <section id="review" class="slice slice-lg bg-section-secondary">
      <div class="container">
        <div class="mb-5 text-center">
          <h3 class=" mt-4">Những đánh giá của khách hàng</h3>
          <div class="fluid-paragraph mt-3">
            <p class="lead lh-180">Chúng tôi luôn thấu hiểu bạn để phát triển dịch vụ.</p>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-11">
            <div class="swiper-js-container overflow-hidden">
              <div class="swiper-container" data-swiper-items="1" data-swiper-space-between="0" data-swiper-sm-items="2" data-swiper-xl-items="3">
                <div class="swiper-wrapper">
                  <div class="swiper-slide p-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div>
                            <img alt="Image placeholder" src="/assets/images/imager_5979.jpg" class="avatar  rounded-circle">
                          </div>
                          <div class="pl-3">
                            <h5 class="h6 mb-0">Hương Giang IDOL</h5>
                            <small class="d-block text-muted">Hoa Hậu</small>
                          </div>
                        </div>
                        <p class="mt-4 lh-180">Nhờ có <?= $NTD->site('ten_website'); ?> mà mình có thể tăng like bài viết, người theo dõi facebook tiện lợi và nhanh chóng.</p>
                        <span class="static-rating static-rating-sm">
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide p-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div>
                            <img alt="Image placeholder" src="/assets/images/9ae5c75c89064613a294f0de98bcad64.jpg" class="avatar  rounded-circle">
                          </div>
                          <div class="pl-3">
                            <h5 class="h6 mb-0">Châu Khải Phong</h5>
                            <small class="d-block text-muted">Ca Sĩ</small>
                          </div>
                        </div>
                        <p class="mt-4 lh-180">Dịch vụ ở đây rất tốt phục vụ nhanh, giúp tôi tăng tương tác bài viết lên cao.</p>
                        <span class="static-rating static-rating-sm">
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide p-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div>
                            <img alt="Image placeholder" src="/assets/images/1224587373841897296207721584911493872695661n-11051832.jpg" class="avatar  rounded-circle">
                          </div>
                          <div class="pl-3">
                            <h5 class="h6 mb-0">Nguyễn Thu Thuỷ</h5>
                            <small class="d-block text-muted">Sinh Viên</small>
                          </div>
                        </div>
                        <p class="mt-4 lh-180">Sau khi dùng dịch vụ thì tương tác facebook của mình tăng lên, đơn hàng bán ra cũng được nhiều hơn.</p>
                        <span class="static-rating static-rating-sm">
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                          <i class="star fas fa-star voted"></i>
                        </span>
                      </div>
                    </div>
                  </div>


                </div>
              </div>

              <div class="swiper-pagination w-100 mt-4 d-flex align-items-center justify-content-center"></div>
            </div>
          </div>
        </div>
      </div>
    </section>


  </div>
  <footer id="footer-main">

    <div class="container  bg-gradient-primary">

      <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
        <div class="col-md-6">
          <div class="copyright text-sm text-center text-md-left">
            &copy; <?= $NTD->site('ten_website'); ?> | All rights reserved.
          </div>
        </div>
        <div class="col-md-6">
          <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
            <li class="nav-item">
              <a class="nav-link" href="https://dribbble.com/webpixels" target="_blank">
                <i class="fab fa-dribbble"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.instagram.com/webpixelsofficial" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://github.com/webpixels" target="_blank">
                <i class="fab fa-github"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.facebook.com/webpixels" target="_blank">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </footer>

  <script src="/assets/themes/landing-font-end-4/js/purpose.core.js"></script>

  <script src="/assets/themes/landing-font-end-4/js/swiper.min.js"></script>

  <script src="/assets/themes/landing-font-end-4/js/purpose.js"></script>

  <script src="/assets/themes/landing-font-end-4/js/demo.js"></script>
</body>

</html>