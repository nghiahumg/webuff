<?php require('../../config/function.php');$text=getCurURL();$dichvu1=(explode('/', $text));$dich_vu=$dichvu1['5'];if($dich_vu=="sub") {
    $dtb="sub_twitter";
    $action=$dichvu1['5'];
    $title="Tăng Follow Twitter";
}

elseif($dich_vu=="like") {
    $dtb="like_twitter";
    $action=$dichvu1['5'];
    $title="Like Twitter";
}?><?php require('../../config/head.php'); if(empty($_SESSION['username'])){header('Location: /Login');exit;}else{$getrate=$NTD->get_list("SELECT * FROM `server_service` WHERE `code_service`='$dtb' AND `status_service`='1' ");}?>
<title>List <?=$title;?></title>

        <?php require('../../config/nav.php');?>
        
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
<th class="text-center text-white">Link mua</th>
<th class="text-center text-white">Máy chủ</th>
<th class="text-center text-white">Số lượng</th>
<th class="text-center text-white">Tổng thanh toán</th>
<th class="text-center text-white">Hình Thức</th>
<th class="text-center text-white">Trạng thái</th>

</tr>
</thead>
 <tbody>
                                            <?php $getlistbuff = $NTD->get_list("SELECT * FROM `history_buy` WHERE `type` = '$dtb' AND `username` = '$my_user'  AND  `url_config` = '".$url_site_name."'  ORDER BY `id` DESC "); 
                                            if($getlistbuff){ foreach($getlistbuff as $rowhbuff){?>
                                            <tr class="odd">
                                                <td><?=$rowhbuff['id']?></td>
                                                <td><?=$rowhbuff['date']?></td>
                                                <td><?=$rowhbuff['ma_gd']?></td>
                                                <td><?=$rowhbuff['link_buy']?></td>
                                                <td><span class="badge badge-primary"><?=$rowhbuff['server_buy']?></span>
                                                </td>
                                                <td><b class="text-danger"><?=$rowhbuff['soluong']?></b><sup>sub</sup>
                                                </td>
                                                
                                                <td><b class="text-danger"><?=$rowhbuff['tong_tien']?></b><sup>đ</sup>
                                                </td>
                                                <td><b><?=$rowhbuff['hinh_thuc']?></b></td>
                                                <td><b><?=statusorder($rowhbuff['status'])?></b></td>
                                              
                                            </tr>
                                            <?php }}else{?>
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


<?php require('../../config/end.php');?>