<?php require('../../config/function.php');
$text=getCurURL();
$dichvu1=(explode('/', $text));
$dich_vu=$dichvu1['5'];
if($dich_vu=="like-post"){
    $dtb="like_post";
    $action=$dichvu1['5'];
    $title="Tăng Like Bài Viết";
}
elseif($dich_vu=="cx-post"){
     $dtb="cx_post";
    $action=$dichvu1['5'];
    $title="Cảm Xúc Bài Viết";
}
elseif($dich_vu=="sub-sale"){
     $dtb="sub_sale";
    $action=$dichvu1['5'];
    $title="Follow Giảm Giá";
}
elseif($dich_vu=="sub-speed"){
     $dtb="sub_speed";
    $action=$dichvu1['5'];
    $title="Follow Chất Lượng";
}
elseif($dich_vu=="cmt"){
     $dtb="cmt";
    $action=$dichvu1['5'];
    $title="Bình Luận";
}
elseif($dich_vu=="like-page-sale"){
     $dtb="like_page_sale";
    $action=$dichvu1['5'];
    $title="Like Page Giảm Giá";
}
elseif($dich_vu=="like-page"){
     $dtb="like_page";
    $action=$dichvu1['5'];
    $title="Like Page";
}
elseif($dich_vu=="share"){
     $dtb="share";
    $action=$dichvu1['5'];
    $title="Share Facebook";
}
elseif($dich_vu=="mat-live"){
     $dtb="mat_live";
    $action=$dichvu1['5'];
    $title="Mắt Live Facebook";
}
elseif($dich_vu=="view-video"){
     $dtb="view_video";
    $action=$dichvu1['5'];
    $title="View Video";
}
elseif($dich_vu=="like-cmt"){
     $dtb="like_cmt";
    $action=$dichvu1['5'];
    $title="Cảm Xúc Comment";
}
elseif($dich_vu=="view-story"){
     $dtb="view_story";
    $action=$dichvu1['5'];
    $title="View Story";
}














?>

<?php require('../../config/head.php'); if(empty($_SESSION['username'])){header('Location: /Login');exit;}else{ 
// $selectservice = $NTD->get_row("SELECT * FROM `rate_service` WHERE `code_service` = 'like_page_sale' AND `status_service` = '1' "); 
$getrate = $NTD->get_list("SELECT * FROM `server_service` WHERE `code_service` = '$dtb' AND `status_service` = '1' AND  `url_config` = '".$url_site_name."' ");
}?>

       
<title><?=$title;?></title>

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
        <?php require('../../config/nav.php');?>
        

         <div class="page-wrapper">
            <div class="main-content">
                <!-- Page Title Start -->
               <?php
if($dich_vu=="sub-sale"){
    
?>

 <script>
        var type_menu = 'follow';
    </script>
<?php
}elseif($dich_vu=="sub-speed"){?>
<script>
        var type_menu = 'follow';
    </script>
<?php
}else{?>

 <script>
        var type_menu = 'like';
    </script>
     


<?php
}?>

         <div class="row">
                    <div class="colxl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-title-wrapper">
                            <div class="page-title-box">
                                <h4 class="page-title bold">Service</h4>
                            </div>
                            <div class="breadcrumb-list">
                                <ul>
                                    <li class="breadcrumb-link">
                                        <a href="/home"><i class="fas fa-home mr-2"></i><?=$NTD->site('ten_website');?></a>
                                    </li>
                                    <li class="breadcrumb-link active"><?=$title;?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <div class="row">
                                     
                                    <div class="col-6"><a href="<?=$text;?>" class="btn btn-primary btn-block">Thêm đơn</a>
                                    </div>
                                    <div class="col-6"><a href="<?=$text;?>/list" class="btn btn-outline-primary btn-block">Danh sách đơn</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-trang2">
                                
                                <form submit-ajax="NTD" action="<?=BASE_URL('api/facebook/buy');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
                                      <input type="hidden" name="action" value="<?=$action;?>">
                                      
                                      <input type="hidden" name="code_dich_vu" value="<?=$dtb;?>">
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 ntiendat-text-loaiposst">Link Facebook</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control form-control22 mb-3" name="id" placeholder="Nhập ID cần tăng"  onchange="convertUid()">
                                           
                                        </div>
                                    </div>
                                    
                                      <div class="form-group row">
                                        <label for="" class="col-md-3 ntiendat-text-loaiposst">Số lượng </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control form-control22 mb-3" name="soluong" onkeyup="if (!window.__cfRLUnblockHandlers) return false; bill();" value="1000" placeholder="Nhập số lượng cần tăng">
                                            
                                        </div>
                                    </div>
                                   <?php
                                    if($dich_vu=="mat-live")
                                    {?>
                                     <div class="form-group row">
                                        <label for="" class="col-md-3 ntiendat-text-loaiposst">Thời Gian </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control form-control22 mb-3" name="time_buy" onkeyup="if (!window.__cfRLUnblockHandlers) return false; bill();" value="100" placeholder="Nhập thời gian">
                                            
                                        </div>
                                    </div>
                                     <?php }?>
                                    <?php
                                    if($dich_vu=="cmt")
                                    {?>
                                      <div class="form-group row">
                                        <label for="" class="col-md-3 ntiendat-text-loaiposst">Nội dung </label>
                                        <div class="col-md-8">
                                            <textarea class="form-control form-control22 " name="list_msg" rows="5" placeholder="Nhập nội dung cần bình luận, mỗi bình luận là 1 dòng"></textarea>
                                        </div>
                                    </div>
                                    <?php }?>
                                    
                                    <div class="form-group row">
                                        <label for="" class="col-md-3 ntiendat-text-loaiposst" >Sever </label>
                                        <div class="col-md-8">
                                            <?php foreach($getrate as $showrate){?>
                                            <div class="mb-2">
                                                <div class="form-check">
                                                    <input class="form-check-input" id="<?=$showrate['server_service']?>" type="radio" name="server" checked="" onchange="if (!window.__cfRLUnblockHandlers) return false; bill();" value="<?=$showrate['server_service']?>">
                                                    <label class="form-check-label ntiendat-text-sever" for="<?=$showrate['server_service']?>"><span class="ntiendat-text-severdv">SV<?=$showrate['server_service']?></span>&nbsp;(<?=$showrate['title_service']?>)&nbsp;<span class="badge border ntiendat-text-gia"><?=$showrate['rate_service']+($showrate['rate_service']*$chietkhau/100)?> đ / lượt</span></label>
                                                </div>
                                            </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                   <div class="form-group row col-md-12">
                                          <label for="" class="col-md-3 ntiendat-text-loaiposst2">Lưu Ý</label>
                                    <div data-v-54336f02="" class="alert text-pre-wrap alert-danger-ly  col-md-8">
                                   
                                        <li style="color:#5c5c5c">1 ID không cài 2 đơn cùng 1 lúc.</li>
                                        <li style="color:#5c5c5c">
                                            Lấy đúng id Profile, trên 18 tuổi, có 4 -5 follow sẵn.</li>
                                        <li style="color:#5c5c5c">
                                            Mở chế độ ai cũng có thể kết bạn, like bài viết công khai nick, bật theo dõi.</li>
                                             <li style="color:#5c5c5c">
                                            không thể huỷ nếu cài sai, không hoàn tiền nếu bạn tạo nhầm.</li>
                                             <li style="color:#5c5c5c">
                                            Nên buff dư thêm 30 - 50% trên tổng số lượng để tránh tụt.</li>
                                            
                                            
                                   
                                    </div>
                                    </div>
                                  
                                 
                                    <div class="form-group row">
                                        <div class="col-sm-12 text-center">
                                           
                                            <div class="alert alert-success-gia ntiendat-center" role="alert">
                                                <center><h6 class="font-bold">Tổng thanh toán: <span class="bold green"><span id="total_payment" class="text-danger">0</span> đ</span></h6></center>
                                            </div>
                                        </div>
                                    </div>
                                      <button type="submit" class="btn btn-grad2 ntiendat-center" id="buy" order="Bạn có muốn thanh toán đơn hàng?, chúng tôi sẽ không hoàn tiền với đơn đã thanh toán."><img src="https://i.imgur.com/6KIB1MF.png" alt="" width="30" height="30"> Thanh toán</button>
                                </form>
                            <br></div><br><br>
                        </div>
                    </div>
                </div>
<script src="https://code.jquery.com/jquery.min.js"></script>
<script>
     let prices = JSON.parse(setting.fb_like_sale); 
    function bill() {
        let server = $('input[name=server]:checked').val();
        let soluong = $('[name=soluong]').val();
        <?php foreach($getrate as $runrate){?>
            if(server == '<?=$runrate['server_service']?>'){
            var price = <?=$runrate['rate_service']?>;
             var price2 = <?=$runrate['rate_service']+($runrate['rate_service']*$chietkhau/100)?>;
            }
        <?php }?>
        let total_payment = Math.round(soluong * price2);
        $('#total_payment').html(Intl.NumberFormat().format(total_payment));
    }
    $(document).ready(function() {
        bill();
    });
</script>
  <?php
             
             if($NTD->modal($action, status)=="ON")  {?>
             
             <div class="modal fade" id="staticBackdrop" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <b class="">THÔNG BÁO</b>
            </div>
            <div class="modal-body">
              
                <h3 class="text-modal"><center ><?=$NTD->modal($action, text_thong_bao);?></center></h3></div>
                <div class="modal-footer">
                   
                    <center><button class="btn btn-primary btn-sm" type="button" type="button" data-dismiss="modal">Tôi đã đọc</button></center></div>
        </div>
    </div>
</div>
             <?php }?>
             
             <script>
$(window).on('load', function() {
    $('#staticBackdrop').modal('show');
});
</script>
<?php require('../../config/end.php');?>