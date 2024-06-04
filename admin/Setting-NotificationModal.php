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
                   <style>
                       .text-ntd{
                           color:#695e5d;
                       }
                   </style>
                    <div class="col-md-12 card mb-3">
                      
                      
                        
                            <div class="card-body">
                       
            
           
            <?php
             $get_tb_modal = $NTD->get_row(" SELECT * FROM `thong_bao_modal` WHERE `url_config` = '".$url_site_name."'");
             if(!$get_tb_modal){?>
              
               <form submit-ajax="NTD" action="<?=BASE_URL('api/admin/setting/website-3');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
              <input type="hidden" name="action" value="set_them_model">
            <div class="col-md-12">   
           <center> <button  type="submit" class="btn btn-success" > Thêm Bảng Thông Báo</button></center>
           </div>
            <?php }else{?>
            
        
                               <form submit-ajax="NTD" action="<?=BASE_URL('api/admin/setting/website-3');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
            <input type="hidden" name="action" value="set_modal">
               <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Like Bài Viết (Facebook)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="like_post" required="">

<option value="<?=$NTD->modal(like_post, status);?>"><?=$NTD->modal(like_post, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_like_post" rows="3" value=""><?=$NTD->modal(like_post, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                  <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Follow (Facebook)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="sub_sale" required="">

<option value="<?=$NTD->modal(sub_sale, status);?>"><?=$NTD->modal(sub_sale, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_sub_sale" rows="3" value=""><?=$NTD->modal(sub_sale, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                       <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Cảm Xúc Bài Viết (Facebook)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="cx_post" required="">

<option value="<?=$NTD->modal(cx_post, status);?>"><?=$NTD->modal(cx_post, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control"  value="" name="text_cx_post" rows="3"><?=$NTD->modal(cx_post, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                           <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Bình Luận (Facebook)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="cmt" required="">

<option value="<?=$NTD->modal(cmt, status);?>"><?=$NTD->modal(cmt, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_cmt" rows="3"><?=$NTD->modal(cmt, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div>
                                           <br><div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Like Page (Facebook)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="like_page_sale" required="">

<option value="<?=$NTD->modal(like_page_sale, status);?>"><?=$NTD->modal(like_page_sale, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_like_page_sale" rows="3"><?=$NTD->modal(like_page_sale, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                           <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Share (Facebook)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="share" required="">

<option value="<?=$NTD->modal(share, status);?>"><?=$NTD->modal(share, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_share" rows="3"><?=$NTD->modal(share, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                           <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Mắt Live (Facebook)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="mat_live" required="">

<option value="<?=$NTD->modal(mat_live, status);?>"><?=$NTD->modal(mat_live, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_mat_live" rows="3"><?=$NTD->modal(mat_live, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                           <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">View Video (Facebook)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="view_video" required="">

<option value="<?=$NTD->modal(view_video, status);?>"><?=$NTD->modal(view_video, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_view_video" rows="3"><?=$NTD->modal(view_video, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                           <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Cảm Xúc Comment (Facebook)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="like_cmt" required="">

<option value="<?=$NTD->modal(like_cmt, status);?>"><?=$NTD->modal(like_cmt, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_like_cmt" rows="3"><?=$NTD->modal(like_cmt, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                           <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">View Story (Facebook)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="view_story" required="">

<option value="<?=$NTD->modal(view_story, status);?>"><?=$NTD->modal(view_story, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_view_story" rows="3"><?=$NTD->modal(view_story, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                           <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Thành Viên Nhóm (Facebook)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="mem_gr" required="">

<option value="<?=$NTD->modal(mem_gr, status);?>"><?=$NTD->modal(mem_gr, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_mem_gr" rows="3"><?=$NTD->modal(mem_gr, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                        
                                           <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Like (Instagram)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="like_ins" required="">

<option value="<?=$NTD->modal(like_ins, status);?>"><?=$NTD->modal(like_ins, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_like_ins" rows="3"><?=$NTD->modal(like_ins, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                           <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Comment (Instagram)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="cmt_ins" required="">

<option value="<?=$NTD->modal(cmt_ins, status);?>"><?=$NTD->modal(cmt_ins, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_cmt_ins" rows="3"><?=$NTD->modal(cmt_ins, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                           <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Follow (Instagram)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="sub_ins" required="">

<option value="<?=$NTD->modal(sub_ins, status);?>"><?=$NTD->modal(sub_ins, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_sub_ins" rows="3"><?=$NTD->modal(sub_ins, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                           <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Tim (TikTok)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="like_tiktok" required="">

<option value="<?=$NTD->modal(like_tiktok, status);?>"><?=$NTD->modal(like_tiktok, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_like_tiktok" rows="3"><?=$NTD->modal(like_tiktok, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                           <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Comment (TikTok)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="cmt_tiktok" required="">

<option value="<?=$NTD->modal(cmt_tiktok, status);?>"><?=$NTD->modal(cmt_tiktok, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_cmt_tiktok" rows="3"><?=$NTD->modal(cmt_tiktok, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                           <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Follow (TikTok)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="sub_tiktok" required="">

<option value="<?=$NTD->modal(sub_tiktok, status);?>"><?=$NTD->modal(sub_tiktok, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_sub_tiktok" rows="3"><?=$NTD->modal(sub_tiktok, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                           <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Sub (Youtube)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="sub_youtube" required="">

<option value="<?=$NTD->modal(sub_youtube, status);?>"><?=$NTD->modal(sub_youtube, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_sub_youtube" rows="3"><?=$NTD->modal(sub_youtube, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                           <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Like  (Youtube)</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="like_youtube" required="">

<option value="<?=$NTD->modal(like_youtube, status);?>"><?=$NTD->modal(like_youtube, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_like_youtube" rows="3"><?=$NTD->modal(like_youtube, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div><br>
                                           <div class="col-md-12 row">   
                                 
                                 
                                                 <div class="col-md-4">
                                                      <label class="form-label" for="">Nạp Thẻ</label>
                                            <div class="form-group">
                                               
                                                 <select class="form-control show-tick" name="nap_the" required="">

<option value="<?=$NTD->modal(nap_the, status);?>"><?=$NTD->modal(nap_the, status);?></option>


<option value="OFF">OFF</option>
<option value="ON">ON</option>

</select>
                                               
                                            </div></div>
                                             <div class="col-md-8">
                                            <div class="form-line"> <textarea class="form-control" name="text_nap_the" rows="3"><?=$NTD->modal(nap_the, text_thong_bao);?></textarea> 
                                        </div>  
                                        </div>
                                        
                                        </div>
                        
                                        
                                             
                                        
                                        
                                        
                                        
                                     
                               
                             
                                        

                                        <div class="col-md-12 mr-auto ml-auto pt-3">
                                            <button type="submit" class="btn btn-primary btn-block"><em class="fa fa-paper-plane"></em>&nbsp; Cập nhật</button>
                                        </div>
                                        
                                    </div>
                                </form>   <?php } ?>          
                            </div>
                        
                    </div>
                </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
require('foot.php'); 

?>