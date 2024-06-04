<?php
require('../config/function.php');
$data = json_decode(curl_get("https://api.dailysieure.com/api-momo?api=2&apikey=b636e0bf0969cc90efc739f2814e3e34c3f60c60251c79cc47cddcfa5da28530"), true);
foreach($data['tranList'] as $momo)
{
    $sotien = $momo['amount'];
    $magd   = $momo['tranId'];
    $nd     = $momo['comment'];
    $id    = get_id_bank($nd);
    if($momo['io'] == 1) {
        if($id)
        {
             $checkthe = $NTD->get_row("SELECT * FROM `history_naptien` WHERE `type` = 'Bank' AND `tranid` = '$magd'  ");
             if(!$checkthe)
             {
                 $checkUser = $NTD->get_row("SELECT * FROM `users` WHERE `id` = '$id'  ");
                 if($checkUser)
                 {
                     $getusernap = $checkUser['username'];
                     $NTD->insert("history_naptien", [
                                    'date' => gettime(),
                                    'type' => 'Bank',
                                    'loaithe' => 'MOMO',
                                    'username'      => $getusernap,
                                    'thucnhan'      => $sotien,
                                    'trangthai'     => 1,
                                  
                                    'tranid'        => $magd,
                                     'url_config'          => $url_site_name
                                    ]);
                     $update1= $NTD->cong("users", "money", $sotien, " `username` = '$getusernap' ");
                     $update3= $NTD->cong("users", "tongnap", $sotien, " `username` = '$getusernap' ");
                 }
             }
        }
    }
}