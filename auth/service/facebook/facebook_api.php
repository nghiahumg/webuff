<?php require('../../../config/function.php');


     if(empty($_POST['api_token']) || empty($_POST['soluong']) || empty($_POST['server'])){
      include('../../../pages/error404.php');
     }
     else{
    
    $action    = $_POST['action'];
    $loai_camxuc      = $_POST['loai_camxuc'];
    $time_buy      = $_POST['time_buy'];
    $list_msg      = $_POST['list_msg'];
    $id      = $_POST['id'];
    $soluong_buy         = $_POST['soluong'];
   $server_buy   = $_POST['server'];
     $api_token = $_POST['api_token'];
      $ghichu   = check_string($_POST['ghichu']);     $speed = check_string($_POST['speed']);
$check_api = $NTD->get_row(" SELECT * FROM `list_api` WHERE `token` = '".$api_token."' AND `url_config` = '".$NTD->check('url_admin')."'
");
    if(!$check_api){
         $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "Không tồn tại api_token này vui lòng đăng kí !";
        die(json_encode($return));
    }
   if($check_api['status']=="wait"){
         $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "api_token chưa được duyệt vui lòng liên hệ admin!";
        die(json_encode($return));
    }
    if($check_api['status']=="block"){
         $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "api_token đã bị khoá !";
        die(json_encode($return));
    }
   
   
     if(empty($action)){
         $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "Thiếu trường dữ liệu action !";
        die(json_encode($return));
    }
    if(empty($api_token)){
         $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "api_token không hợp lệ !";
        die(json_encode($return));
    }
 if($action=="mem-group"){$code_dich_vu="mem_gr";}
 elseif($action=="like-post"){$code_dich_vu="like_post";}
 elseif($action=="like-post-sale"){$code_dich_vu="like_post_sale";}
 elseif($action=="cx-post"){$code_dich_vu="cx_post";}
 elseif($action=="sub-sale"){$code_dich_vu="sub_sale";}
 elseif($action=="sub-speed"){$code_dich_vu="sub_speed";}
 elseif($action=="sub-vip"){$code_dich_vu="sub_vip";}
 elseif($action=="sub-quality"){$code_dich_vu="sub_quality";}
 elseif($action=="cmt"){$code_dich_vu="cmt";}
 elseif($action=="cmt-sale"){$code_dich_vu="cmt_sale";}
 elseif($action=="like-page-sale"){$code_dich_vu="like_page_sale";}
 elseif($action=="like-page-speed"){$code_dich_vu="like_page_speed";}
 elseif($action=="like-page-quality"){$code_dich_vu="like_page_quality";}
 elseif($action=="share"){$code_dich_vu="share";}
 elseif($action=="share-sale"){$code_dich_vu="share_sale";}
 elseif($action=="mat-live"){$code_dich_vu="mat_live";}
 elseif($action=="view-video"){$code_dich_vu="view_video";}
 elseif($action=="like-cmt"){$code_dich_vu="like_cmt";}
 elseif($action=="view-story"){$code_dich_vu="view_story";}
 else{$return['status']=false; $return['error']=true; $return['message']='không tồn tại dịch vụ này !'; die(json_encode($return));}   
    
 if($action=="mem-group"){$link_post="api/service/facebook/member-group/order";}
    elseif($action=="like-post"){$link_post="api/service/facebook/like-post-speed/order";}
    elseif($action=="like-post-sale"){$link_post="api/service/facebook/like-post-sale/order";}
    elseif($action=="cx-post"){$link_post="";}
    elseif($action=="sub-sale"){$link_post="api/service/facebook/sub-sale/order";}
    elseif($action=="sub-speed"){$link_post='api/service/facebook/sub-speed/order';}
    elseif($action=="sub-vip"){$link_post='api/service/facebook/sub-vip/order';}
    elseif($action=="sub-quality"){$link_post='api/service/facebook/sub-quality/order';}
    elseif($action=="cmt"){$link_post="api/service/facebook/comment-speed/order";}
    elseif($action=="cmt-sale"){$link_post="api/service/facebook/comment-sale/order";}
    elseif($action=="like-page-sale"){$link_post="api/service/facebook/like-page-sale/order";}
    elseif($action=="like-page-speed"){$link_post="api/service/facebook/like-page-speed/order";}
    elseif($action=="like-page-quality"){$link_post="api/service/facebook/like-page-quality/order";}
    elseif($action=="share"){$link_post="api/service/facebook/share-profile/order";}
    elseif($action=="share-sale"){$link_post="api/service/facebook/share-sale/order";}
    elseif($action=="mat-live"){$link_post="api/service/facebook/eye-live/order";}
    elseif($action=="view-video"){$link_post="api/service/facebook/view-video/order";}
    elseif($action=="like-cmt"){$link_post="api/service/facebook/like-comment/order";}
    elseif($action=="view-story"){$link_post="api/service/facebook/view-story/order";}   
    
    if(empty($server_buy)){
        $return['status'] = false;
        $return['error'] = true;
        $return['message'] = 'Vui lòng chọn server !';
        die(json_encode($return));
    }
    
    if(empty($id)){
        $return['status'] = false;
        $return['error'] = true;
        $return['message'] = 'Vui lòng nhập ID facebook!';
        die(json_encode($return));
    }
    if(empty($soluong_buy)){
        $return['status'] = false;
        $return['error'] = true;
        $return['message'] = 'Vui lòng nhập số lượng muốn mua !';
        die(json_encode($return));
    }
    if($action=="mat-live"){
   if($soluong_buy < 10){
        $return['status'] = false;
        $return['error'] = true;
        $return['message'] = 'Số lượng order phải lớn hơn 10 !';
        die(json_encode($return));
    }
}
   else{
        if($soluong_buy < 1000){
        $return['status'] = false;
        $return['error'] = true;
        $return['message'] = 'Số lượng mua phải lớn hơn 1000 !';
        die(json_encode($return));
    }
   }
    if(check_number($soluong_buy) != 1){
        $return['status'] = false;
        $return['error'] = true;
        $return['message'] = 'Số lượng order phải là một số.';
        die(json_encode($return));
    }
    
    //Trang THAI URLADMIN
    $status_admin = $NTD->get_row(" SELECT * FROM `setting` WHERE `url_config` = '".$NTD->check('url_admin')."'
");
    if($status_admin['bao_tri']=="OFF"){
         $return['status'] = false;
        $return['error'] = true;
        $return['message'] = 'Hệ thống đang bảo trì';
        die(json_encode($return));
    }
    else
    {
   if($url_site_name==$NTD->check('url_admin')){
         $username_khach = $NTD->get_row(" SELECT * FROM `users` WHERE `token` = '$api_token'  AND  `url_config` = '".$url_site_name."'
");
    if(!$username_khach){
        $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "API Token không hợp lệ";
        die(json_encode($return));
    }
      $gia_dich_vu = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = '$code_dich_vu' AND `status_service` = '1' AND `server_service` = '$server_buy'  AND  `url_config` = '".$url_site_name."'");
        if(!$gia_dich_vu){
        $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "Không Có Dịch Vụ Này !";
        die(json_encode($return));
    }
      $package=$gia_dich_vu['server_name'];
      
        $ratesv = $gia_dich_vu['rate_service']+$gia_dich_vu['rate_service']*$chietkhau/100;
        
        if($action=="sub-sale"){
          
        
          $url="https://graph.facebook.com/$id/subscribers?summary=true&fields=id&limit=1&access_token=$token_fb";
  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    $data_json = json_decode($data, true);
   $code=$data_json['error']['code']; //104  190
   if($code=="104"){
        $number_star= "Error";
   }
   elseif($code=="190"){
      $number_star= "Error";  
   }
   else{
     $number_star= $data_json['summary']['total_count'];
   }
 
}
elseif($action=="like-post"){
          
        
          $url="https://graph.facebook.com/$id?fields=likes.summary(true)&access_token=$token_fb";
  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    $data_json = json_decode($data, true);
   $code=$data_json['error']['code']; //104  190
   if($code=="104"){
        $number_star= "Error";
   }
   elseif($code=="190"){
      $number_star= "Error";  
   }
   else{
     $number_star= $data_json['likes']['summary']['total_count'];
   }
 
}
 else{
     $number_star= 0;
   }
        
        if($action=="mat-live"){
    if($lam_tron=="ON"){
           
    $tongtien = ceil($ratesv) * $soluong_buy * $time_buy; }
    else{
     $tongtien = $ratesv * $soluong_buy * $time_buy;  
    
        
    }
}else{
       if($lam_tron=="ON"){
           
    $tongtien = ceil($ratesv) * $soluong_buy; }
    else{
     $tongtien = $ratesv * $soluong_buy;  
    
        
    }}
    
    if($username_khach['money'] < $tongtien){
        $return['status'] = false;
        $return['error'] = true;
        $return['message'] = 'Số tiền của bạn không đủ để thực hiện giao dịch này';
        die(json_encode($return));
    }
$type_buy = 'API';
    
    //CURL _ NGUỒN DỊCH VỤ
    
if($NTD->check('trang_thai_auto')=="ON"){
$post_data = [
    'link_story'=> $id,
    'idgroup'=> $id,
    'idpage' => $id,
    'idfb'=> $id,
    'idcomment'=> $id,
        'idpost'=> $id,
        'link_post' => $id,
        'link_video' => $id,
        'speed'=>$speed,
        'time'=>$speed,
        'comment'=>$list_msg,
        'server_order' => 'sv'.$server_buy,
        'reaction'=>$loai_camxuc,
         'amount' => $soluong,
         'minutes'=>   $time_buy,
         'note'=>$ghichu
                ];
$head=
array(
        'api-token: '.$token_auto_dvfb,
        'Content-Type: application/json'
          
                    
        );        
        
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => 'https://subgiare.vn/'.$link_post,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => json_encode($post_data),
CURLOPT_HTTPHEADER => $head,
        ));
$response = curl_exec($curl);
curl_close($curl);
$result=json_decode($response, true);
      $result_text= $result['status'];
 
 
 // TRẢ KẾT QUẢ KHÔNG ĐỦ TIỀN 400
 if($result_text==false){
        $return['status'] = false;
                $return['message']   = $result['message'];
                die(json_encode($return));
 }
 // TRẢ KẾT QUẢ SAI THAM SỐ DỮ LIỆU 401
 
// TRẢ KẾT QUẢ THÀNH CÔNG VÀ TIỀN HÀNH LƯU DATA
 elseif($result_text==true){
    // TẠO CÁC THAM SỐ TIỀN HÀNH TRỪ TIỀN 
$tru_tien_mua = $username_khach['money'] - $tongtien; // trừ tiền
$cong_tien_da_tieu = $username_khach['tongtru'] + $tongtien; //tổng tiền đã tiêu
$code_order = 'ID_'.rand(100000,999999999);
    
// LƯU DỮ LIỆU LỊCH SỬ MUA
        $create = $NTD->insert("history_buy", [
            'username'      => $username_khach['username'],
            'type'          => $code_dich_vu,
            'hinh_thuc' => $type_buy,
            'soluong'       => $soluong_buy,
            'tong_tien'     => $tongtien,
            'link_buy'     => $id,
            'server_buy'   => $server_buy,
            'list_msg'     => $list_msg,
            'status'        => 'Start',
         'time_buy' => $time_buy,'ghichu'=>$ghichu,
           'number_star'=> $number_star,
            'ma_gd'         => $code_order,
            'date'          => gettime(),
             'url_config'          => $url_site_name
        ]);
    
if($create){
    
// GỬI THÔNG BÁO ĐƠN VỀ TELEGRAM
apitele('
'.$NTD->site("ten_website").' 
THÔNG BÁO MỚI
Đơn Mua Dịch Vụ: '.strtoupper($code_dich_vu).'
Tài Khoản: '.$username_khach['username'].' 
ID Buy: '.$id.'
Số Lượng: '.$soluong_buy.'
Tổng Tiền: '.number_format($tongtien).'đ
               ');
            
//TIẾN HÀNH TRỪ TIỀN
$update = $NTD->update("users", [
                'money' => $tru_tien_mua,
                'tongtru' => $cong_tien_da_tieu
            ], " `username` = '".$username_khach['username']."'  AND  `url_config` = '".$url_site_name."'");
// LƯU LỊCH SỬ GIAO DỊCH CỦA THÀNH VIÊN  
if($update){
                $ghilog = $NTD->insert("log_site", [
                     'username'=>$username_khach['username'],
                'note'          => ' Đã Tạo Giao Dịch '.$action.' Với Số Tiền '.$tongtien.'',
                'ip'            => getip(),
                'date'          => gettime(),
                 'url_config'          => $url_site_name
                ]);
                        
                $return['status'] = true;
                $return['code_order'] = $code_order;
                $return['message']   = "Thêm đơn thành công !";
                die(json_encode($return));}
else{
                $return['status'] = false;
                $return['message']   = "Lỗi hệ thống";
                die(json_encode($return));
            }
            
        }

else{
            $return['status'] = false;
            $return['message']   = "Lỗi hệ thống";
            die(json_encode($return));
        }
    
 }
 // THÔNG BÁO XẢY LỖI TRONG CODE
    else{
            $return['status'] = false;
            $return['message']   = "Hệ thống đã xảy ra lỗi !";
            die(json_encode($return));
        }}
        elseif($NTD->check('trang_thai_auto')=="OFF"){
          
    // TẠO CÁC THAM SỐ TIỀN HÀNH TRỪ TIỀN 
$tru_tien_mua = $username_khach['money'] - $tongtien; // trừ tiền
$cong_tien_da_tieu = $username_khach['tongtru'] + $tongtien; //tổng tiền đã tiêu
$code_order = 'ID_'.rand(100000,999999999);
    
// LƯU DỮ LIỆU LỊCH SỬ MUA
        $create = $NTD->insert("history_buy", [
            'username'      => $username_khach['username'],
            'type'          => $code_dich_vu,
            'hinh_thuc' => $type_buy,
            'soluong'       => $soluong_buy,
            'tong_tien'     => $tongtien,
            'link_buy'     => $id,
            'server_buy'   => $server_buy,'ghichu'=>$ghichu,
            'list_msg'     => $list_msg,
            'status'        => 'Pendding',
         'time_buy' => $time_buy,
           'number_star'=> $number_star,
            'ma_gd'         => $code_order,
            'date'          => gettime(),
             'url_config'          => $url_site_name
        ]);
    
if($create){
    
// GỬI THÔNG BÁO ĐƠN VỀ TELEGRAM
apitele('
'.$NTD->site("ten_website").' 
THÔNG BÁO MỚI
Đơn Mua Dịch Vụ: '.strtoupper($code_dich_vu).'
Tài Khoản: '.$username_khach['username'].' 
ID Buy: '.$id.'
Số Lượng: '.$soluong_buy.'
Tổng Tiền: '.number_format($tongtien).'đ
               ');
               
//TIẾN HÀNH TRỪ TIỀN
$update = $NTD->update("users", [
                'money' => $tru_tien_mua,
                'tongtru' => $cong_tien_da_tieu
            ], " `username` = '".$username_khach['username']."'   AND  `url_config` = '".$url_site_name."'");
// LƯU LỊCH SỬ GIAO DỊCH CỦA THÀNH VIÊN  
if($update){
                $ghilog = $NTD->insert("log_site", [
                    'username'=>$username_khach['username'],
                'note'          => ' Đã Tạo Giao Dịch '.$action.' Với Số Tiền '.$tongtien.'',
                'ip'            => getip(),
                'date'          => gettime(),
                 'url_config'          => $url_site_name
                ]);
                        
                $return['status'] = true;
                $return['code_order'] = $code_order;
                $return['message']   = "Thêm đơn thành công !";
                die(json_encode($return));}
else{
                $return['status'] = false;
                $return['message']   = "Lỗi hệ thống";
                die(json_encode($return));
            }
            
        }

else{
            $return['status'] = false;
            $return['message']   = "Lỗi hệ thống";
            die(json_encode($return));
        }
    
   
        }
        
        else{
            $return['status'] = false;
            $return['message']   = "Lỗi hệ thống vui lòng báo Admin !";
            die(json_encode($return));
        }
    

}





    else{
        
    $get_site = $NTD->get_row(" SELECT * FROM `ds_sitecon` WHERE `site_con` = '$url_site_name'");
   $get_dv_site_me = $NTD->get_row(" SELECT * FROM `server_service` WHERE `url_config` = '".$get_site['site_me']."'");
    if(!$get_dv_site_me){
             
               
        $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "Hệ thống chưa cập nhật vui lòng liên hệ admin !";
        die(json_encode($return));
      
             }
   $get_status_site_me = $NTD->get_row(" SELECT * FROM `setting` WHERE `url_config` = '".$get_site['site_me']."'");
             if($get_status_site_me['bao_tri']=="OFF"){
             
               
        $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "Hệ thống đang bảo trì vui lòng liên hệ admin !";
        die(json_encode($return));
      
             }
             
             
         $username_khach = $NTD->get_row(" SELECT * FROM `users` WHERE `token` = '$api_token'  AND  `url_config` = '".$url_site_name."'
");
    
    $username_admin = $NTD->get_row(" SELECT * FROM `users` WHERE `token` = '".$get_site['token']."'  AND  `url_config` = '".$get_site['site_me']."'
");

    if(!$username_khach){
        $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "API Token không hợp lệ";
        die(json_encode($return));
    }
    //LẤY GIÁ DỊCH VỤ
      $gia_dich_vu = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = '$code_dich_vu' AND `status_service` = '1' AND `server_service` = '$server_buy' AND  `url_config` = '".$url_site_name."'" );
       if(!$gia_dich_vu){
        $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "sever không hợp lệ !";
        die(json_encode($return));
    }
       $package=$gia_dich_vu['server_name'];
       $gia_dich_vu_site_me = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = '$code_dich_vu' AND `status_service` = '1' AND `server_service` = '$server_buy' AND  `url_config` = '".$get_site['site_me']."'");
        if(!$gia_dich_vu_site_me){
        $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "sever không hợp lệ !";
        die(json_encode($return));
    }
       $check_site_me_config = $NTD->get_row(" SELECT * FROM `setting` WHERE `url_config` = '".$get_site['site_me']."'   ");

 if($username_admin['capbac']==0){
         $chiet_khau_auto= $check_site_me_config['ck_user'];
     }
     elseif($username_admin['capbac']==1){
         $chiet_khau_auto= $check_site_me_config['ck_ctv'];
     }
      elseif($username_admin['capbac']==2){
         $chiet_khau_auto= $check_site_me_config['ck_dl'];
     }
      elseif($username_admin['capbac']==3){
         $chiet_khau_auto= $check_site_me_config['ck_npp'];
     }
      elseif($username_admin['capbac']==99){
         $chiet_khau_auto=0;
     }
        $ratesv = $gia_dich_vu['rate_service']+$gia_dich_vu['rate_service']*$chietkhau/100;
        $ratesv_site_me= $gia_dich_vu_site_me['rate_service']+$gia_dich_vu_site_me['rate_service']*$chiet_khau_auto/100;
        
         if($action=="sub-sale"){
          
        
          $url="https://graph.facebook.com/$id/subscribers?summary=true&fields=id&limit=1&access_token=$token_fb";
  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    $data_json = json_decode($data, true);
   $code=$data_json['error']['code']; //104  190
   if($code=="104"){
        $number_star= "Error";
   }
   elseif($code=="190"){
      $number_star= "Error";  
   }
   else{
     $number_star= $data_json['summary']['total_count'];
   }
 
}elseif($action=="like-post"){
          
        
          $url="https://graph.facebook.com/$id?fields=likes.summary(true)&access_token=$token_fb";
  $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    $data_json = json_decode($data, true);
   $code=$data_json['error']['code']; //104  190
   if($code=="104"){
        $number_star= "Error";
   }
   elseif($code=="190"){
      $number_star= "Error";  
   }
   else{
     $number_star= $data_json['likes']['summary']['total_count'];
   }
 
}
else{
     $number_star= 0;
   }
    if($action=="mat-live"){
    if($lam_tron=="ON"){
          $tongtien_site_me = ceil($ratesv_site_me) * $soluong_buy * $time_buy;  
           
    $tongtien = ceil($ratesv) * $soluong_buy * $time_buy; }
    else{
     $tongtien = $ratesv * $soluong_buy * $time_buy;  
      $tongtien_site_me = $ratesv_site_me * $soluong_buy * $time_buy;  
        
    }
}else{
       if($lam_tron=="ON"){
                     $tongtien_site_me = ceil($ratesv_site_me) * $soluong_buy;  
    $tongtien = ceil($ratesv) * $soluong_buy; }
    else{
     $tongtien = $ratesv * $soluong_buy;  
    $tongtien_site_me=$ratesv_site_me * $soluong_buy;  
        
    }}
    
    if($username_admin['money'] < $tongtien){
        $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "Tài nguyên đã hết vui lòng báo Admin !";
        die(json_encode($return));
    }
    
    if($username_khach['money'] < $tongtien){
        $return['status'] = false;
        $return['error'] = true;
        $return['message'] = 'Số tiền của bạn không đủ để thực hiện giao dịch này';
        die(json_encode($return));
    }
$type_buy = 'API';
     $get_site_mee = $NTD->get_row(" SELECT * FROM `ds_sitecon` WHERE `site_con` = '".$get_site['site_me']."'");

    if($get_site_mee){
      $mien_site_me=$get_site_mee['site_me'];
       $mien_site_con=$get_site['site_me'];
$mien_site_me_thuong=strtolower($get_site_mee['site_me']);
$url_post="https://$mien_site_me_thuong/auth/service/facebook/site_con.php?id=$id&soluong=$soluong_buy&server=$server_buy&code_dich_vu=$code_dich_vu&action=$action&loai_camxuc=$loai_camxuc&time_buy=$time_buy&list_msg=$list_msg&domain_site_con=$mien_site_con&domain_site_me=$mien_site_me";
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url_post); 
curl_setopt($ch, CURLOPT_HTTPHEADER, $head); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_ENCODING, true); 
   $buy_text = curl_exec($ch); 
   curl_close($ch); 
   $json_text=json_decode($buy_text, true);
 if($json_text['code']=="400"){
          $return['status'] = false;
                $return['message']   = "Tài Nguyên Website Đã Hết Vui Lòng Báo ADMIN";
                die(json_encode($return));
      }
       elseif($json_text['code']=="401"){
          $return['status'] = false;
                $return['message']   = "Đã xảy ra lỗi !";
                die(json_encode($return));
      }
       elseif($json_text['code']=="405"){
          $return['status'] = false;
                $return['message']   = "Hệ đang bảo trì vui lòng báo admin !";
                die(json_encode($return));
      }

       if($json_text['code']=="1"){
         
      }
      
    }
    //CURL _ NGUỒN DỊCH VỤ
    
if($NTD->check('trang_thai_auto')=="ON"){
$post_data = [
    'link_story'=> $id,
    'idgroup'=> $id,
    'idpage' => $id,
    'idfb'=> $id,
    'idcomment'=> $id,
        'idpost'=> $id,
        'link_post' => $id,
        'link_video' => $id,
        'speed'=>$speed,
        'time'=>$speed,
        'comment'=>$list_msg,
        'server_order' => 'sv'.$server_buy,
        'reaction'=>$loai_camxuc,
         'amount' => $soluong,
         'minutes'=>   $time_buy,
         'note'=>$ghichu
                ];
$head=
array(
        'api-token: '.$token_auto_dvfb,
        'Content-Type: application/json'
          
                    
        );        
        
$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => 'https://subgiare.vn/'.$link_post,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => '',
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 0,
CURLOPT_FOLLOWLOCATION => true,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => 'POST',
CURLOPT_POSTFIELDS => json_encode($post_data),
CURLOPT_HTTPHEADER => $head,
        ));
$response = curl_exec($curl);
curl_close($curl);
$result=json_decode($response, true);
      $result_text= $result['status'];
 
 
 // TRẢ KẾT QUẢ KHÔNG ĐỦ TIỀN 400
 if($result_text==false){
        $return['status'] = false;
                $return['message']   =  $response1['message'];
                die(json_encode($return));
 }
 
// TRẢ KẾT QUẢ THÀNH CÔNG VÀ TIỀN HÀNH LƯU DATA
 elseif($result_text==true){
    // TẠO CÁC THAM SỐ TIỀN HÀNH TRỪ TIỀN 
$tru_tien_mua = $username_khach['money'] - $tongtien; // trừ tiền thành viên
$tru_tien_mua_admin = $username_admin['money'] - $tongtien_site_me; // trừ tiền chủ site
$cong_tien_da_tieu = $username_khach['tongtru'] + $tongtien; //tổng tiền đã tiêu thành viên
$cong_tien_da_tieu_admin = $username_admin['tongtru'] + $tongtien_site_me; //tổng tiền đã tiêu thành viên
$code_order = 'ID_'.rand(100000,999999999);
    
// LƯU DỮ LIỆU LỊCH SỬ MUA
        $create = $NTD->insert("history_buy", [
            'username'      => $username_khach['username'],
            'type'          => $code_dich_vu,
            'hinh_thuc' => $type_buy,
            'soluong'       => $soluong_buy,
            'tong_tien'     => $tongtien,
            'link_buy'     => $id,'ghichu'=>$ghichu,
            'server_buy'   => $server_buy,
            'list_msg'     => $list_msg,
            'status'        => 'Start',
         'time_buy' => $time_buy,
           'number_star'=> $number_star,
            'ma_gd'         => $code_order,
            'date'          => gettime(),
             'url_config'          => $url_site_name
        ]);
    $create_ls_site = $NTD->insert("history_buy", [
            'username'      => $get_site['username'],
            'type'          => $code_dich_vu,
            'hinh_thuc' => $type_buy,
            'soluong'       => $soluong_buy,'ghichu'=>$ghichu,
            'tong_tien'     => $tongtien_site_me,
            'link_buy'     => $id,
              'number_star'=> $number_star,
            'server_buy'   => $server_buy,
            'list_msg'     => $list_msg,
            'status'        => 'Start',
         'time_buy' => $time_buy,
            'ma_gd'         => $code_order,
            'date'          => gettime(),
             'url_config'          => $get_site['site_me']
        ]);
if($create){
    
// GỬI THÔNG BÁO ĐƠN VỀ TELEGRAM
apitele('
'.$NTD->site("ten_website").' 
THÔNG BÁO MỚI
Đơn Mua Dịch Vụ: '.strtoupper($code_dich_vu).'
Tài Khoản: '.$username_khach['username'].' 
ID Buy: '.$id.'
Số Lượng: '.$soluong_buy.'
Tổng Tiền: '.number_format($tongtien).'đ
               ');
        apitelegram('
'.$get_status_site_me["ten_website"].' 
THÔNG BÁO MỚI
Đơn Mua Dịch Vụ: '.strtoupper($code_dich_vu).'
Tài Khoản: '.$username_khach['username'].' 
ID Buy: '.$id.'
Số Lượng: '.$soluong_buy.'
Tổng Tiền: '.number_format($tongtien_site_me).'đ
               ', $get_status_site_me['bot_tele'], $get_status_site_me['id_chat_tele']);       
//TIẾN HÀNH TRỪ TIỀN
$update = $NTD->update("users", [
                'money' => $tru_tien_mua,
                'tongtru' => $cong_tien_da_tieu
            ], " `username` = '".$username_khach['username']."'  AND  `url_config` = '".$url_site_name."'");
            $update_site = $NTD->update("users", [
                'money' => $tru_tien_mua_admin,
                'tongtru' => $cong_tien_da_tieu_admin
            ], " `username` = '".$get_site['username']."'  AND  `url_config` = '".$get_site['site_me']."'");
// LƯU LỊCH SỬ GIAO DỊCH CỦA THÀNH VIÊN  
if($update){
                $ghilog = $NTD->insert("log_site", [
                    'username'=>$username_khach['username'],
                'note'          => 'Đã Tạo Giao Dịch '.$action.' Với Số Tiền '.$tongtien.'',
                'ip'            => getip(),
                'date'          => gettime(),
                 'url_config'          => $url_site_name
                ]);
                  $ghilog_site = $NTD->insert("log_site", [
                       'username'=>$get_site['username'],
                'note'          => ' Đã Tạo Giao Dịch '.$action.' Với Số Tiền '.$tongtien_site_me.'',
                'ip'            => getip(),
                'date'          => gettime(),
                 'url_config'          => $get_site['site_me']
                ]);
                
               
                
                
                
                
                
                $return['status'] = true;
                $return['code_order'] = $code_order;
                $return['message']   = "Thêm đơn thành công !";
                die(json_encode($return));}
else{
                $return['status'] = false;
                $return['message']   = "Lỗi hệ thống";
                die(json_encode($return));
            }
            
        }

else{
            $return['status'] = false;
            $return['message']   = "Lỗi hệ thống";
            die(json_encode($return));
        }
    
 }
 // THÔNG BÁO XẢY LỖI TRONG CODE
    else{
            $return['status'] = false;
            $return['message']   = "Hệ thống đã xảy ra lỗi !";
            die(json_encode($return));
        }}
        elseif($NTD->check('trang_thai_auto')=="OFF"){
          
    // TẠO CÁC THAM SỐ TIỀN HÀNH TRỪ TIỀN 
$tru_tien_mua = $username_khach['money'] - $tongtien; // trừ tiền thành viên
$tru_tien_mua_admin = $username_admin['money'] - $tongtien_site_me; // trừ tiền chủ site
$cong_tien_da_tieu = $username_khach['tongtru'] + $tongtien; //tổng tiền đã tiêu thành viên
$cong_tien_da_tieu_admin = $username_admin['tongtru'] + $tongtien_site_me; //tổng tiền đã tiêu thành viên
$code_order = 'ID_'.rand(100000,999999999);
    
// LƯU DỮ LIỆU LỊCH SỬ MUA
        $create = $NTD->insert("history_buy", [
            'username'      => $username_khach['username'],
            'type'          => $code_dich_vu,
            'hinh_thuc' => 'Login Website',
            'soluong'       => $soluong_buy,
            'tong_tien'     => $tongtien,
            'link_buy'     => $id,
            'server_buy'   => $server_buy,
            'list_msg'     => $list_msg,
            'status'        => 'Pendding','ghichu'=>$ghichu,
         'time_buy' => $time_buy,
           'number_star'=> $number_star,
            'ma_gd'         => $code_order,
            'date'          => gettime(),
             'url_config'          => $url_site_name
        ]);
         $create23 = $NTD->insert("history_buy", [
            'username'      => $get_site['username'],
            'type'          => $code_dich_vu,
            'hinh_thuc' => $type_buy,
            'soluong'       => $soluong_buy,
            'tong_tien'     => $tongtien_site_me,
            'link_buy'     => $id,
            'server_buy'   => $server_buy,'ghichu'=>$ghichu,
            'list_msg'     => $list_msg,
            'status'        => 'Pendding',
         'time_buy' => $time_buy,
           'number_star'=> $number_star,
            'ma_gd'         => $code_order,
            'date'          => gettime(),
             'url_config'          =>  $get_site['site_me']
        ]);
    
if($create){
    
// GỬI THÔNG BÁO ĐƠN VỀ TELEGRAM
apitele('
'.$NTD->site("ten_website").' 
THÔNG BÁO MỚI
Đơn Mua Dịch Vụ: '.strtoupper($code_dich_vu).'
Tài Khoản: '.$username_khach['username'].' 
ID Buy: '.$id.'
Số Lượng: '.$soluong_buy.'
Tổng Tiền: '.number_format($tongtien).'đ
               ');
            apitelegram('
'.$get_status_site_me["ten_website"].' 
THÔNG BÁO MỚI
Đơn Mua Dịch Vụ: '.strtoupper($code_dich_vu).'
Tài Khoản: '.$username_khach['username'].' 
ID Buy: '.$id.'
Số Lượng: '.$soluong_buy.'
Tổng Tiền: '.number_format($tongtien_site_me).'đ
               ', $get_status_site_me['bot_tele'], $get_status_site_me['id_chat_tele']);             
//TIẾN HÀNH TRỪ TIỀN
$update = $NTD->update("users", [
                'money' => $tru_tien_mua,
                'tongtru' => $cong_tien_da_tieu
            ], " `username` = '".$username_khach['username']."'   AND  `url_config` = '".$url_site_name."'");
            $update_site23 = $NTD->update("users", [
                'money' => $tru_tien_mua_admin,
                'tongtru' => $cong_tien_da_tieu_admin
            ], " `username` = '".$get_site['username']."'   AND  `url_config` = '".$get_site['site_me']."'");
// LƯU LỊCH SỬ GIAO DỊCH CỦA THÀNH VIÊN  
if($update){
                $ghilog = $NTD->insert("log_site", [
                  'username'=>  $username_khach['username'],
                'note'          => ' Đã Tạo Giao Dịch '.$action.' Với Số Tiền '.$tongtien.'',
                'ip'            => getip(),
                'date'          => gettime(),
                 'url_config'          => $url_site_name
                ]);
                        $ghilog23 = $NTD->insert("log_site", [
                             'username'=>  $get_site['username'],
                'note'          => ' Đã Tạo Giao Dịch '.$action.' Với Số Tiền '.$tongtien_site_me.'',
                'ip'            => getip(),
                'date'          => gettime(),
                 'url_config'          => $get_site['site_me']
                ]);
                $return['status'] = true;
                $return['code_order'] = $code_order;
                $return['message']   = "Thêm đơn thành công !";
                die(json_encode($return));}
else{
                $return['status'] = false;
                $return['message']   = "Lỗi hệ thống";
                die(json_encode($return));
            }
            
        }

else{
            $return['status'] = false;
            $return['message']   = "Lỗi hệ thống";
            die(json_encode($return));
        }
    
   
        }
        
        else{
            $return['status'] = false;
            $return['message']   = "Lỗi hệ thống vui lòng báo Admin !";
            die(json_encode($return));
        }
    


    }} 
    

}




