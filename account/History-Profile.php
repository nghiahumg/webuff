<?php require('../config/function.php');$text=getCurURL();$dichvu1=(explode('/', $text));$dich_vu=$dichvu1['5'];if($dich_vu=="sub-vip"){$dtb="sub_vip"; $action=$dichvu1['5']; $title="tăng sub vip Facebook";}elseif($dich_vu=="sub-sale"){$dtb="sub_sale"; $action=$dichvu1['5']; $title="tăng sub sale Facebook";}
elseif($dich_vu=="sub-speed"){$dtb="sub_speed"; $action=$dichvu1['5']; $title="tăng sub speed Facebook";}
elseif($dich_vu=="sub-quality"){$dtb="sub_quality"; $action=$dichvu1['5']; $title="tăng sub quality Facebook";}
?><?php require('../config/head.php'); if(empty($_SESSION['username'])){header('Location: /Login');exit;}?>
<title>Lịch sử tài khoản</title>

 <?php require('../config/nav.php');?>
  <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4">Lịch sử tài khoản</h4>
                        <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
    <div class="card-body">
        <div class="ribbon-title ribbon-primary">Nhật kí hoạt động</div>
       <div class="mt-4">
        <form action="https://subgiare.vn/profile/history">
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Nhập id, type, content tìm kiếm ..." name="search" value="">
        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
    </div>
</form>
             <div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
<thead>


<tr role="row" class="bg-primary">
<th class="text-center text-white">ID</th>
<th class="text-center text-white">Thời gian</th>
<th class="text-white">Trạng thái</th>
<th class="text-center text-white">Nội dung</th>
</tr>
</thead>
 <tbody>
                                               <?php $getlistcard = $NTD->get_list("SELECT * FROM `history_buy` WHERE `username` = '".$NTD->getUsers('username')."' AND  `url_config` = '".$url_site_name."'  ORDER BY `id` DESC"); if($getlistcard){ foreach($getlistcard as $rowucard){?>
                                                <tr class="odd">                                           
                                                    <td><b class="text-warning"><?=$rowucard['id']?></b></td>
                                                    <td><b class="text-warning"><?=$rowucard['date']?></b>
                                                </td>                                           
                                                    <td><b><?=statusorder($rowucard['status'])?></b></td>
                                                    <td><b class="text-secondary"><?=$rowucard['ma_gd']?></b> | <b class="text-secondary"><?=$rowucard['hinh_thuc']?></b> | <b class="text-secondary">Username: <?=$rowucard['username']?></b> <b class="text-secondary">đã tăng <?=number_format($rowucard['soluong'])?> <?=$rowucard['type']?> tại máy chủ (<?=$rowucard['server_buy']?>),</b><b class="text-secondary"> trừ <?=number_format($rowucard['tong_tien'])?> coin vào tài khoản</b></td>
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

                                            </tbody>
                                            
      <?php }?>                                      
</table>
</div>
                          <nav class="pt-3">
        <ul class="pagination justify-content-center flex-wrap">
            
                            <li class="page-item disabled" aria-disabled="true" aria-label="« Trước">
                    <span class="page-link" aria-hidden="true">‹</span>
                </li>
            
            
                            
                
                
                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                        
                                  
                                                                        
            
                            <li class="page-item">
                    <a class="page-link" href="/History" rel="next" aria-label="Sau »">›</a>
                </li>
                    </ul>
    </nav>
       </div>
    </div>
</div>        </div>
    </div>
                    </div>

<?php require('../config/end.php');?>