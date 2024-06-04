<?php 

if (empty($_SESSION['username'])) {
    header('Location: /Login');
    exit;
} 

if ($NTD->check_ip(getip()) == "block") {
    header('Location: /BAND-IP');
    exit;
} ?>
<!DOCTYPE html>
<!--
CODE NÀY NGUYỄN QUANG HẢI MOD ! ĐỂ TÔN TRỌNG TÁC GIẢ VUI LÒNG KHÔNG XÓA DÒNG NÀY SHARE BY THANH VU
-->
<html lang="en" class="dark-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="https://subgiare.vn/sneat/assets/" data-template="vertical-menu-template-starter">

<head>
     <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="MobileOptimized" content="320">
    <meta http-equiv="content-language" content="vi" />
    <meta name="copyright" content="Nguyễn Quang Hải " />
    <meta name="author" content="Nguyễn Quang Hải " />
    <meta name="keyword" content="<?= $NTD->site('tu_khoa'); ?>" />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="content-language" content="vi" />
    <meta property="og:url" content="https://<?= $_SERVER['SERVER_NAME'] ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:domain" content="<?= $_SERVER['SERVER_NAME'] ?>" />
    <meta property="og:title" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?= $NTD->site('ten_website'); ?>" />
    <meta property="og:description" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?= $NTD->site('ten_website'); ?>" />
    <meta property="og:image" content="<?= BASE_URL('assets/img/home-banner.jpg'); ?>" />
    <meta name="og:title" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?= $NTD->site('ten_website'); ?>">
    <meta name="og:description" content="Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?= $NTD->site('ten_website'); ?>">
    <meta name="csrf-token" content="9jILCFLdUiKHj5NIvPwKO98dWO5obzeL3msiDKcQ">
    <link rel="shortcut icon" href="<?= $NTD->site('favicon'); ?>" />
    <meta name="google-site-verification" content="41TXIdT1XJSDogZVNsqKLoxUc0GAiZE0a98olFA1Kvo" />
    <meta name="csrf-token" content="4bXqD4fAV3LWSf8gcruWdBYlATC1b3S2Yf0XGUco">


    
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

    
        <link rel="stylesheet" href="/assets/css/app.css?v=1656249163">
    
    <script src="/sneat/assets/vendor/js/helpers.js?<?=rand(1,99999);?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js?<?=rand(1,99999);?> in the <head> section -->
    
    <script src="/sneat/assets/vendor/js/template-customizer.js?<?=rand(1,99999);?>"></script>
    
    <script src="/sneat/assets/js/config.js?<?=rand(1,99999);?>"></script>

<script async src='/cdn-cgi/challenge-platform/h/g/scripts/invisible.js?ts=1656244800'></script>

<style>
    html:not([dir=rtl]) .ms-2 {
   
    font-size: 20px;
}
</style>

</head>


