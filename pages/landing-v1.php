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
    <meta property="fb:app_id" content="" />
    <meta name="csrf-token" content="9jILCFLdUiKHj5NIvPwKO98dWO5obzeL3msiDKcQ">
    <link rel="shortcut icon" type="image/png" href="<?= $NTD->site('favicon'); ?>">
    <meta name="it-rating" content="it-rat-cd303c3f80473535b3c667d0d67a7a11" />
    <meta name="cmsmagazine" content="3f86e43372e678604d35804a67860df7" />
    <link rel="stylesheet" type="text/css" href="/assets/landing-v1/css/first-screen.css?<?= rand(1, 9999999999); ?>" />

    <link rel="preload " href="fonts/AleoBold.woff2" as="font" crossorigin>
    <link rel="preload " href="fonts/Lato/LatoRegular.woff2" as="font" crossorigin>
    <link rel="preload " href="fonts/Lato/LatoBold.woff2" as="font" crossorigin>
    <link rel="preload" href="/assets/landing-v1/css/_content.scss" as="style">
    <link rel="preload" href="/assets/landing-v1/css/_content.scss" as="style">
    <link rel="preload" href="/assets/landing-v1/css/style.css" as="style">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body class="home loaded">
    <div class="main-wrapper">
        <main class="content">
            <div class="first-screen section-screen-main">
                <div class="section-screen-main__bg" style="background-image: url(/assets/images/main.svg);"></div>
                <div class="wrapper">
                    <div class="screen-main">
                        <div class="section-heading"><span>Chào Mừng Đến Với <?= $NTD->site('ten_website'); ?></span></div>
                        <h2 class="h3 h3-main">Hệ thống dịch vụ mạng xã hội giá rẻ !</h2>
                        <div class="screen-main__text">Chúng tôi chuyên cung cấp các dịch vụ để tăng tương tác , bán hàng hiệu quả trên các Mạng xã hội như Facebook, Instagram, Tiktok...</div>
                        <a href="/Login" class="btn btn_learn">Đăng Nhập</a>
                    </div>
                </div>
            </div>

            <div class="section-services-main" id="services">
                <div class="wrapper">
                    <div class="services">
                        <div class="services__item">
                            <div class="services__decor"></div>
                            <div class="services__icon">
                                <img src="/assets/images/external-rocket-achievements-flaticons-flat-flat-icons-2.png" alt="" loading="lazy">
                            </div>
                            <div class="services__title">Tốc Độ Xử Lý Cao</div>
                            <div class="services__text">Dịch vụ của chúng tôi được tự động hóa và thường chỉ mất vài phút cho những giao dịch của bạn.</div>
                        </div>
                        <div class="services__item">
                            <div class="services__decor"></div>
                            <div class="services__icon">
                                <img src="/assets/images/external-dollar-finance-kiranshastry-lineal-color-kiranshastry.png" alt="" loading="lazy">
                            </div>
                            <div class="services__title">Chất Lượng - Giá Hợp Lý</div>
                            <div class="services__text">Chúng tôi mang đến cho bạn một trang dịch vụ mạng xã hội chất lượng, chi phí dịch vụ rất rẻ.</div>
                        </div>
                        <div class="services__item">
                            <div class="services__decor"></div>
                            <div class="services__icon">
                                <img src="/assets/images/idea-bank.png" alt="" loading="lazy">
                            </div>
                            <div class="services__title">Phương Thức Thanh Toán</div>
                            <div class="services__text">Chúng tôi có một phương pháp Phổ biến là ngân hàng, momo và nhiều phương pháp khác có thể được đáp ứng theo yêu cầu.</div>
                        </div>
                        <div class="services__item">
                            <div class="services__decor"></div>
                            <div class="services__icon">
                                <img src="/assets/images/hper.png" alt="" loading="lazy">
                            </div>
                            <div class="services__title">Hỗ Trợ 24/7</div>
                            <div class="services__text">Bạn có thể tin tưởng vào hệ thống hỗ trợ 24/7 của chúng tôi, chúng tôi sẽ giải quyết mọi thắc mắc của bạn.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-about" id="about">
                <div class="wrapper">
                    <div class="about">
                        <div class="about__img">
                            <div class="about__picture">
                                <img data-src="/assets/images/way.svg" alt="" class="js-lazy" src="/assets/images/way.svg">
                            </div>
                        </div>
                        <div class="about__content">
                            <div class="section-heading"><span>
                                    Giới thiệu</div>
                            <div class="section-subtitle">Dịch vụ Tiếp thị <?= $NTD->site('ten_website'); ?> tốt nhất!</div>
                            <div class="content-block__text">
                                <p>Chúng tôi cung cấp dịch vụ Bảng điều khiển <?= $NTD->site('ten_website'); ?> rẻ nhất trong số các đối thủ cạnh tranh của chúng tôi. Nếu bạn đang tìm kiếm một cách cực kỳ dễ dàng để cung cấp các dịch vụ tiếp thị bổ sung cho khách hàng hiện tại và khách hàng mới của mình, thì không cần tìm đâu xa! trang web của chúng tôi cung cấp điều đó và hơn thế nữa!

                                    Bạn có thể bán lại các dịch vụ của chúng tôi trong bất kỳ trang web nào hoặc Liên kết trang web của bạn thông qua API và bắt đầu bán lại các dịch vụ của chúng tôi trực tiếp bắt đầu xây dựng mối quan hệ bền chặt hơn và giúp bạn kiếm được lợi nhuận lớn đồng thời. Chúng tôi làm công việc để bạn có thể tập trung vào những gì bạn làm tốt nhất! Khi bạn phát triển, lợi nhuận của bạn tăng lên mà không cần phải thuê thêm người. Điều này cho phép bạn mở rộng hoạt động kinh doanh của mình mà không phải trả mọi chi phí và các vấn đề đau đầu thường liên quan đến việc phát triển lớn hơn!</p>
                            </div>
                            <a href="tel:<?= $NTD->site('phone_zalo'); ?>" class="about__btn play-video js-fancybox">
                                <span class="play-icon">
                                    <i class="fa fa-phone-square"></i>
                                </span>
                                <div class="play-video__text">
                                    <div class="play-video__title">Liên Hệ Ngay</div>
                                    <div class="play-video__link">hệ thống hỗ trợ 24/7</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="about-details">
                        <div class="about-details__item">
                            <div class="about-details__val">$ 12k<span class="about-details__val_plus">+</span></div>
                            <div class="about-details__text">Số người tiếp cận</div>
                            <div class="about-details__decor"></div>
                        </div>
                        <div class="about-details__item">
                            <div class="about-details__val">7,3k<span class="about-details__val_plus">+</span></div>
                            <div class="about-details__text">Số người đã sử dụng</div>
                            <div class="about-details__decor"></div>
                        </div>
                        <div class="about-details__item">
                            <div class="about-details__val">6.7k<span class="about-details__val_plus">+</span></div>
                            <div class="about-details__text">Số khách tin tưởng</div>
                            <div class="about-details__decor"></div>
                        </div>
                        <div class="about-details__item">
                            <div class="about-details__val">1,254<span class="about-details__val_plus">+</span></div>
                            <div class="about-details__text">Dịch vụ thành công</div>
                            <div class="about-details__decor"></div>
                        </div>
                    </div>
                </div>
                <div class="about-decor about-decor_1"></div>
                <div class="about-decor about-decor_2"></div>
                <div class="about-decor about-decor_3"></div>
            </div>
            <div class="section-get">
                <div class="wrapper">
                    <div class="section-heading h-center"><span>Service</span></div>
                    <div class="h-decor-1">
                        <h2 class="h2 h-center"><span>Chuỗi Dịch Vụ Của Hệ Thống</span></h2>

                    </div>
                    <div class="get-list">
                        <div class="get-list__item">
                            <div class="get-list__heading">
                                <div class="get-list__icon">
                                    <img src="/assets/images/facebook.svg" alt="" loading="lazy">
                                </div>
                                <div class="get-list__title">Facebook</div>
                            </div>
                            <div class="get-list__text">Hệ thống cung cấp các dịch vụ tăng Like, Share, Comment, Follow Facebok...</div>
                        </div>
                        <div class="get-list__item">
                            <div class="get-list__heading">
                                <div class="get-list__icon">
                                    <img src="/assets/svg/intas.png" alt="" loading="lazy">
                                </div>
                                <div class="get-list__title">Instagram</div>
                            </div>
                            <div class="get-list__text">Chúng tôi cung cấp dịch vụ giúp bạn tăng tương tác, tăng sự nổi tiếng thuận tiền bán hàng.</div>
                        </div>
                        <div class="get-list__item">
                            <div class="get-list__heading">
                                <div class="get-list__icon">
                                    <img src="/assets/svg/tiktok-logo.png" alt="" loading="lazy">
                                </div>
                                <div class="get-list__title">TikTok</div>
                            </div>
                            <div class="get-list__text">Giúp bạn tăng Tim, Follow, Comment một cách nhanh chóng tiện lợi.</div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="section-consultation">
                <div class="section-consultation__bg js-lazy" data-src="/assets/images/bg-2.svg"></div>
                <div class="wrapper">
                    <div class="consultation-form-wrap">
                        <div class="consultation-form">
                            <div class="section-heading"><span>
                                    Contact</span></div>
                            <h2 class="h2">Liên hệ với chúng tôi</h2>

                            <div class="consultation-form__form">
                                <form onsubmit="successSubmit();return false;">
                                    <div class="box-fileds">
                                        <div class="box-filed">
                                            <input type="text" placeholder="First name">
                                        </div>
                                        <div class="box-filed">
                                            <input type="text" placeholder="Second name">
                                        </div>
                                        <div class="box-filed">
                                            <input type="tel" placeholder="Enter your phone">
                                        </div>
                                        <div class="box-filed">
                                            <input type="email" placeholder="Enter your email">
                                        </div>
                                        <div class="box-filed box-filed_btn">
                                            <input type="submit" class="btn" value="Submit">
                                        </div>
                                        <div class="box-filed box-field__accept">
                                            <label class="checkbox-element">
                                                <input type="checkbox">
                                                <span class="checkbox-text">I accept the <a href="#" target="_blank">Terms and Conditions.</a></span>
                                            </label>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="consultation-img">
                            <img data-src="/assets/images/consultation.svg" alt="" class="js-lazy" src="/assets/images/consultation.svg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-logos">
                <div class="wrapper">
                    <div class="logos">
                        <a href="#" target="_blank" class="logos__item">
                            <img data-src="img/examples/logo-1.svg" alt="" class="js-lazy" src="/assets/images/facebook.svg">
                        </a>
                        <a href="#" target="_blank" class="logos__item">
                            <img data-src="img/examples/logo-2.svg" alt="" class="js-lazy" src="/assets/svg/intas.png">
                        </a>
                        <a href="#" target="_blank" class="logos__item">
                            <img data-src="img/examples/logo-3.svg" alt="" class="js-lazy" src="/assets/svg/tiktok-logo.png">
                        </a>
                        <a href="#" target="_blank" class="logos__item">
                            <img data-src="/assets/images/telegram-app--v1.png" alt="" class="js-lazy" src="/assets/images/youtube-play.png">
                        </a>
                        <a href="#" target="_blank" class="logos__item">
                            <img data-src="/assets/images/telegram-app--v1.png" alt="" class="js-lazy" src="/assets/images/telegram-app--v1.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="section-steps" id="steps">
                <div class="wrapper">
                    <div class="section-heading h-center"><span>steps</span></div>
                    <div class="h-decor-3">
                        <h2 class="h2 h-center"><span>Chỉ với các bước đơn giản để sử dụng dịch vụ</span></h2>
                    </div>
                    <div class="steps">
                        <div class="steps__item">
                            <span class="steps__count">01</span>
                            <div class="steps__icon">
                                <img data-src="/assets/images/add-user-male--v1.png" alt="" loading="lazy" width="80px" class="js-lazy" src="/assets/images/add-user-male--v1.png">
                            </div>
                            <div class="steps__title">Đăng Kí</div>
                        </div>
                        <div class="steps__item">
                            <span class="steps__count">02</span>
                            <div class="steps__icon">
                                <img data-src="/assets/images/login-rounded-right.png" width="80px" alt="" loading="lazy" class="js-lazy" src="/assets/images/login-rounded-right.png">
                            </div>
                            <div class="steps__title">Đăng Nhập</div>
                        </div>
                        <div class="steps__item">
                            <span class="steps__count">03</span>
                            <div class="steps__icon">
                                <img data-src="/assets/images/green-earth.png" alt="" loading="lazy" width="80px" class="js-lazy" src="/assets/images/green-earth.png">
                            </div>
                            <div class="steps__title">Chọn Dịch Vụ</div>
                        </div>
                        <div class="steps__item">
                            <span class="steps__count">04</span>
                            <div class="steps__icon">
                                <img data-src="/assets/images/cloud-checked.png" alt="" loading="lazy" width="80px" class="js-lazy" src="/assets/images/cloud-checked.png">
                            </div>
                            <div class="steps__title">Thanh Toán & Tận Hưởng</div>
                        </div>
                    </div>

                </div>
                <br>
                <div class="section-newsletter">
                    <div class="section-newsletter__bg js-lazy" src="/assets/images/bg-3.svg"></div>
                    <div class="wrapper">
                        <div class="newsletter">
                            <div class="newsletter__content">
                                <h3 class="h3">Contact</h3>
                                <div class="newsletter__text">
                                    <p>Hãy điền gamil của bạn tôi sẽ gửi cho bạn cách tăng tương tác.</p>
                                </div>
                                <form>
                                    <div class="box-fileds-newsletter">
                                        <div class="box-filed box-filed_1">
                                            <input type="email" placeholder="Enter your email">
                                        </div>
                                        <div class="box-filed box-filed_submit">
                                            <input type="submit" class="btn" value="Subscribe">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="newsletter__img">
                                <div class="newsletter__picture">
                                    <img data-src="/assets/images/newsletter.svg" alt="" class="js-lazy" src="/assets/images/newsletter.svg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-testimonials" id="testimonials">
                    <div class="wrapper">
                        <div class="testimonials">
                            <div class="testimonials__img">
                                <div class="testimonials__picture">
                                    <img data-src="/assets/images/testimonials.svg" alt="" class="js-lazy" src="/assets/images/testimonials.svg">
                                </div>
                            </div>
                            <div class="testimonials__content">
                                <div class="section-heading"><span>reviwer</span></div>
                                <div class="h2">Testimonials</div>
                                <div class="swiper-container reviews-slider js-slider-1">
                                    <div class="swiper-wrapper" id="swiper-wrapper-08bf88f3622739d6" aria-live="off" style="transition-duration: 400ms;">
                                        <div class="swiper-slide  swiper-slide-visible swiper-slide-active" role="group" aria-label="1 / 2" style="width: 410px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 400ms;">
                                            <div class="testimonials-card__text">
                                                <p>“Sau khi dùng dịch vụ thì tương tác facebook của mình tăng lên, đơn hàng bán ra cũng được nhiều hơn.”</p>
                                            </div>
                                            <div class="author">
                                                <img class="author__img js-lazy loaded" data-src="/assets/images/person3.dec37eb7.png" src="/assets/images/person3.dec37eb7.png" alt="" data-was-processed="true">
                                                <div class="author__details">
                                                    <div class="author__title">LÊ THỊ HỒNG</div>
                                                    <div class="author__position">Sinh Viên</div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </main>
        <header class="header" id="header">
            <div class="header-top">
                <div class="wrapper">
                    <div class="socials ">
                        <div class="footer-title">Contact:</div>
                        <div class="socials">
                            <div class="socials__item">
                                <a href="<?= $NTD->site('facebook'); ?>" target="_blank" class="socials__link">Facebook</a>
                            </div>
                            <div class="socials__item">
                                <a href="https://zalo.me/<?= $NTD->site('phone_zalo'); ?>" target="_blank" class="socials__link">Zalo</a>
                            </div>

                        </div>
                    </div>
                    <div class="phone-item">
                        <div class="footer-title header-title-phone">Hotline !</div>
                        <div class="footer-phone__item">
                            <i class="fa fa-phone-square"></i><a href="tel:<?= $NTD->site('phone_zalo'); ?>"><?= $NTD->site('phone_zalo'); ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="nav-logo">
                    <a href="/" class="logo">
                        <img src="<?= $NTD->site('logo'); ?>" alt="Logo">
                    </a>
                </div>
                <div class="header-right">
                    <div id="mainNav" class="menu-box">
                        <nav class="nav-inner">
                            <ul class="main-menu js-menu" id="mainMenu">
                                <li>
                                    <a href="#services">Services</a>
                                </li>
                                <li>
                                    <a href="#about">About</a>
                                </li>
                                <li>
                                    <a href="#steps">Steps</a>
                                </li>
                                <li>
                                    <a href="#price">Price</a>
                                </li>
                                <li>
                                    <a href="#testimonials">Testimonials</a>
                                </li>
                                <li>
                                    <a href="#blog">Blog</a>
                                </li>
                            </ul>
                        </nav>

                    </div>

                </div>
                <div class="bars-mob js-button-nav">
                    <div class="hamburger">
                        <span></span><span></span><span></span>
                    </div>
                    <div class="cross">
                        <span></span><span></span>
                    </div>
                </div>
            </div>
        </header>
        <footer id="footer" class="footer footer-2">


            <div class="footer-bottom">
                <div class="wrapper">
                    <div class="copyrights">© <?= $NTD->site('ten_website'); ?> | All rights reserved. </div>
                    <div class="footer-menu">
                        <ul class="js-menu-footer">
                            <li>
                                <a href="#services">Services</a>
                            </li>
                            <li>
                                <a href="#about">About</a>
                            </li>
                            <li>
                                <a href="#steps">Steps</a>
                            </li>
                            <li>
                                <a href="#price">Price</a>
                            </li>
                            <li>
                                <a href="#testimonials">Testimonials</a>
                            </li>
                            <li>
                                <a href="#blog">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- BODY EOF   -->
    <!-- popups -->

    <script>
        var body = document.body;
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
            body.classList.add('ios');
        } else {
            body.classList.add('web')
        }
        setTimeout(function() {
            body.classList.add("content-loaded");
        }, 50)
    </script>
    <link rel="stylesheet" type="text/css" href="/assets/landing-v1/css/style.css?<?= rand(1, 9999999999); ?>" />
    <link rel="stylesheet" type="text/css" href="/assets/landing-v1/css/app.css?<?= rand(1, 9999999999); ?>" />
    <script src="/assets/landing-v1/js/jquery-3.5.1.min.js" defer></script>
    <script src="/assets/landing-v1/js/components/jquery.lazy.min.js" defer></script>
    <script src="/assets/landing-v1/js/components/jquery.fancybox.min.js" defer></script>
    <script src="/assets/landing-v1/js/components/jquery.singlePageNav.min.js" defer></script>
    <script src="/assets/landing-v1/js/components/swiper.js" defer></script>
    <script src="/assets/landing-v1/js/custom.js" defer></script>
</body>

</html>