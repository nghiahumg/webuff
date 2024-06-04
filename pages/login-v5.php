<?php

$text = getCurURL();
$check_url = (explode('/', $text));
$url_name = strtoupper($check_url['3']);
?>

<!DOCTYPE html>

<html lang="en" class="dark-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="https://subgiare.vn/sneat/assets/" data-template="vertical-menu-template-starter">

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
  <link rel="icon" type="image/png" href="<?= $NTD->site('favicon'); ?>" />

    
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    
    

    
 
    
    <link rel="stylesheet" href="/sneat/assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="/sneat/assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="/sneat/assets/vendor/fonts/flag-icons.css" />

    
    <link rel="stylesheet" href="/sneat/assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/sneat/assets/vendor/css/rtl/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/sneat/assets/css/demo.css" />

    
    <link rel="stylesheet" href="/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    
            <link rel="stylesheet" href="/sneat/assets/vendor/css/pages/page-auth.css" />
        <link rel="stylesheet" href="/assets/css/app.css?v=1656243970">
    
    <script src="/sneat/assets/vendor/js/helpers.js?<?=rand(1,9999999);?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    
    <script src="/sneat/assets/vendor/js/template-customizer.js?<?=rand(1,9999999);?>"></script>
    
    <script src="/sneat/assets/js/config.js?<?=rand(1,9999999);?>"></script>

<style></style>
<script async src='/cdn-cgi/challenge-platform/h/g/scripts/invisible.js?ts=1656230400'></script></head>

    <body>
        

        <div class="authentication-wrapper authentication-cover">
            <div class="authentication-inner row m-0">
                
                <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center p-5">
                    <div class="w-100 d-flex justify-content-center">
                        
                          <?php if ($url_name == "LOGIN") { ?>
                       <img src="/sneat/assets/img/illustrations/boy-with-rocket-dark.png" class="img-fluid" alt="Login image" width="700" data-app-light-img="illustrations/boy-with-rocket-light.png">
                        <?php } elseif ($url_name == "REGISTER") { ?>
                           <img src="/sneat/assets/img/illustrations/girl-with-laptop-dark.png" class="img-fluid" alt="Login image" width="700" data-app-light-img="illustrations/girl-with-laptop-dark.png">
                        
                        <?php }?>
                      
                    </div>
                </div>
                

                
                <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
                    <div class="w-px-400 mx-auto">
                        
                        <div class="app-brand mb-5">
                            <a href="/home" class="app-brand-link gap-2">
                                <span class="app-brand-logo demo">
                                    <svg width="25" viewBox="0 0 25 42" version="1.1"
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <defs>
                                            <path
                                                d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                                                id="path-1"></path>
                                            <path
                                                d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                                                id="path-3"></path>
                                            <path
                                                d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                                                id="path-4"></path>
                                            <path
                                                d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                                                id="path-5"></path>
                                        </defs>
                                        <g id="g-app-brand" stroke="none" stroke-width="1" fill="none"
                                            fill-rule="evenodd">
                                            <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                                <g id="Icon" transform="translate(27.000000, 15.000000)">
                                                    <g id="Mask" transform="translate(0.000000, 8.000000)">
                                                        <mask id="mask-2" fill="white">
                                                            <use xlink:href="#path-1"></use>
                                                        </mask>
                                                        <use fill="#696cff" xlink:href="#path-1"></use>
                                                        <g id="Path-3" mask="url(#mask-2)">
                                                            <use fill="#696cff" xlink:href="#path-3"></use>
                                                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3">
                                                            </use>
                                                        </g>
                                                        <g id="Path-4" mask="url(#mask-2)">
                                                            <use fill="#696cff" xlink:href="#path-4"></use>
                                                            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4">
                                                            </use>
                                                        </g>
                                                    </g>
                                                    <g id="Triangle"
                                                        transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                                        <use fill="#696cff" xlink:href="#path-5"></use>
                                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </span>
                                <span class="app-brand-text demo text-body fw-bolder"><?= $NTD->site('ten_website'); ?></span>
                            </a>
                        </div>
                        
                         <?php if ($url_name == "LOGIN") { ?>
                        <h4 class="mb-2">Đăng nhập tài khoản 🚀</h4>
                        <p class="mb-4">Xin mời nhập thông tin!</p>

                     <form submit-ajax="NTD" method="post" action="<?= BASE_URL('api/account/login'); ?>">

                                <o id="callback"></o>
                                <input type="hidden" name="_token" value="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">                     <div class="mb-3">
                                <label for="username" class="form-label">Tài khoản</label>
                                <input type="text" class="form-control" id="username" name="username" value=""
                                    placeholder="Vui lòng nhập tài khoản" autofocus />
                            </div>
                            <div class="mb-3 form-password-toggle">
                                <label class="form-label" for="password">Mật khẩu</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password"  value=""
                                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                        aria-describedby="password" />
                                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms"
                                        checked="checked" />
                  <label class="form-check-label"
                                        for="terms-conditions">
                                    Ghi nhớ.
                                    </label>
                                </div>
                            </div>
                            <button  class="btn btn-primary d-grid w-100" type="submit" callback="rescallback">Đăng nhập</button>
                        </form>

                        <p class="text-center pt-3">
                            <span>Bạn chưa có tài khoản?</span>
                            <a href="/Register">
                                <span>đăng kí</span>
                            </a>.
                        </p>
                        
                         <?php } elseif ($url_name == "REGISTER") { ?>
                           <h4 class="mb-2">Đăng kí tài khoản 🚀</h4>
                        <p class="mb-4">Xin mời nhập thông tin!</p>
                         
                        <form submit-ajax="NTD" method="post" action="<?= BASE_URL('api/account/register'); ?>">
                                <o id="callback"></o>

                                <input type="hidden" name="_token" value="EAAGNO4a7r2wBACZCsE13XcejbEqLa6Oia7ndpaKLBmAbwBYUDLL6thCRh9OzP">
    <div class="mb-3">
        <label for="fullname" class="form-label">Họ và tên</label>
        <input type="text" class="form-control" id="fullname" name="name" value="" placeholder="Vui lòng nhập họ và tên" autofocus="">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="" placeholder="Vui lòng nhập địa chỉ email" autofocus="">
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Tài khoản</label>
        <input type="text" class="form-control" id="username" name="username" value="" placeholder="Vui lòng nhập tài khoản" autofocus="">
    </div>
    <div class="mb-3 form-password-toggle">
        <label class="form-label" for="password">Mật khẩu</label>
        <div class="input-group input-group-merge">
            <input type="password" id="password" class="form-control" name="password" value="" placeholder="············" aria-describedby="password">
            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
        </div>
    </div>

    <div class="mb-3">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" checked="checked" />
                  <label class=" form-check-label "=" " for="terms-conditions ">
                                    Tôi đồng ý các điều khoản.</label>
                                    
                                </div>
                            </div>
                            <button class="btn btn-primary d-grid w-100 " type="submit" callback="rescallback">Đăng kí</button>
                        </form>
                              <p class="text-center pt-3">
                            <span>Bạn đã có tài khoản?</span>
                            <a href="/Login">
                                <span>đăng nhập</span>
                            </a>.
                        </p>
                         <?php }?>

                    </div>
                </div>
                
            </div>
        </div>

<script>function rescallback(response){if (response.status === true){$('.rescallback').show();$('#callback').html(response.data);window.location.href = "<?=BASE_URL('home');?>";/* setTimeout(() => {window.location.href = "<?=BASE_URL('home');?>";}, 2000); */}else{$('.rescallback').hide();$('#callback').html(response.data);}}</script>


<script src="/sneat/assets/vendor/libs/jquery/jquery.js?<?=rand(1,9999999);?>"></script>
<script src="/sneat/assets/vendor/libs/popper/popper.js?<?=rand(1,9999999);?>"></script>
<script src="/sneat/assets/vendor/js/bootstrap.js?<?=rand(1,9999999);?>"></script>
<script src="/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js?<?=rand(1,9999999);?>"></script>

<script src="/sneat/assets/vendor/libs/hammer/hammer.js?<?=rand(1,9999999);?>"></script>

<script src="/sneat/assets/vendor/js/menu.js?<?=rand(1,9999999);?>"></script>



<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script src="/sneat/assets/js/main.js?<?=rand(1,9999999);?>"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/7.0.3/pusher.min.js"></script>



    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
    <script src="<?=BASE_URL('assets/js/backend-bundle.min.js');?>" type="b9e3e84309a92aaf852234bf-text/javascript"></script>
    <script src="<?=BASE_URL('assets/js/all.min.js?'.time());?>" type="b9e3e84309a92aaf852234bf-text/javascript"></script>
    
    <script type="b9e3e84309a92aaf852234bf-text/javascript">
        const pusher = new Pusher('668e4c588c763d16fcc4', {
            cluster: 'ap1'
        });
    </script>
    
    <script src="<?=BASE_URL('assets/js/function2.vendors3243242.js?'.time());?>" type="b9e3e84309a92aaf852234bf-text/javascript"></script>
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
