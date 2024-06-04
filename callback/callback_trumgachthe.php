<?php
require('../config/function.php');


      $status=$_GET['status'];
    
      if(isset($_GET['status'])) {
$code = $_GET['code'];
$serial = $_GET['serial'];
$thucnhan = $_GET['amount'];
$tranid = $_GET['request_id'];
				$value=$_GET['value'];
			$chietkhau_the=$NTD->site('ck_thecao');
			$tien_nhan=$value-$value*$chietkhau_the/100;
$callback_sign = md5($NTD->site('partner_key').$_GET['code'].$_GET['serial']);
	
	if($_GET['callback_sign'] == $callback_sign) { 

            $checkthe = $NTD->get_row("SELECT * FROM `history_naptien` WHERE `sothe` = '$code' AND `soseri` = '$serial' AND `tranid` = '$tranid'  AND  `url_config` = '".$url_site_name."'");
            $getusernap = $checkthe['username'];
            if(!$checkthe)
            {
                exit('Request ID không tồn tại');
            }else{
                if($callback_sign != md5($NTD->site('partner_key').$code.$serial))
                {
                    exit('Key xác minh không đúng');
                }else{
                    if ($_GET['status'] == 1) {
				
            			/* update trạng thái thẻ*/
                         $update2 = $NTD->update("history_naptien", ['trangthai' => 1], " `tranid` = '$tranid'  AND  `url_config` = '".$url_site_name."'");
                         $update2 = $NTD->update("history_naptien", ['thucnhan'  => $tien_nhan], " `tranid` = '$tranid'  AND  `url_config` = '".$url_site_name."'");
                        /* update tiền user*/
                        $update1= $NTD->cong("users", "money", $tien_nhan, " `username` = '$getusernap'  AND  `url_config` = '".$url_site_name."'");
                        $update3= $NTD->cong("users", "tongnap", $tien_nhan, " `username` = '$getusernap'  AND  `url_config` = '".$url_site_name."'");
    
            			} else {
            			    
                            /* update trạng thái thẻ*/
                            $update2 = $NTD->update("history_naptien", ['trangthai' => 2], " `tranid` = '$tranid'  AND  `url_config` = '".$url_site_name."'");
            			    		
            			}
                }
                
            }
			
			
			

 
 }
                
 $myfile = fopen("logtrumgachthe.txt", "w") or die("Unable to open file!");
 $txt = $_GET['status']."|".$_GET['request_id']."|".$_GET['amount']."\n";
fwrite($myfile, $txt);
 fclose($myfile);
}

