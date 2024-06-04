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
 

    <!-- Main content -->
   <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h3 class="card-title">CẤU HÌNH THÔNG TIN WEBSITE</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i
                                    class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form submit-ajax="NTD" action="<?=BASE_URL('api/admin/setting/website');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
                             <input type="hidden" name="action" value="set_all">
                                    <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ON/OFF Website</label>
                                <div class="col-sm-9">
                                    <select class="form-control show-tick" name="bao_tri" required>
                                        <option value="<?=$NTD->site('bao_tri');?>"><?=$NTD->site('bao_tri');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tên website</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="tenwebsite" value="<?=$NTD->site('ten_website');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Link website</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text"  value="<?=$NTD->site('base_url');?>" name="baseurl"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text"  value="<?=$NTD->site('mail_config');?>" name="mail_config"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                          <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mật Khẩu Email (Ứng Dụng)</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text"  value="<?=$NTD->site('pass_mail_config');?>" name="pass_mail_config"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
<div class="form-group row">
<label class="col-sm-3 col-form-label">Mô tả website</label>
<div class="col-sm-9">
<div class="input-group my-colorpicker2 colorpicker-element" data-colorpicker-id="1">
<input type="text" class="form-control" name="gioi_thieu_web" value="<?=$NTD->site('gioi_thieu_web');?>" data-original-title="" title="" aria-describedby="popover609875">
</div>
</div>
</div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Từ khóa tìm kiếm</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="tu_khoa" value="<?=$NTD->site('tu_khoa');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Logo website</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="logo" value="<?=$NTD->site('logo');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Logo Mini</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="logo_mini" value="<?=$NTD->site('logo_mini');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Favicon website</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="favicon" value="<?=$NTD->site('favicon');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Ảnh giới thiệu website</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="anhbia" value="<?=$NTD->site('anhbia');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Hotline</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="hotline" value="<?=$NTD->site('phone_zalo');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Facebook</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="facebook" value="<?=$NTD->site('facebook');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                       <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Token Facebook Clone</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="token_facebook" value="<?=$NTD->site('token_facebook');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                                <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Token Bot Telegram</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="bot_tele" value="<?=$NTD->site('bot_tele');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ID Chat Telegram</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="id_chat_tele" value="<?=$NTD->site('id_chat_tele');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ID Page</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="id_page_chat" value="<?=$NTD->site('id_page_chat');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                       <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mức Nạp CTV</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" value="<?=$NTD->site('rate_ctv');?>" name="ratectv"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                    <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mức Nạp Đại Lý</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="ratedaily" value="<?=$NTD->site('rate_daily');?>"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
               
                   <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mức Nạp NPP</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" name="ratenpp" value="<?=$NTD->site('rate_admin');?>" 
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                 
                        
                      <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Chiết Khấu Thành Viên</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" value="<?=$NTD->site('ck_user');?>" name="ck_user"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                  
                       <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Chiết Khấu CTV</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" value="<?=$NTD->site('ck_ctv');?>" name="ck_ctv"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                         <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Chiết Khấu Đại Lý</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" value="<?=$NTD->site('ck_dl');?>" name="ck_dl"
                                            class="form-control">
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Chiết Khấu NPP</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" value="<?=$NTD->site('ck_npp');?>" name="ck_npp"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                        <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Chiết Khấu Thẻ</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" value="<?=$NTD->site('ck_thecao');?>" name="ck_thecao"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            
                            
                               <div class="form-group row">
                                <label class="col-sm-3 col-form-label">ON/OFF Làm Tròn Giá Tiền</label>
                                <div class="col-sm-9">
                                    <select class="form-control show-tick" name="trang_thai_lam_tron" required>
                                        <option value="<?=$NTD->site('trang_thai_lam_tron');?>"><?=$NTD->site('trang_thai_lam_tron');?>
                                        </option>
                                        <option value="ON">ON</option>
                                        <option value="OFF">OFF</option>
                                    </select>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Link IMG_1</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" value="<?=$NTD->site('img_1');?>" name="img_1"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Link IMG_2</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" value="<?=$NTD->site('img_2');?>" name="img_2"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Link IMG_3</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <input type="text" value="<?=$NTD->site('img_3');?>" name="img_3"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">JavaSciprt</label>
                                <div class="col-sm-9">
                                    <div class="form-line">
                                        <textarea class="form-control" name="script_live_chat"
                                            rows="6"><?=$NTD->site('script_live_chat');?></textarea>
                                    </div>
                                    <i>Chứa sciprt Live Chat, Google Analytics hoặc các sciprt khác.</i>
                                </div>
                            </div>
                         
                            <button type="submit"  class="btn btn-primary btn-block">
                                <span>Cập Nhật</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
require('foot.php'); 

?>