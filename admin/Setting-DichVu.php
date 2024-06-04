<?php
require('head.php'); 
require('nav.php'); 
?>

<?php if($NTD->getUsers('capbac') !== '99'){
                      header('Location: /404');exit;
                        }?>
                                       <?php
                $total_money = $NTD->get_row("SELECT SUM(`money`) FROM `users` WHERE `money` >= 0  AND  `url_config` = '".$url_site_name."' ") ['SUM(`money`)']; 
                
                $total_thanhvien = $NTD->get_row("SELECT COUNT(*) FROM `users`  WHERE  `url_config` = '".$url_site_name."'") ['COUNT(*)'];
                
                
                $total_nap = $NTD->get_row("SELECT SUM(`tongnap`) FROM `users` WHERE `tongnap` >= 0 AND  `url_config` = '".$url_site_name."' ") ['SUM(`tongnap`)']; 
                
                
                $total_tru = $NTD->get_row("SELECT SUM(`tongtru`) FROM `users` WHERE `tongtru` >= 0  AND  `url_config` = '".$url_site_name."'  ") ['SUM(`tongtru`)']; 
                
                
                 $total_card = $NTD->get_row("SELECT COUNT(*) FROM `history_naptien` WHERE  `url_config` = '".$url_site_name."' ") ['COUNT(*)'];
                
                 $total_don = $NTD->get_row("SELECT COUNT(*) FROM `history_buy`  WHERE  `url_config` = '".$url_site_name."'") ['COUNT(*)'];
                
                ?>
  <!-- Content Wrapper. Contains page content -->
 
  <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-body">
 <form submit-ajax="NTD" action="<?=BASE_URL('api/admin/setting/website');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
            <input type="hidden" name="action" value="set_them_dv">
           <div class="form-group">
            <label for="recipient-loaidv" class="col-form-label">Loại dịch vụ:</label>
            <select class="form-control" name="loaidv">
                <option value="">-- Chọn loại dịch vụ --</option>
              <!--thanh vũ-->
                <option value="like_post" style="color:#3aa6f2;    font-weight: 600;"><b>Like Bài Viết SPEED (Facebook)</b></option>
               <option value="like_post_sale" style="color:#3aa6f2;    font-weight: 600;"><b>Like Bài Viết SALE (Facebook)</b></option>
              <option value="sub_sale" style="color:#3aa6f2;    font-weight: 600;">Follow SALE (Facebook)</option>
           <option value="sub_speed" style="color:#3aa6f2;    font-weight: 600;">Follow SPEED (Facebook)</option>
            <option value="sub_vip" style="color:#3aa6f2;    font-weight: 600;">Follow VIP (Facebook)</option>
             <option value="sub_quality" style="color:#3aa6f2;    font-weight: 600;">Follow QUALITY (Facebook)</option>
              <option value="cmt" style="color:#3aa6f2;    font-weight: 600;"><b>Comment SPEED (Facebook)</b></option>
              <option value="cmt_sale" style="color:#3aa6f2;    font-weight: 600;"><b>Comment SALE (Facebook)</b></option>
              
              <option value="like_page_sale" style="color:#3aa6f2;    font-weight: 600;">Like Page SALE (Facebook)</option>
              <option value="like_page_speed" style="color:#3aa6f2;    font-weight: 600;">Like Page SPEED (Facebook)</option>
              <option value="like_page_quality" style="color:#3aa6f2;    font-weight: 600;">Like Page QUALITY (Facebook)</option>
              
             <option value="mem_gr" style="color:#3aa6f2;    font-weight: 600;">Thành Viên Nhóm (Facebook)</option>
              <option value="share" style="color:#3aa6f2;    font-weight: 600;">Share (Facebook)</option>
               <option value="share_sale" style="color:#3aa6f2;    font-weight: 600;">Share SALE (Facebook)</option>
              <option value="mat_live" style="color:#3aa6f2;    font-weight: 600;">Mắt Live (Facebook)</option>
              <option value="view_video" style="color:#3aa6f2;    font-weight: 600;">View Video (Facebook)</option>
              <option value="like_cmt" style="color:#3aa6f2;    font-weight: 600;">Like Comment (Facebook)</option>
              <option value="view_story" style="color:#3aa6f2;    font-weight: 600;">View Story (Facebook)</option>
               <option value="vip_like" style="color:#3aa6f2;    font-weight: 600;">Vip Like (Facebook)</option>
              <option value="like_ins" style="color:#fc883a;    font-weight: 600;">Like (Instagram)</option>

              <option value="sub_ins" style="color:#fc883a;    font-weight: 600;">Follow (Instagram)</option>
               <option value="like_tiktok" style="color:#ff3838;    font-weight: 600;">Tim (TikTok)</option>
              <option value="cmt_tiktok" style="color:#ff3838;    font-weight: 600;">Comment (TikTok)</option>
              <option value="sub_tiktok" style="color:#ff3838;    font-weight: 600;">Follow (TikTok)</option>
              <option value="share_tiktok" style="color:#ff3838;    font-weight: 600;">Share (TikTok)</option>
              <option value="view_tiktok" style="color:#ff3838;    font-weight: 600;">View (TikTok)</option>
               <option value="sub_youtube" style="color:#fcd41e;    font-weight: 600;">Sub (Youtube)</option>
                <option value="like_twitter" style="color:#2d72e0;    font-weight: 600;">Like (Twitter)</option>
                 <option value="sub_twitter" style="color:#2d72e0;    font-weight: 600;">Follow (Twitter)</option>
               
               
       
             <!-- <option value="sub_youtube" style="color:#fcd41e;    font-weight: 600;">Sub  (Youtube)</option>-->
            </select>
          </div>
          <div class="form-group">
            <label for="recipient-server" class="col-form-label">Chọn server:</label>
            <select class="form-control" name="server">
                <option value="">-- Chọn loại server --</option>
                <?php for($i = 1; $i <=25; $i++){?>
                <option value="<?=$i?>">Server <?=$i?></option>
                <?php }?>
            </select>
          </div>
           <div class="form-group">
            <label for="recipient-ratedv" class="col-form-label">Giá dịch vụ:</label>
            <input type="" class="form-control" name="ratedv">
          </div>
          
          <div class="form-group">
            <label for="recipient-title" class="col-form-label">Tiêu đề dịch vụ:</label>
            <input type="text" class="form-control" name="title">
          </div>
    
       <div class="form-group">
            <label for="recipient-title" class="col-form-label">Thông số dịch vụ:</label>
            <input type="text" class="form-control" name="server_name">
          </div>
           <div class="row col-md-12">
                <div class="">
            <button  type="submit" class="btn btn-primary" >Thêm Dịch Vụ</button>
            </div>&nbsp;&nbsp;
          
        </form>  <div class="">
             <?php 
             if($url_site_name!==$URL_ADMIN){ ?>
                 <form submit-ajax="NTD" action="<?=BASE_URL('api/admin/setting/website-2');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
           
            <?php
             $get_dv2 = $NTD->get_row(" SELECT * FROM `server_service` WHERE `url_config` = '".$url_site_name."'");
             if(!$get_dv2){?>
              <input type="hidden" name="action" value="set_auto_dv">
            <button  type="submit" class="btn btn-danger" > Thêm Tự Động </button><?php }else{?>
            
             <input type="hidden" name="action" value="set_xoa_dv">
            <button  type="submit" class="btn btn-danger" > Xoá Dịch Vụ</button><?php } ?>
            
            
            
            
            
            
            </form><?php }?>
            </div>
            </div>
        </div>
                                </div>
                            </div>
                        </div>
        <div class="row">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <h6 class="card-title mb-3">Danh sách dịch vụ </h6>
                                <div class="table-responsive scrollbar">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                        <table class="table table-bordered table-striped fs--1 mb-3 dataTables-NTD dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead class="bg-200 text-900">
                                                <tr role="row" history>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 58.8438px;">ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Loại dịch vụ: activate to sort column ascending" style="width: 162.031px;">Loại dịch vụ</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Server dịch vụ: activate to sort column ascending" style="width: 162.031px;">Server dịch vụ</th>
                                                   
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Rate dịch vụ: activate to sort column ascending" style="width: 162.031px;">Rate dịch vụ</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Thông tin dịch vụ: activate to sort column ascending" style="width: 193.031px;">Tiêu đề</th>
                                                      <?php 
             if($url_site_name==$URL_ADMIN){ ?>
              <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Trạng thái: activate to sort column ascending" style="width: 96.0781px;">Thông số dịch vụ</th>
             <?php }?>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Trạng thái: activate to sort column ascending" style="width: 96.0781px;">Trạng thái</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Tắt: activate to sort column ascending" style="width: 58.047px;">Tắt</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Sửa: activate to sort column ascending" style="width: 58.047px;">Sửa</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Xóa: activate to sort column ascending" style="width: 58.047px;">Xóa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $getlistcard = $NTD->get_list("SELECT * FROM `server_service`  WHERE  `url_config` = '".$url_site_name."'"); if($getlistcard){ foreach($getlistcard as $rowucard){?>
                                                <tr class="odd">
                                                    <td><?=$rowucard['id']?></td>
                                                    <td><?=$rowucard['code_service']?></td>
                                                    <td><?=$rowucard['server_service']?></td>
                                                  
                                                    <td><?=$rowucard['rate_service'];?>đ</td>
                                                  
                                                  
                                                    <td><?=$rowucard['title_service'];?></td>
                                                    
                                                     <?php 
             if($url_site_name==$URL_ADMIN){ ?> <td><?=$rowucard['server_name']?></td><?php }?>
                                                    <td><?=sttservice($rowucard['status_service']);?></td>
                                                    <td>
                                                        <form submit-ajax="NTD" action="<?=BASE_URL('api/admin/setting/website');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
            <input type="hidden" name="action" value="set_tat_bat_dv">
                                                        <?php if($rowucard['status_service'] == 0){?>
                                                         <input type="hidden" name="type" value="batsv">
                                                         <input type="hidden" name="id" value="<?=$rowucard['id']?>">
                                                         <input type="hidden" name="key" value="<?=$rowucard['code_service']?>">
                                                          <input type="hidden" name="server" value="<?=$rowucard['server_service']?>">
                                                        <button type="submit"  class="btn btn-success btn-sm">Bật</button>
                                                        <?php }else{?>
                                                        
                                                          <input type="hidden" name="type" value="tatsv">
                                                           <input type="hidden" name="id" value="<?=$rowucard['id']?>">
                                                         <input type="hidden" name="key" value="<?=$rowucard['code_service']?>">
                                                                 <input type="hidden" name="server" value="<?=$rowucard['server_service']?>">
                                                        <button type="submit" class="btn btn-danger btn-sm">Tắt</button>
                                                        <?php }?>
                                                        
                                                        </form>
                                                        
                                                    </td>
                                                    <td>
                                                   <a href="<?=BASE_URL('')?>admin/sua_dv.php?id=<?=$rowucard['id']?>"><button type="button" class="btn btn-danger btn-sm">Sửa</button></a></td>
                                                    <td>
                                                        <form submit-ajax="NTD" action="<?=BASE_URL('api/admin/setting/website');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
            <input type="hidden" name="action" value="set_tat_bat_dv">
            <input type="hidden" name="type" value="xoasv">
                                                         <input type="hidden" name="id" value="<?=$rowucard['id']?>">
                                                         <input type="hidden" name="key" value="<?=$rowucard['code_service']?>">
                                                        <button type="submit" class="btn btn-danger btn-sm" >Xóa</button></td>
                                               
                                                </form>
                                                </tr>
                                                <?php }}else{?>
                                                <tr class="odd">
                                                    <td valign="top" colspan="6" class="dataTables_empty">
                                                        <center>Không có dữ liệu để hiển thị</center>
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
    <!-- /.content -->

  </div>
  <!-- /.content-wrapper -->
<?php
require('foot.php'); 

?>