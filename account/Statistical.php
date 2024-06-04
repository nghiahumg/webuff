<?php require('../config/function.php');?>

<?php require('../config/head.php'); if(empty($_SESSION['username'])){header('Location: /auth/login');exit;}?>
<title>Thống Kê Dòng Tiền bậc</title>
<script type="b9e3e84309a92aaf852234bf-text/javascript">
    const profile = {
        "id": "<?=$NTD->getUsers('id');?>",
        "fullname": "<?=$NTD->getUsers('name');?>",
        "email": "<?=$NTD->getUsers('email');?>",
        "username": "<?=$NTD->getUsers('username');?>",
        "đ": "<?=$NTD->getUsers('money');?>",
        "level": "<?php if($NTD->getUsers('level') == NULL){echo 'member';}else{echo $NTD->getUsers('level');}?>",
        "blocked": "<?php if($NTD->getUsers('banned') == 0){echo 'false';}else{echo 'true';}?>",
        "detail_blocked": "<?php if($NTD->getUsers('banned') == 0){echo 'Active';}else{echo 'Block';}?>",
        "api_token": "<?=$NTD->getUsers('token');?>",
        "created_at": "<?=$NTD->getUsers('date');?>",
        "updated_at": "<?=$NTD->getUsers('lastdate');?>",
        "website": [],
        "avatar": "<?=$NTD->site('logo_user');?><?=$NTD->getUsers('username');?>",
        "isAdmin": "<?php if($NTD->getUsers('capbac') == 3){echo 'true';}else{echo 'false';}?>",
        "position": "<?=levelmem($NTD->getUsers('capbac'));?>",
        "levelMember": "<?=levelmem($NTD->getUsers('capbac'));?>",
        "codeRecharge": "<?=$NTD->getUsers('cuphap');?>",
        "loaded": "<?=$NTD->getUsers('tongnap');?>",
        "pepper": "<?=$NTD->getUsers('tongtru');?>",
        "statusAccount": "<?php if($NTD->getUsers('banned') == 0){echo 'Active';}else{echo 'Block';}?>"
    };
    const setting = {
        "title": "Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?=$NTD->site('ten_website');?>",
        "domain": "<?=$NTD->site('ten_website');?>",
        "keyword": "like, sub, share, vip like, buff m\u1eaft, t\u0103ng follow, mua like, mua sub, sub r\u1ebb, hack like, hack sub, hack follow, t\u0103ng like, t\u0103ng follow, t\u0103ng share, t\u0103ng comment, ch\u00e9o like, ch\u00e9o sub, shop sub",
        "fullname_admin": "<?=$NTD->site('full_name_admin');?>",
        "fb_admin": "<?=$NTD->site('facebook');?>",
        "zalo_admin": "https:\/\/zalo.me\/<?=$NTD->site('phone_zalo');?>",
        "modal_system": "H\u1ec7 th\u1ed1ng ho\u00e0n to\u00e0n t\u1ef1 \u0111\u1ed9ng h\u00f3a 100%, t\u1ef1 \u0111\u1ed9ng n\u1ea1p ti\u1ec1n (n\u1ea1p \u00edt nh\u1ea5t 10k, n\u1ea1p sai n\u1ed9i dung tr\u1eeb 10% ph\u00ed). Ch\u00fac b\u1ea1n s\u1eed d\u1ee5ng d\u1ecbch v\u1ee5 vui v\u1ebb nh\u00e9."
    };
</script>
        <?php require('../config/nav.php');?>
        
<div class="layout-wrapper">
<div class="header">
<div class="menu-toggle-btn">
<a href="#">
<i class="bi bi-list"></i>
</a>
</div>
<a href="/" class="logo">
<img width="130" src="<?=$NTD->site('logo');?>" alt="logo">
</a>
<div class="page-title">Thống kê dòng tiền</div>
<form class="search-form">
<div class="input-group">
<span class="input-group-text">
<i class="bi bi-search"></i>
</span>
<input type="text" class="form-control" placeholder="Nhập từ khóa tìm kiếm...">
<a href="#" class="btn btn-outline-light close-header-search-bar">
<i class="bi bi-x"></i>
</a>
</div>
</form>
<div class="header-bar ms-auto">
<ul class="navbar-nav justify-content-end gap-3">
<li class="nav-item">
<a href="#" class="nav-link nav-link-notify" data-count="2" data-sidebar-target="#notifications">
<i class="bi bi-bell icon-lg"></i>
</a>
</li>
<li>
<a href="#" data-bs-toggle="dropdown" class="btn btn-white py-1 px-2 dropdown-toggle custom-shadow">
<span class="avatar avatar-sm me-2">
<img src="https://ui-avatars.com/api/?background=random&amp;name=<?=$NTD->getUsers('name');?>" class="rounded-circle" alt="avatar">
</span>
<span class="d-none d-md-inline"><?=$NTD->getUsers('name');?></span>
</a>
<ul class="dropdown-menu">
<li><a class="dropdown-item" href="/Profile">Tài khoản của tôi</a>
</li>
<li>
<hr class="dropdown-divider">
</li>
<li><a class="dropdown-item" href="/Logout">Đăng xuất</a></li>
</ul>
</li>
</ul>
</div>
<div class="header-mobile-buttons">
<a href="#" class="search-bar-btn">
<i class="bi bi-search"></i>
</a>
<a href="#" class="actions-btn">
<i class="bi bi-three-dots"></i>
</a>
</div>
</div>
<div class="content">
<div class="row">
<div class="col-md-4 col-12">
<div class="card mb-4">
<div class="card-body d-flex flex-column text-center gap-2">
<div class="display-7">
<i class="fa fa-money text-success"></i>
</div>
<div class="lead">Số dư <b class="text-danger"><?=format_money($NTD->getUsers('money'));?></b> đ</div>
</div>
</div>
</div>
<div class="col-md-4 col-12">
<div class="card mb-4">
<div class="card-body d-flex flex-column text-center gap-2">
<div class="display-7">
<i class="fa fa-money text-primary"></i>
</div>
<div class="lead">Đã nạp <b class="text-danger"><?=format_money($NTD->getUsers('tongnap'));?></b> đ</div>
</div>
</div>
</div>
<div class="col-md-4 col-12">
<div class="card mb-4">
<div class="card-body d-flex flex-column text-center gap-2">
<div class="display-7">
<i class="fa fa-money text-info"></i>
</div>
<div class="lead">Đã tiêu <b class="text-danger"><?=format_money($NTD->getUsers('tongtru'));?></b> đ</div>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="card mb-4">
<div class="card-body">
<div class="ribbon-title ribbon-primary">Biểu Đồ Thống Kê</div>
<div class="mt-4">
<canvas id="myChart"></canvas></div>
</div>
</div> </div>
</div>

</div>

</div>




           
    
    <script src="<?=BASE_URL('assets/js/chart.js');?>" type="text/javascript"></script>
    <script type="text/javascript">
        const data = {
            labels: ["<?=date('Y-m-d', time())?>"],
            datasets: [{
                label: 'Tổng nạp',
                data: ["<?=$NTD->getUsers('tongnap');?>"],
                borderColor: '#06d6a0',
                yAxisID: 'y',
            }, {
                label: 'Tổng tiêu',
                data: ["<?=$NTD->getUsers('tongtru');?>"],
                borderColor: '#ef476f',
                yAxisID: 'y1',
            }]
        };
        const config = {
            type: 'line',
            data: data,
            options: {
                responsive: true,
                interaction: {
                    mode: 'index',
                    intersect: false,
                },
                stacked: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Doanh thu tháng này <?=format_money($NTD->getUsers('money'));?> VNĐ'
                    }
                },
                scales: {
                    y: {
                        type: 'linear',
                        display: true,
                        position: 'left',
                    },
                    y1: {
                        type: 'linear',
                        display: true,
                        position: 'right',
                        grid: {
                            drawOnChartArea: false,
                        },
                    },
                }
            },
        };
        new Chart(document.getElementById('myChart'), config);
    </script>


<?php require('../config/end.php');?>