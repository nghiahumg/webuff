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
  <?php if($url_site_name==$URL_ADMIN){ ?>
 <div class="row">
                   <style>
                       .text-ntd{
                           color:#695e5d;
                       }
                   </style>
                    <div class="col-md-12 card mb-3">
                      
                      
                        
                            <div class="card-body">
                                
                               <form submit-ajax="NTD" action="<?=BASE_URL('api/admin/setting/website');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
            <input type="hidden" name="action" value="set_auto_dv">
                                  <div class="col-md-12 row">   
                                  <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="">ON/OFF Auto</label>
                                                 <select class="form-control show-tick" name="trang_thai_auto" required="">

<option value="<?=$NTD->check('trang_thai_auto');?>"><?=$NTD->check('trang_thai_auto');?></option>

<option value="ON">ON</option>
<option value="OFF">OFF</option>

</select>
                                               
                                            </div>
                                        </div>  
                                           <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-label" for="">Token Auto </label>
                                                <input type="text" class="form-control" name="token_auto_dvfb" value="<?=$NTD->check('token_auto_dvfb');?>" require>
 
                                        
                                        
                                     
                               
                             
                                        

                                        <div class="col-md-12 mr-auto ml-auto pt-3">
                                            <button type="submit" class="btn btn-primary btn-block"><em class="fa fa-paper-plane"></em> Cập nhật</button>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        
                    </div>
                </div>
          <?php }else {
           $get_token_site = $NTD->get_row(" SELECT * FROM `ds_sitecon` WHERE `site_con` = '".$url_site_name."'");
          ?>      
        
        <div class="row">
                   <style>
                       .text-ntd{
                           color:#695e5d;
                       }
                   </style>
                    <div class="col-md-12 card mb-3">
                      
                      
                        
                            <div class="card-body">
                                
                               <form submit-ajax="NTD" action="<?=BASE_URL('api/admin/setting/website');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
            <input type="hidden" name="action" value="set_auto_sitecon">
                                  <div class="col-md-12 row">   
                                 
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="form-label" for="">Token Auto</label>
                                                <input type="text" class="form-control" name="token_auto_site_con" value="<?= $get_token_site['token'];?>" require>
                                            </div>
                                        </div>
                                        </div>
                                        
                        
                                        
                                             
                                        
                                        
                                        
                                        
                                     
                               
                             
                                        

                                        <div class="col-md-12 mr-auto ml-auto pt-3">
                                            <button type="submit" class="btn btn-primary btn-block"><em class="fa fa-paper-plane"></em> Cập nhật</button>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        
                    </div>
                </div>
                
                <?php } ?>
                
                
                
                
                
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
require('foot.php'); 

?>