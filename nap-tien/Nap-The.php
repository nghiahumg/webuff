<?php require('../config/function.php');?>

<?php require('../config/head.php'); if(empty($_SESSION['username'])){header('Location: /auth/login');exit;}?><title>Nạp tiền thẻ cào</title>


    <?php require('../config/nav.php');?>
       <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Nạp tiền thẻ cào</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4 card-tab">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6 d-grid gap-2">
                            <a href="<?=BASE_URL('Nap-Tien');?>" class="btn btn-outline-primary"><img src="/assets/images/bank.svg" alt="" width="25" height="25">
                        Ngân hàng</a>
                        </div>
                    
                        <div class="col-6 d-grid gap-2">
                            <a href="<?=BASE_URL('Nap-The');?>" class="btn btn-primary"><img src="/assets/images/card.svg" alt="" width="25" height="25">
                        Thẻ cào</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-md-12">
                            <h5 class="text-primary">Tỷ giá: 1 VNĐ = 1 coin</h5>
                        </div>
                    </div>
                   <form submit-ajax="NTD" action="<?=BASE_URL('api/napthe');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">

                        <div class="row mb-3">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label" for="">Loại thẻ:</label>
                                    <select class="form-control" name="NetworkCode">
                                    <option value="">--- Chọn loại thẻ ---</option>
                                    <option value="VIETTEL">VIETTEL (Chiết khấu <?=$NTD->site('ck_thecao');?>%)
                                    </option>
                                    <option value="MOBIFONE">MOBIFONE (Chiết khấu <?=$NTD->site('ck_thecao');?>%)
                                    </option>
                                    <option value="VINAPHONE">VINAPHONE (Chiết khấu <?=$NTD->site('ck_thecao');?>%)
                                    </option>
                                    <option value="VIETNAMOBILE">VIETNAMOBILE (Chiết khấu
                                        <?=$NTD->site('ck_thecao');?>%)</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label" for="">Mệnh giá:</label>
                                    <select class="form-control" name="PricesExchange">
                                    <option value="">--- Chọn mệnh giá thẻ ---</option>
                                    <option value="10000">10.000 VNĐ</option>
                                    <option value="20000">20.000 VNĐ</option>
                                    <option value="30000">30.000 VNĐ</option>
                                    <option value="50000">50.000 VNĐ</option>
                                    <option value="100000">100.000 VNĐ</option>
                                    <option value="200000">200.000 VNĐ</option>
                                    <option value="300000">300.000 VNĐ</option>
                                    <option value="500000">500.000 VNĐ</option>
                                    <option value="1000000">1.000.000 VNĐ</option>
                                </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label" for="">Seri:</label>
                                    <input type="number" class="form-control" name="SeriCard" placeholder="Nhập số seri của thẻ">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="form-label" for="">Mã thẻ:</label>
                                    <input type="number" class="form-control" name="NumberCard" placeholder="Nhập mã thẻ">
                                </div>
                            </div>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-paper-plane"></i> Nạp ngay</button>
                        </div>
                    </form>
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
                                <input type="text" class="form-control" placeholder="Nhập id, NetworkCode, SeriCard, NumberCard tìm kiếm ..." name="search" value="">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
                            </div>
                        </form>
             <div class="table-responsive">
<table class="table table-striped table-bordered table-hover">
<thead>
<tr role="row" class="bg-primary">
<th class="text-center text-white">ID</th>
<th class="text-center text-white">Thời gian</th>
<th class="text-center text-white">Loại thẻ</th>
<th class="text-center text-white">Mệnh giá</th>
<th class="text-center text-white">Seri</th>
<th class="text-center text-white">Mã thẻ</th>
<th class="text-center text-white">Trạng thái</th>
</tr>
</thead>
 <tbody>
                                                <?php $getlistcard = $NTD->get_list("SELECT * FROM `history_naptien` WHERE `type` = 'napthe' AND `username` = '$my_user' AND  `url_config` = '".$url_site_name."' ORDER BY `id` DESC "); if($getlistcard){ foreach($getlistcard as $rowucard){?>
                                                <tr class="odd">
                                                    <td><?=$rowucard['id']?></td>
                                         <td><?=$rowucard['date']?></td>           
                                                    <td><?=$rowucard['loaithe']?></td>
                                                    <td><?=format_money($rowucard['menhgia'])?>đ</td>
                                                    <td><?=$rowucard['soseri']?></td>
                                                    <td><?=$rowucard['sothe']?></td>
                                                    <td><b><?=statuscard($rowucard['trangthai'])?></b></td>
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