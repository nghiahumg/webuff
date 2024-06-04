<?php require('../../config/function.php');
$text = getCurURL();
$dichvu1 = (explode('/', $text));
$dich_vu = $dichvu1['5'];
if ($dich_vu == "like-post") {
    $dtb = "like_post";
    $action = $dichvu1['5'];
    $title = "Like Bài Viết";
    $link_get = "api/service/facebook/like-post-speed/list";
} elseif ($dich_vu == "cx-post") {
    $dtb = "cx_post";
    $action = $dichvu1['5'];
    $title = "Cảm Xúc Bài Viết";
} elseif ($dich_vu == "sub-sale") {
    $dtb = "sub_sale";
    $action = $dichvu1['5'];
    $title = "Follow";
    $link_get = "api/service/facebook/sub-sale/list";
} elseif ($dich_vu == "vip-like") {
    $dtb = "vip_like";
    $action = "vip-like";
    $title = "Vip like profile";
    $link_get = "api/service/facebook/vip-like-profile/list";
} elseif ($dich_vu == "sub-speed") {
    $dtb = "sub_speed";
    $action = $dichvu1['5'];
    $title = "Follow Nhanh";
    $link_get = "api/service/facebook/sub-speed/list";
} elseif ($dich_vu == "sub-vip") {
    $dtb = "sub_vip";
    $action = $dichvu1['5'];
    $title = "Follow Vip";
    $link_get = "api/service/facebook/sub-vip/list";
} elseif ($dich_vu == "sub-quality") {
    $dtb = "sub_quality";
    $action = $dichvu1['5'];
    $title = "Follow Quality";
    $link_get = "api/service/facebook/sub-quality/list";
} elseif ($dich_vu == "mem-group") {
    $dtb = "mem_gr";
    $action = $dichvu1['5'];
    $title = "Thành Viên Nhóm";
    $link_get = "api/service/facebook/member-group/list";
} elseif ($dich_vu == "cmt") {
    $dtb = "cmt";
    $action = $dichvu1['5'];
    $title = "Bình Luận";
    $link_get = "api/service/facebook/comment-speed/list";
} elseif ($dich_vu == "like-page-sale") {
    $dtb = "like_page_sale";
    $action = $dichvu1['5'];
    $title = "Like Page";
    $link_get = "api/service/facebook/like-page-sale/list";
} elseif ($dich_vu == "like-page-speed") {
    $dtb = "like_page_speed";
    $action = $dichvu1['5'];
    $title = "Like Page Nhanh";
    $link_get = "api/service/facebook/like-page-speed/list";
} elseif ($dich_vu == "like-page-quality") {
    $dtb = "like_page_quality";
    $action = $dichvu1['5'];
    $title = "Like Page Quality";
    $link_get = "api/service/facebook/like-page-quality/list";
} elseif ($dich_vu == "share") {
    $dtb = "share";
    $action = $dichvu1['5'];
    $title = "Share Facebook";
    $link_get = "api/service/facebook/share-profile/list";
} elseif ($dich_vu == "share-sale") {
    $dtb = "share_sale";
    $action = $dichvu1['5'];
    $title = "Share Facebook Giảm Giá";
    $link_get = "api/service/facebook/share-profile/list";
} elseif ($dich_vu == "mat-live") {
    $dtb = "mat_live";
    $action = $dichvu1['5'];
    $title = "Mắt Live Facebook";
    $link_get = "api/service/facebook/eye-live/list";
} elseif ($dich_vu == "view-video") {
    $dtb = "view_video";
    $action = $dichvu1['5'];
    $title = "View Video";
    $link_get = "api/service/facebook/view-video/list";
} elseif ($dich_vu == "like-cmt") {
    $dtb = "like_cmt";
    $action = $dichvu1['5'];
    $title = "Cảm Xúc Comment";
    $link_get = "api/service/facebook/like-comment/list";
} elseif ($dich_vu == "view-story") {
    $dtb = "view_story";
    $action = $dichvu1['5'];
    $title = "View Story";
    $link_get = "api/service/facebook/view-story/list";
} elseif ($dich_vu == "like-post-sale") {
    $dtb = "like_post_sale";
    $action = $dichvu1['5'];
    $title = "Like bài viết sale";

    $link_get = "api/service/facebook/like-post-sale/list";
} elseif ($dich_vu == "cmt-sale") {
    $dtb = "cmt_sale";
    $action = $dichvu1['5'];
    $title = "Comment Giảm Giá";
    $link_get = "api/service/facebook/comment-sale/list";
}
?>
<?php require('../../config/head.php');
if (empty($_SESSION['username'])) {
    header('Location: /Login');
    exit;
} else {
    $getrate = $NTD->get_list("SELECT * FROM `server_service` WHERE `code_service`='$dtb' AND `status_service`='1' AND `url_config`='" . $url_site_name . "' ");
} ?>


<title>List <?= $title; ?></title>
<script type="b9e3e84309a92aaf852234bf-text/javascript">
    const profile = {
        "id": "<?= $NTD->getUsers('id'); ?>",
        "fullname": "<?= $NTD->getUsers('name'); ?>",
        "email": "<?= $NTD->getUsers('email'); ?>",
        "username": "<?= $NTD->getUsers('username'); ?>",
        "đ": "<?= $NTD->getUsers('money'); ?>",
        "level": "<?php if ($NTD->getUsers('level') == NULL) {
                        echo 'member';
                    } else {
                        echo $NTD->getUsers('level');
                    } ?>",
        "blocked": "<?php if ($NTD->getUsers('banned') == 0) {
                        echo 'false';
                    } else {
                        echo 'true';
                    } ?>",
        "detail_blocked": "<?php if ($NTD->getUsers('banned') == 0) {
                                echo 'Active';
                            } else {
                                echo 'Block';
                            } ?>",
        "api_token": "<?= $NTD->getUsers('token'); ?>",
        "created_at": "<?= $NTD->getUsers('date'); ?>",
        "updated_at": "<?= $NTD->getUsers('lastdate'); ?>",
        "website": [],
        "avatar": "<?= $NTD->site('logo_user'); ?><?= $NTD->getUsers('username'); ?>",
        "isAdmin": "<?php if ($NTD->getUsers('capbac') == 3) {
                        echo 'true';
                    } else {
                        echo 'false';
                    } ?>",
        "position": "<?= levelmem($NTD->getUsers('capbac')); ?>",
        "levelMember": "<?= levelmem($NTD->getUsers('capbac')); ?>",
        "codeRecharge": "<?= $NTD->getUsers('cuphap'); ?>",
        "loaded": "<?= $NTD->getUsers('tongnap'); ?>",
        "pepper": "<?= $NTD->getUsers('tongtru'); ?>",
        "statusAccount": "<?php if ($NTD->getUsers('banned') == 0) {
                                echo 'Active';
                            } else {
                                echo 'Block';
                            } ?>"
    };
    const setting = {
        "title": "Hệ thống dịch vụ mạng xã hội Facebook | Instagram | Youtube | Tiktok | <?= $NTD->site('ten_website'); ?>",
        "domain": "<?= $NTD->site('ten_website'); ?>",
        "keyword": "like, sub, share, vip like, buff m\u1eaft, t\u0103ng follow, mua like, mua sub, sub r\u1ebb, hack like, hack sub, hack follow, t\u0103ng like, t\u0103ng follow, t\u0103ng share, t\u0103ng comment, ch\u00e9o like, ch\u00e9o sub, shop sub",
        "fullname_admin": "<?= $NTD->site('full_name_admin'); ?>",
        "fb_admin": "<?= $NTD->site('facebook'); ?>",
        "zalo_admin": "https:\/\/zalo.me\/<?= $NTD->site('phone_zalo'); ?>",
        "modal_system": "H\u1ec7 th\u1ed1ng ho\u00e0n to\u00e0n t\u1ef1 \u0111\u1ed9ng h\u00f3a 100%, t\u1ef1 \u0111\u1ed9ng n\u1ea1p ti\u1ec1n (n\u1ea1p \u00edt nh\u1ea5t 10k, n\u1ea1p sai n\u1ed9i dung tr\u1eeb 10% ph\u00ed). Ch\u00fac b\u1ea1n s\u1eed d\u1ee5ng d\u1ecbch v\u1ee5 vui v\u1ebb nh\u00e9."
    };
</script>
<?php require('../../config/nav.php'); ?>


 <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4">Đơn <?=$title;?></h4>
                        <div class="row">
        <div class="col-md-12">
            <div class="card mb-4 card-tab">
    <div class="card-header">
                    <div class="row">
                <div class="col-6 d-grid gap-2">
                    <a href="/dich-vu/<?=$dichvu1['4'];?>/<?=$dich_vu;?>" class="btn btn-outline-primary"><img src="/assets/images/order.svg" alt="" width="25" height="25">
                        Thêm đơn</a>
                </div>
                <div class="col-6 d-grid gap-2">
                    <a href="<?=$text;?>" class="btn btn-primary"><img src="/assets/images/list-order.svg" alt="" width="25" height="25">
                        Danh sách đơn</a>
                </div>
            </div>
            </div>
    <div class="card-body">
        <form action="<?=$text;?>">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Nhập id, code_order, link_post tìm kiếm ..." name="search" value="">
        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
    </div>
</form>
                <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr role="row" class="bg-primary">
                                        <th class="text-center text-white">ID</th>
                                        <th class="text-center text-white">Thời gian</th>
                                        <th class="text-center text-white">Mã đơn</th>
                                        <th class="text-center text-white">ID Facebook</th>
                                        <th class="text-center text-white">Máy chủ</th>
                                        <th class="text-center text-white">Số lượng</th>
                                        <th class="text-center text-white">Bắt đầu</th>
                                        <th class="text-center text-white">Đã chạy</th>
                                        <?php if ($dich_vu == "mat-live") { ?>
                                            <th class="text-center text-white">Thời Gian</th>
                                        <?php } ?>
                                        <?php if ($dich_vu == "cmt") { ?>
                                            <th class="text-center text-white">Nội dung</th>
                                        <?php } ?>
                                        <?php if ($dich_vu == "cmt-sale") { ?>
                                            <th class="text-center text-white">Nội dung</th>
                                        <?php } ?>
                                        <th class="text-center text-white">Tổng thanh toán</th>
                                        <th class="text-center text-white">Hình Thức</th>
                                        <th class="text-center text-white">Trạng thái</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $getlistbuff = $NTD->get_list("SELECT * FROM `history_buy` WHERE `type` = '$dtb' AND `username` = '$my_user' AND `url_config` = '" . $url_site_name . "' ORDER BY `id` DESC ");
                                    if ($getlistbuff) {
                                        $ia = 0;
                                        foreach ($getlistbuff as $rowhbuff) { ?>
                                            <tr class="odd">
                                                <td><?= $rowhbuff['id'] ?></td>
                                                <td><?= $rowhbuff['date'] ?></td>
                                                <td><?= $rowhbuff['ma_gd'] ?></td>
                                                <td><?= $rowhbuff['link_buy'] ?></td>
                                                <td>
                                                    <span class="badge bg-primary"><?= $rowhbuff['server_buy'] ?></span>
                                                </td>
                                                <td>
                                                    <b class="text-danger"><?= $rowhbuff['soluong'] ?></b>
                                                </td>

                                                <td>
                                                    <b><?= number_format($rowhbuff['number_star']) ?></b>
                                                </td>
                                                <td>


                                                    <?php

                                                    $sub_like = get_don($link_get, $rowhbuff['ma_gd'], $token_auto_dvfb, $URL_ADMIN);


                                                    $buffff = empty($sub_like['data']) ? $rowhbuff['number_end'] : $sub_like['data'][$ia]['buff'];
                                                    
                                                    if($sub_like['data'] != null){
                                                        foreach($sub_like['data'] as $rowdata){
                                                            $buffH = $rowdata['buff'];
                                                            
                                                            $update = $NTD->update("history_buy", [
                                                                'status' => $rowdata['status'],
                                                                'number_star' => $rowdata['start'],
                                                                'number_end' => $rowdata['buff'],
                                                            ], " `ma_gd` = '" . $rowhbuff['ma_gd'] . "' ");
                                                        }
                                                    }
                                                    
                                                    ?>
                                                    <b><?= number_format($buffH) ?></b>
                                                    <!--<b><?= json_encode($sub_like['data']) ?></b>-->

                                                </td>

                                                <?php if ($dich_vu == "mat-live") { ?>
                                                    <td>
                                                        <b>
                                                            <?= $rowhbuff['time_buy'] ?>
                                                            <sup>phút</sup>
                                                        </b>
                                                    </td>
                                                <?php } ?>
                                                <?php if ($dich_vu == "cmt") { ?>
                                                    <td>
                                                        <b><?= $rowhbuff['list_msg'] ?></b>
                                                    </td>
                                                <?php } ?>
                                                <?php if ($dich_vu == "cmt-sale") { ?>
                                                    <td>
                                                        <b><?= $rowhbuff['list_msg'] ?></b>
                                                    </td>
                                                <?php } ?>
                                                <td>
                                                    <b class="text-danger"><?= number_format($rowhbuff['tong_tien']) ?></b><sup>đ</sup>
                                                </td>
                                                <td>
                                                    <b><?= $rowhbuff['hinh_thuc'] ?></b>
                                                </td>
                                                <td>
                                                    <b><?= statusorder($rowhbuff['status']) ?></b>
                                                </td>
                                            </tr>
                                    <?php
                                            $ia++;
                                        }
                                    }else{ ?>
                                    
                                    <tr class="odd">
    <td valign="top" colspan="100%">
        <center>
            <img src="/assets/images/nodata.svg" alt="" width="80" height="80" class="pt-3">
            <p class="pt-3">Không có dữ liệu để hiển thị</p>
        </center>
    </td>
</tr>
                                    
                                    
                                    <?php }?>
                                </tbody>


                            </table>
                        </div>
    </div>
</div>
        </div>
    </div>
                    </div>
        

<?php require('../../config/end.php'); ?>