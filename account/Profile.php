<?php require('../config/function.php');?>
<?php require('../config/head.php'); if(empty($_SESSION['username'])){header('Location: /Login');exit;}?>
<title>Thông tin tài khoản</title>

 <?php require('../config/nav.php');?>


    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4">Thông tin tài khoản</h4>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="ribbon-title ribbon-primary">Thông tin tài khoản</div>
                        <div class="mt-4">
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label" for="">Họ và tên</label>
                                    <input type="text" class="form-control" value="<?=$NTD->getUsers('name');?>" readonly="">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label" for="">Email</label>
                                    <input type="text" class="form-control" value="<?=$NTD->getUsers('email');?>" readonly="">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label" for="">Tài khoản</label>
                                    <input type="text" class="form-control" value="<?=$NTD->getUsers('username');?>" readonly="">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label" for="">Số dư</label>
                                    <input type="text" class="form-control" value="<?=format_money($NTD->getUsers('money'));?> coin" readonly="">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label" for="">Cấp độ</label>
                                    <input type="text" class="form-control" value="<?=$level;?>" readonly="">
                                </div>
                                <div class="form-group col-md-6 mb-3">
                                    <label class="form-label" for="">Thời gian tham gia</label>
                                    <input type="text" class="form-control" value="<?=$NTD->getUsers('date');?>" readonly="">
                                </div>
                                <form submit-ajax="NTD" method="post" action="<?=BASE_URL('api/change-token');?>" api_token="<?=$NTD->getUsers('token');?>">
                                                     <input type="hidden" name="action" value="change-token">
                                <div class="form-group col-md-12">
                                    <label class="form-label" for="">Api Token</label>
                                    <div class="input-group">
                                        <input class="form-control" type="text" value="<?=$NTD->getUsers('token');?>"
                                            id="api_token" readonly="">
                                        <button  type="submit" class="btn btn-primary" id="changeToken"><i class="fa fa-exchange"></i> Thay đổi</button>
                                    </div>
                                </div>
</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="ribbon-title ribbon-primary">Đổi mật khẩu</div>
                        <div class="mt-4">
                           <form submit-ajax="NTD" action="<?=BASE_URL("api/change-pass");?>" method="post" api_token="<?=$NTD->getUsers('token')?>" href="/auth/logout">
                                      <input type="hidden" name="action" value="change-pass">
                                <div class="mb-3">
                                    <label class="form-label">Mật khẩu cũ</label>
                                    <input type="password" class="form-control" name="old_password" placeholder="Nhập mật khẩu cũ">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Mật khẩu mới</label>
                                    <input type="password" class="form-control" name="new_password" placeholder="Nhập mật khẩu mới">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Mật khẩu mới</label>
                                    <input type="password" class="form-control" name="confirm_new_password" placeholder="Nhập lại mật khẩu mới">
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-lock"></i> Thay
                            đổi</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-4">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="ribbon-title ribbon-primary">Nhật kí hoạt động</div>
                        <div class="mt-4">
                            <form action="https://subgiare.vn/profile/info">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Nhập id, content tìm kiếm ..." name="search" value="">
                                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
                                </div>
                            </form>
                            <div class="table-responsive">

                                <table class="table table-bordered text-nowrap">
                                    <thead>
                                        <tr role="row" class="bg-primary">
                                            <th class="text-center text-white">ID</th>
                                            <th class="text-center text-white">Thời gian</th>
                                            <th class="text-white">Nội dung</th>
                                        </tr>
                                    </thead>
                                    <tbody role="alert" aria-live="polite" aria-relevant="all" class="">
                                         <?php $getlistcard = $NTD->get_list("SELECT * FROM `log_site` WHERE `username` = '".$NTD->getUsers('username')."' AND  `url_config` = '".$url_site_name."'  ORDER BY `id` DESC LIMIT 10"); if($getlistcard){ foreach($getlistcard as $rowucard){?>
                                        <tr>
                                            <td class="text-center"><?=$rowucard['id']?></td>
                                            <td class="text-center"><?=$rowucard['date']?></td>
                                            <td><?=$rowucard['note']?></td>
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
                            <nav class="pt-3">
                                <ul class="pagination justify-content-center flex-wrap">

                                    <li class="page-item disabled" aria-disabled="true" aria-label="« Trước">
                                        <span class="page-link" aria-hidden="true">‹</span>
                                    </li>





                                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                   
                                   
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




        
        
        
        
        
        
        
        
        
        
<?php require('../config/end.php');?>