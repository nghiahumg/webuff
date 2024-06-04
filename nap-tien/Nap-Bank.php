<?php require('../config/function.php');?>
<?php require('../config/head.php'); if(empty($_SESSION['username'])){header('Location: /Login');exit;}?>
<title>Nạp tiền chuyển khoản</title>

 <?php require('../config/nav.php');?>
        
              
  <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Nạp tiền chuyển khoản</h4>
    <div class="row">
        <div class="col-md-12">

            <div class="card mb-4 card-tab">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6 d-grid gap-2">
                            <a href="/Nap-Tien" class="btn btn-primary"><img src="/assets/images/bank.svg" alt="" width="25" height="25">
                        Ngân hàng</a>
                        </div>
                     
                        <div class="col-6 d-grid gap-2">
                            <a href="/Nap-The" class="btn btn-outline-primary"><img src="/assets/images/card.svg" alt="" width="25" height="25">
                        Thẻ cào</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <h5 class="text-primary">Tỷ giá: 1 VNĐ = 1 coin</h5>
                        </div>
                        <div class="col-md-12">
                            <div class="alert text-white bg-secondary mb-3" role="alert">
                                - Bạn vui lòng chuyển khoản chính xác nội dung để được cộng tiền nhanh nhất.<br> - Nếu sau 10 phút từ khi tiền trong tài khoản của bạn bị trừ mà vẫn chưa được cộng tiền vui liên hệ Admin để được hỗ trợ.<br> - Vui lòng không
                                nạp từ bank khác qua bank này (tránh lỗi).
                            </div>
                        </div>
                         <?php $getbcnank = $NTD->get_list("SELECT * FROM `bank` WHERE `status` = '1' AND  `url_config` = '".$url_site_name."'"); foreach ($getbcnank as $b){?>
                        <div class="mb-3 col-sm-6">
                            <h5 class="text-info text-center"><img src="<?=$b['img']?>" height="45px"></h5>
                            <div class="alert text-white bg-success " role="alert">
                                <div>
                                    Số tài khoản: <b id="stk_<?=$b['id']?>" class="text-right text-primary" onclick="coppy('stk_<?=$b['id']?>');"><?=$b['namestk']?></b>
                                </div>
                                <div>
                                    Chủ tài khoản: <b class="text-right"><?=$b['namectk']?></b>
                                </div>
                                <div>
                                    Nạp tối thiểu: <b class="text-right"><?=format_money($b['id_xep'])?> VNĐ</b>
                                </div>
                                <div>
                                    Chú ý: <b class="text-right">Nạp tốc độ 5s -&gt; 30s, khung giờ 22h -&gt; 24h có thể
                                    delay.</b>
                                </div>
                            </div>
                        </div>
 <?php }?>  
                        
                        
                        <div class="col-md-12">
                            <h5 class="text-primary">Nội dung chuyển khoản</h5>
                            <div class="alert text-white bg-info mb-3" role="alert">
                                <h4 class="text-white bg-heading font-weight-semi-bold text-center"><a href="javascript:;" onclick="coppy('content_codeRecharge');"><b id="content_codeRecharge"><?=$NTD->site('cuphap');?><?=$NTD->getUsers('id');?></b> <i class="fa fa-clone"></i></a></h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="alert text-white bg-warning mb-3" role="alert">
                                <h5 class="text-white bg-heading font-weight-semi-bold">Lưu ý</h5>
                                <p>
                                    - Cố tình nạp dưới mức nạp quy định, mất trắng tiền <br> - Nạp sai cú pháp, sai số tài khoản, sai ngân hàng sẽ bị trừ 30% phí giao dịch. Vd: nạp 100k sai nội dung sẽ chỉ nhận được 70k coin và phải liên hệ admin để cộng tay.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="ribbon-title ribbon-primary">Lịch sử nạp</div>
                    <div class="mt-4">
                        <form action="">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Nhập id, type, transaction_code, content tìm kiếm ..." name="search" value="">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
                            </div>
                        </form>
                <div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
<thead>
<tr role="row" class="bg-primary">
<th class="text-center text-white">ID</th>
<th class="text-center text-white">Thời gian</th>
<th class="text-center text-white">Loại</th>
<th class="text-center text-white">Mã giao dịch</th>
<th class="text-center text-white">Người chuyển</th>
<th class="text-center text-white">Nhận Thực</th>
<th class="text-center text-white">Nội dung</th>
</tr>
</thead>

<tbody role="alert" aria-live="polite" aria-relevant="all" class="">
  
                                                <?php $getlistcard = $NTD->get_list("SELECT * FROM `history_naptien` WHERE `type` = 'Bank' AND `username` = '$my_user' AND  `url_config` = '".$url_site_name."' ORDER BY `id` DESC LIMIT 10"); if($getlistcard){ foreach($getlistcard as $rowucard){?>
                                                <tr class="odd">
                                                    <td><?=$rowucard['id']?></td>
                     <td><?=$rowucard['date']?>  </td>
                               <td><?=$rowucard['loaithe']?>
                                                    </td>
                                                
                                                    
                                                    
                                                    
                                                    <td><?=($rowucard['tranid'])?></td>
                                                    <td><?=$rowucard['username']?></td>
                                                    <td><?=$rowucard['thucnhan']?> coin</td>
                                                     
                                                    <td><?=$rowucard['username']?></td></tr>
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
                        <nav class="pt-3">
                            <ul class="pagination justify-content-center flex-wrap">

                                <li class="page-item disabled" aria-disabled="true" aria-label="« Trước">
                                    <span class="page-link" aria-hidden="true">‹</span>
                                </li>





                                <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                               


                                <li class="page-item">
                                    <a class="page-link" href="/Nap-Tien" rel="next" aria-label="Sau »">›</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 

               
     <?php
if($NTD->modal(nap_the, status)=="ON")  {?>
             
               <div class="modal fade" id="modalSystem" tabindex="-1" role="dialog" aria-labelledby="modalSystemLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="modalSystemLabel">Thông báo nạp tiền</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
   
<p><?=$NTD->modal(nap_the, text_thong_bao);?></p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
</div>
</div>
</div>
</div>
             <?php }?>
             
             <script>
$(window).on('load', function() {
    $('#staticBackdrop').modal('show');
});
</script>
   
<?php require('../config/end.php');?>