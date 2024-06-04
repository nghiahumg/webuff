<?php require('../config/function.php');?>

<?php require('../config/head.php'); if(empty($_SESSION['username'])){header('Location: /auth/login');exit;}?>
<title>Tạo Hỗ Trợ</title>

        <?php require('../config/nav.php');?>
         <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4">Gửi hỗ trợ</h4>
                                <div class="row">
            <div class="col-md-12">
                <div class="card mb-4 card-tab">
    <div class="card-header"></div>
    <div class="card-body">
        <div class="row">
<div class="col-md-12 mb-3">
    
  <form submit-ajax="NTD" action="<?=BASE_URL('api/ho-tro');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">

  <div class="form-group row mb-3">
                                        <label for="" class="form-label col-md-3">Vấn đề cần hỗ trợ</label>
                                        <div class="col-md-8">
                                          <select class="form-control" name="loai_ho_tro">
                <option value="">-- Chọn vẫn đề cần hỗ trợ --</option>
              
                <option value="like_post" style="color:#3aa6f2;    font-weight: 600;"><b>Like Bài Viết (Facebook)</b></option>
                <option value="cx-post"  style="color:#3aa6f2;    font-weight: 600;"><b>Cảm Xúc Bài Viết (Facebook)</b></option>
              <option value="sub_sale" style="color:#3aa6f2;    font-weight: 600;">Follow (Facebook)</option>
           
              <option value="cmt" style="color:#3aa6f2;    font-weight: 600;"><b>Comment (Facebook)</b></option>
              <option value="like_page_sale" style="color:#3aa6f2;    font-weight: 600;">Like Page  (Facebook)</option>
             <option value="mem_gr" style="color:#3aa6f2;    font-weight: 600;">Thành Viên Nhóm (Facebook)</option>
              <option value="share" style="color:#3aa6f2;    font-weight: 600;">Share (Facebook)</option>
              <option value="mat_live" style="color:#3aa6f2;    font-weight: 600;">Mắt Like (Facebook)</option>
              <option value="view_video" style="color:#3aa6f2;    font-weight: 600;">View Video (Facebook)</option>
              <option value="like_cmt" style="color:#3aa6f2;    font-weight: 600;">Like Comment (Facebook)</option>
              <option value="view_story" style="color:#3aa6f2;    font-weight: 600;">View Story (Facebook)</option>
              <option value="like_ins" style="color:#fc883a;    font-weight: 600;">Like (Instagram)</option>
              <option value="cmt_ins" style="color:#fc883a;    font-weight: 600;">Comment (Instagram)</option>
              <option value="sub_ins" style="color:#fc883a;    font-weight: 600;">Follow (Instagram)</option>
               <option value="like_tiktok" style="color:#ff3838;    font-weight: 600;">Tim (TikTok)</option>
              <option value="cmt_tiktok" style="color:#ff3838;    font-weight: 600;">Comment (TikTok)</option>
              <option value="sub_tiktok" style="color:#ff3838;    font-weight: 600;">Follow (TikTok)</option>
               <option value="like_youtube" style="color:#fcd41e;    font-weight: 600;">Like (Youtube)</option>
              <option value="sub_youtube" style="color:#fcd41e;    font-weight: 600;">Sub  (Youtube)</option>
              <option value="sub_youtube" style="color:#2a5bfa;    font-weight: 600;">Nạp Tiền</option>
               <option value="sub_youtube" style="color:#2a5bfa;    font-weight: 600;">Khác</option>
            </select>
                                           
                                        </div>
                                    </div>
   <div class="form-group row mb-3">
                                        <label for="" class="form-label col-md-3">Tiêu đề hỗ trợ </label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="tieu_de_ho_tro" placeholder="Tiêu đề hỗ trợ">
                                            
                                        </div>
                                    </div>
         <div class="form-group row mb-3">
                                        <label for="" class="form-label col-md-3">ID đơn</label>
                                        <div class="col-md-8">
                                            <input type="text" class="form-control" name="id_ho_tro" placeholder="ID đơn nếu có">
                                            
                                        </div>
                                    </div>                             
                                       <div class="form-group row mb-3">
                                        <label for="" class="form-label col-md-3">Mô tả chi tiết</label>
                                        <div class="col-md-8">
                                           <textarea class="form-control " name="noi_dung_ho_tro" rows="5" placeholder="Mô tả vấn đề gặp phải"></textarea>
                                            
                                        </div>
                                    </div>


<br>
<div class="d-grid gap-2">
<button type="submit" class="btn btn-primary" > Gửi Hỗ Trợ</button>
</div>
</form>
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
<h6 class="card-title mb-4">Lịch sử hỗ trợ</h6>
<form action="/Tao-Ho-Tro">
<div class="input-group mb-3">
<input type="text" class="form-control" placeholder="Nhập id, type, transaction_code, content tìm kiếm ..." name="search" value="">
<button class="btn btn-primary" type="submit"><i class="fa fa-search"></i> Tìm kiếm</button>
</div>
</form>
<div class="table-responsive" tabindex="1" style="overflow: hidden; outline: none;">
<table class="table table-striped table-bordered table-hover">
<thead>
<tr role="row" class="bg-primary">
<th class="text-center text-white">ID</th>
<th class="text-center text-white">Thời gian</th>
<th class="text-center text-white">Loại Hỗ Trợ</th>
<th class="text-center text-white">Tiêu Đề Hỗ Trợ</th>
<th class="text-center text-white">ID Đơn Hỗ Trợ</th>
<th class="text-center text-white">Nội Dung</th>
<th class="text-center text-white">Nội Dung Xử Lý</th>
<th class="text-center text-white">Trạng thái</th>
</tr>
</thead>
<tbody>
                                            <?php $getlistbuff = $NTD->get_list("SELECT * FROM `list_hotro` WHERE  `username` = '$my_user'  AND  `url_config` = '".$url_site_name."'
 ORDER BY `id` DESC "); 
 if($getlistbuff){ foreach($getlistbuff as $rowhbuff){?>
                                            <tr class="odd">
                                                <td><?=$rowhbuff['id']?></td>
                                                <td><?=$rowhbuff['date']?></td>
                                                <td><?=$rowhbuff['loai_hotro']?></td>
                                                <td><?=$rowhbuff['tieu_de_hotro']?></td>
                                              
                                                <td><?=$rowhbuff['id_hotro']?>
                                                </td>
                                          
                                                <td><?=$rowhbuff['noi_dung_hotro']?>
                                                </td>
                                                <td><b><?=$rowhbuff['noi_dung_xuly']?></b></td>
                                                <td<?php if($rowhbuff['status']=="wait"){?>
                                              <b><button type="button" class="btn btn-warning btn-sm">Đang chờ</button></b>
                                               <?php }else{?>
                                                 <b><button type="button" class="btn btn-success btn-sm">Đã Xử Lý</button></b>
                                               
                                                <?php }?>
                                               </td>
                                            </tr>
                                           <?php }}else{?>
                                           <tr class="odd">
<td valign="top" colspan="100%">
<center>
<img src="/assets/images/nodata.svg" alt="" width="80" height="80" class="pt-3">
<p class="pt-3">Không có dữ liệu để hiển thị</p>
</center>
</td>
</tr><?php }?>
                                        </tbody>

</table>
</div>
</div>
</div> </div>
</div>
                        </div> 



<?php require('../config/end.php');?>