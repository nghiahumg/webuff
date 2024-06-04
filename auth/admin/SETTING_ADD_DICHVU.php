 <?php require('../../config/function.php');

  if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
    /****
       Up to you which header to send, some prefer 403 even if 
       the files does exist for security
     ****/
    /**** header( 'HTTP/1.0 403 Not Found', TRUE, 403 ); ****/
    /**** include('403.html'); ****/
    include('../../pages/error405.php');
    // $return['status'] = false;
    // $return['error'] = 'error';
    // $return['msg']   = 'Method GET not allowed!';
    // die(json_encode($return));
    /**** choose the appropriate page to redirect users ****/
  } else {

    $action            = check_string($_POST['action']);
    if ($action == "set_auto_dv") {
      $api_token = api_token();
      $checkusite = $NTD->get_row(" SELECT * FROM `users` WHERE `token` = '$api_token'  AND  `url_config` = '" . $url_site_name . "' ");

      $check_site = $NTD->get_row(" SELECT * FROM `ds_sitecon` WHERE `site_con` = '$url_site_name'   ");
      $check_site_config = $NTD->get_row(" SELECT * FROM `setting` WHERE `url_config` = '" . $check_site['site_me'] . "'   ");
      $check_user_site_me = $NTD->get_row(" SELECT * FROM `users` WHERE `token` = '$api_token'  AND  `url_config` = '" . $check_site['site_me'] . "' ");


      if ($check_user_site_me['capbac'] == 0) {
        $chiet_khau_auto = $check_site_config['ck_user'];
      } elseif ($check_user_site_me['capbac'] == 1) {
        $chiet_khau_auto = $check_site_config['ck_ctv'];
      } elseif ($check_user_site_me['capbac'] == 2) {
        $chiet_khau_auto = $check_site_config['ck_dl'];
      } elseif ($check_user_site_me['capbac'] == 3) {
        $chiet_khau_auto = $check_site_config['ck_npp'];
      } elseif ($check_user_site_me['capbac'] == 99) {
        $chiet_khau_auto = 0;
      }

      if (empty($api_token)) {
        $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "Thiếu API Token";
        die(json_encode($return));
      }

      if (!$checkusite) {
        $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "API Token không hợp lệ";
        die(json_encode($return));
      }
      if ($checkusite['capbac'] != 99) {
        $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "Bạn không phải là admin !";
        die(json_encode($return));
      }
      $get_site2 = $NTD->get_row(" SELECT * FROM `ds_sitecon` WHERE `site_con` = '" . $url_site_name . "'");




      // 

      $so = 1;

      while ($so < 35) {


        $gia_like_post = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'like_post' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_like_post = $gia_like_post['rate_service'] + $gia_like_post['rate_service'] * $chiet_khau_auto / 100;


        $insert_like_post = $NTD->insert("server_service", [
          'code_service'      => $gia_like_post['code_service'],
          'server_service'          => $gia_like_post['server_service'],
          'rate_service'      => $chiet_khau_like_post,
          'title_service'         => $gia_like_post['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_like_post['server_name'],
          'server_text' => $gia_like_post['server_text'],
          'url_config'          => $url_site_name,
        ]);

        $gia_like_post_sale = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'like_post_sale' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_like_post_sale = $gia_like_post_sale['rate_service'] + $gia_like_post_sale['rate_service'] * $chiet_khau_auto / 100;


        $insert_like_post_sale = $NTD->insert("server_service", [
          'code_service'      => $gia_like_post_sale['code_service'],
          'server_service'          => $gia_like_post_sale['server_service'],
          'rate_service'      => $chiet_khau_like_post_sale,
          'title_service'         => $gia_like_post_sale['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_like_post_sale['server_name'],
          'server_text' => $gia_like_post_sale['server_text'],
          'url_config'          => $url_site_name,
        ]);



        $gia_sub_sale = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'sub_sale' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_sub_sale = $gia_sub_sale['rate_service'] + $gia_sub_sale['rate_service'] * $chiet_khau_auto / 100;


        $insert_sub_sale = $NTD->insert("server_service", [
          'code_service'      => $gia_sub_sale['code_service'],
          'server_service'          => $gia_sub_sale['server_service'],
          'rate_service'      => $chiet_khau_sub_sale,
          'title_service'         => $gia_sub_sale['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_sub_sale['server_name'],
          'server_text' => $gia_sub_sale['server_text'],
          'url_config'          => $url_site_name,
        ]);

        $gia_sub_speed = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'sub_speed' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_sub_speed = $gia_sub_speed['rate_service'] + $gia_sub_speed['rate_service'] * $chiet_khau_auto / 100;


        $insert_sub_speed = $NTD->insert("server_service", [
          'code_service'      => $gia_sub_speed['code_service'],
          'server_service'          => $gia_sub_speed['server_service'],
          'rate_service'      => $chiet_khau_sub_speed,
          'title_service'         => $gia_sub_speed['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_sub_speed['server_name'],
          'server_text' => $gia_sub_speed['server_text'],
          'url_config'          => $url_site_name,
        ]);


        $gia_sub_vip = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'sub_vip' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_sub_vip = $gia_sub_vip['rate_service'] + $gia_sub_vip['rate_service'] * $chiet_khau_auto / 100;


        $insert_sub_vip = $NTD->insert("server_service", [
          'code_service'      => $gia_sub_vip['code_service'],
          'server_service'          => $gia_sub_vip['server_service'],
          'rate_service'      => $chiet_khau_sub_vip,
          'title_service'         => $gia_sub_vip['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_sub_vip['server_name'],
          'server_text' => $gia_sub_vip['server_text'],
          'url_config'          => $url_site_name,
        ]);

        $gia_sub_quality = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'sub_quality' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_sub_quality = $gia_sub_quality['rate_service'] + $gia_sub_quality['rate_service'] * $chiet_khau_auto / 100;


        $insert_sub_quality = $NTD->insert("server_service", [
          'code_service'      => $gia_sub_quality['code_service'],
          'server_service'          => $gia_sub_quality['server_service'],
          'rate_service'      => $chiet_khau_sub_quality,
          'title_service'         => $gia_sub_quality['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_sub_quality['server_name'],
          'server_text' => $gia_sub_quality['server_text'],
          'url_config'          => $url_site_name,
        ]);







        $gia_cmt = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'cmt' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_cmt = $gia_cmt['rate_service'] + $gia_cmt['rate_service'] * $chiet_khau_auto / 100;


        $insert_cmt = $NTD->insert("server_service", [
          'code_service'      => $gia_cmt['code_service'],
          'server_service'          => $gia_cmt['server_service'],
          'rate_service'      => $chiet_khau_cmt,
          'title_service'         => $gia_cmt['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_cmt['server_name'],
          'server_text' => $gia_cmt['server_text'],
          'url_config'          => $url_site_name,
        ]);


        $gia_cmt_sale = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'cmt_sale' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_cmt_sale = $gia_cmt_sale['rate_service'] + $gia_cmt_sale['rate_service'] * $chiet_khau_auto / 100;


        $insert_cmt_sale = $NTD->insert("server_service", [
          'code_service'      => $gia_cmt_sale['code_service'],
          'server_service'          => $gia_cmt_sale['server_service'],
          'rate_service'      => $chiet_khau_cmt_sale,
          'title_service'         => $gia_cmt_sale['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_cmt_sale['server_name'],
          'server_text' => $gia_cmt_sale['server_text'],
          'url_config'          => $url_site_name,
        ]);
        $gia_like_cmt = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'like_cmt' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_like_cmt = $gia_like_cmt['rate_service'] + $gia_like_cmt['rate_service'] * $chiet_khau_auto / 100;


        $insert_like_cmt = $NTD->insert("server_service", [
          'code_service'      => $gia_like_cmt['code_service'],
          'server_service'          => $gia_like_cmt['server_service'],
          'rate_service'      => $chiet_khau_like_cmt,
          'title_service'         => $gia_like_cmt['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_like_cmt['server_name'],
          'server_text' => $gia_like_cmt['server_text'],
          'url_config'          => $url_site_name,
        ]);

        $gia_like_page_sale = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'like_page_sale' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_like_page_sale = $gia_like_page_sale['rate_service'] + $gia_like_page_sale['rate_service'] * $chiet_khau_auto / 100;


        $insert_like_page_sale = $NTD->insert("server_service", [
          'code_service'      => $gia_like_page_sale['code_service'],
          'server_service'          => $gia_like_page_sale['server_service'],
          'rate_service'      => $chiet_khau_like_page_sale,
          'title_service'         => $gia_like_page_sale['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_like_page_sale['server_name'],
          'server_text' => $gia_like_page_sale['server_text'],
          'url_config'          => $url_site_name,
        ]);
        $gia_like_page_speed = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'like_page_speed' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_like_page_speed = $gia_like_page_speed['rate_service'] + $gia_like_page_speed['rate_service'] * $chiet_khau_auto / 100;


        $insert_like_page_speed = $NTD->insert("server_service", [
          'code_service'      => $gia_like_page_speed['code_service'],
          'server_service'          => $gia_like_page_speed['server_service'],
          'rate_service'      => $chiet_khau_like_page_speed,
          'title_service'         => $gia_like_page_speed['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_like_page_speed['server_name'],
          'server_text' => $gia_like_page_speed['server_text'],
          'url_config'          => $url_site_name,
        ]);

        $gia_like_page_quality = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'like_page_quality' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_like_page_quality = $gia_like_page_quality['rate_service'] + $gia_like_page_quality['rate_service'] * $chiet_khau_auto / 100;


        $insert_like_page_quality = $NTD->insert("server_service", [
          'code_service'      => $gia_like_page_quality['code_service'],
          'server_service'          => $gia_like_page_quality['server_service'],
          'rate_service'      => $chiet_khau_like_page_quality,
          'title_service'         => $gia_like_page_quality['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_like_page_quality['server_name'],
          'server_text' => $gia_like_page_quality['server_text'],
          'url_config'          => $url_site_name,
        ]);

        $gia_mem_gr = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'mem_gr' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_mem_gr = $gia_mem_gr['rate_service'] + $gia_mem_gr['rate_service'] * $chiet_khau_auto / 100;


        $insert_mem_gr = $NTD->insert("server_service", [
          'code_service'      => $gia_mem_gr['code_service'],
          'server_service'          => $gia_mem_gr['server_service'],
          'rate_service'      => $chiet_khau_mem_gr,
          'title_service'         => $gia_mem_gr['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_mem_gr['server_name'],
          'server_text' => $gia_mem_gr['server_text'],
          'url_config'          => $url_site_name,
        ]);

        $gia_share = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'share' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_share = $gia_share['rate_service'] + $gia_share['rate_service'] * $chiet_khau_auto / 100;


        $insert_share = $NTD->insert("server_service", [
          'code_service'      => $gia_share['code_service'],
          'server_service'          => $gia_share['server_service'],
          'rate_service'      => $chiet_khau_share,
          'title_service'         => $gia_share['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_share['server_name'],
          'server_text' => $gia_share['server_text'],
          'url_config'          => $url_site_name,
        ]);

        $gia_share_sale = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'share_sale' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_share_sale = $gia_share_sale['rate_service'] + $gia_share_sale['rate_service'] * $chiet_khau_auto / 100;


        $insert_share_sale = $NTD->insert("server_service", [
          'code_service'      => $gia_share_sale['code_service'],
          'server_service'          => $gia_share_sale['server_service'],
          'rate_service'      => $chiet_khau_share_sale,
          'title_service'         => $gia_share_sale['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_share_sale['server_name'],
          'server_text' => $gia_share_sale['server_text'],
          'url_config'          => $url_site_name,
        ]);


        $gia_mat_live = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'mat_live' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_mat_live = $gia_mat_live['rate_service'] + $gia_mat_live['rate_service'] * $chiet_khau_auto / 100;


        $insert_mat_live = $NTD->insert("server_service", [
          'code_service'      => $gia_mat_live['code_service'],
          'server_service'          => $gia_mat_live['server_service'],
          'rate_service'      => $chiet_khau_mat_live,
          'title_service'         => $gia_mat_live['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_mat_live['server_name'],
          'server_text' => $gia_mat_live['server_text'],
          'url_config'          => $url_site_name,
        ]);
        $gia_view_video = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'view_video' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_view_video = $gia_view_video['rate_service'] + $gia_view_video['rate_service'] * $chiet_khau_auto / 100;


        $insert_view_video = $NTD->insert("server_service", [
          'code_service'      => $gia_view_video['code_service'],
          'server_service'          => $gia_view_video['server_service'],
          'rate_service'      => $chiet_khau_view_video,
          'title_service'         => $gia_view_video['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_view_video['server_name'],
          'server_text' => $gia_view_video['server_text'],
          'url_config'          => $url_site_name,
        ]);

        $gia_vip_like = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'vip_like' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_vip_like = $gia_vip_like['rate_service'] + $gia_vip_like['rate_service'] * $chiet_khau_auto / 100;


        $insert_vip_like = $NTD->insert("server_service", [
          'code_service'      => $gia_vip_like['code_service'],
          'server_service'          => $gia_vip_like['server_service'],
          'rate_service'      => $chiet_khau_vip_like,
          'title_service'         => $gia_vip_like['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_vip_like['server_name'],
          'server_text' => $gia_vip_like['server_text'],
          'url_config'          => $url_site_name,
        ]);
        $gia_view_story = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'view_story' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_view_story = $gia_view_story['rate_service'] + $gia_view_story['rate_service'] * $chiet_khau_auto / 100;


        $insert_view_story = $NTD->insert("server_service", [
          'code_service'      => $gia_view_story['code_service'],
          'server_service'          => $gia_view_story['server_service'],
          'rate_service'      => $chiet_khau_view_story,
          'title_service'         => $gia_view_story['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_view_story['server_name'],
          'server_text' => $gia_view_story['server_text'],
          'url_config'          => $url_site_name,
        ]);



        $gia_like_ins = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'like_ins' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_like_ins = $gia_like_ins['rate_service'] + $gia_like_ins['rate_service'] * $chiet_khau_auto / 100;


        $insert_like_ins = $NTD->insert("server_service", [
          'code_service'      => $gia_like_ins['code_service'],
          'server_service'          => $gia_like_ins['server_service'],
          'rate_service'      => $chiet_khau_like_ins,
          'title_service'         => $gia_like_ins['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_like_ins['server_name'],
          'server_text' => $gia_like_ins['server_text'],
          'url_config'          => $url_site_name,
        ]);


        $gia_sub_ins = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'sub_ins' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_sub_ins = $gia_sub_ins['rate_service'] + $gia_sub_ins['rate_service'] * $chiet_khau_auto / 100;


        $insert_sub_ins = $NTD->insert("server_service", [
          'code_service'      => $gia_sub_ins['code_service'],
          'server_service'          => $gia_sub_ins['server_service'],
          'rate_service'      => $chiet_khau_sub_ins,
          'title_service'         => $gia_sub_ins['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_sub_ins['server_name'],
          'server_text' => $gia_sub_ins['server_text'],
          'url_config'          => $url_site_name,
        ]);
        $gia_cmt_tiktok = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'cmt_tiktok' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_cmt_tiktok = $gia_cmt_tiktok['rate_service'] + $gia_cmt_tiktok['rate_service'] * $chiet_khau_auto / 100;


        $insert_cmt_tiktok = $NTD->insert("server_service", [
          'code_service'      => $gia_cmt_tiktok['code_service'],
          'server_service'          => $gia_cmt_tiktok['server_service'],
          'rate_service'      => $chiet_khau_cmt_tiktok,
          'title_service'         => $gia_cmt_tiktok['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_cmt_tiktok['server_name'],
          'server_text' => $gia_cmt_tiktok['server_text'],
          'url_config'          => $url_site_name,
        ]);
        $gia_like_tiktok = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'like_tiktok' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_like_tiktok = $gia_like_tiktok['rate_service'] + $gia_like_tiktok['rate_service'] * $chiet_khau_auto / 100;


        $insert_like_tiktok = $NTD->insert("server_service", [
          'code_service'      => $gia_like_tiktok['code_service'],
          'server_service'          => $gia_like_tiktok['server_service'],
          'rate_service'      => $chiet_khau_like_tiktok,
          'title_service'         => $gia_like_tiktok['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_like_tiktok['server_name'],
          'server_text' => $gia_like_tiktok['server_text'],
          'url_config'          => $url_site_name,
        ]);

        $gia_share_tiktok = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'share_tiktok' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_share_tiktok = $gia_share_tiktok['rate_service'] + $gia_share_tiktok['rate_service'] * $chiet_khau_auto / 100;


        $insert_share_tiktok = $NTD->insert("server_service", [
          'code_service'      => $gia_share_tiktok['code_service'],
          'server_service'          => $gia_share_tiktok['server_service'],
          'rate_service'      => $chiet_khau_share_tiktok,
          'title_service'         => $gia_share_tiktok['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_share_tiktok['server_name'],
          'server_text' => $gia_share_tiktok['server_text'],
          'url_config'          => $url_site_name,
        ]);

        $gia_sub_tiktok = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'sub_tiktok' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_sub_tiktok = $gia_sub_tiktok['rate_service'] + $gia_sub_tiktok['rate_service'] * $chiet_khau_auto / 100;


        $insert_sub_tiktok = $NTD->insert("server_service", [
          'code_service'      => $gia_sub_tiktok['code_service'],
          'server_service'          => $gia_sub_tiktok['server_service'],
          'rate_service'      => $chiet_khau_sub_tiktok,
          'title_service'         => $gia_sub_tiktok['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_sub_tiktok['server_name'],
          'server_text' => $gia_sub_tiktok['server_text'],
          'url_config'          => $url_site_name,
        ]);


        $gia_view_tiktok = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'view_tiktok' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_view_tiktok = $gia_view_tiktok['rate_service'] + $gia_view_tiktok['rate_service'] * $chiet_khau_auto / 100;


        $insert_view_tiktok = $NTD->insert("server_service", [
          'code_service'      => $gia_view_tiktok['code_service'],
          'server_service'          => $gia_view_tiktok['server_service'],
          'rate_service'      => $chiet_khau_view_tiktok,
          'title_service'         => $gia_view_tiktok['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_view_tiktok['server_name'],
          'server_text' => $gia_view_tiktok['server_text'],
          'url_config'          => $url_site_name,
        ]);


        $gia_like_youtube = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'like_youtube' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_like_youtube = $gia_like_youtube['rate_service'] + $gia_like_youtube['rate_service'] * $chiet_khau_auto / 100;


        $insert_like_youtube = $NTD->insert("server_service", [
          'code_service'      => $gia_like_youtube['code_service'],
          'server_service'          => $gia_like_youtube['server_service'],
          'rate_service'      => $chiet_khau_like_youtube,
          'title_service'         => $gia_like_youtube['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_like_youtube['server_name'],
          'server_text' => $gia_like_youtube['server_text'],
          'url_config'          => $url_site_name,
        ]);

        $gia_sub_youtube = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'sub_youtube' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_sub_youtube = $gia_sub_youtube['rate_service'] + $gia_sub_youtube['rate_service'] * $chiet_khau_auto / 100;


        $insert_sub_youtube = $NTD->insert("server_service", [
          'code_service'      => $gia_sub_youtube['code_service'],
          'server_service'          => $gia_sub_youtube['server_service'],
          'rate_service'      => $chiet_khau_sub_youtube,
          'title_service'         => $gia_sub_youtube['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_sub_youtube['server_name'],
          'server_text' => $gia_sub_youtube['server_text'],
          'url_config'          => $url_site_name,
        ]);


        $gia_like_twitter = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'like_twitter' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_like_twitter = $gia_like_twitter['rate_service'] + $gia_like_twitter['rate_service'] * $chiet_khau_auto / 100;


        $insert_like_twitter = $NTD->insert("server_service", [
          'code_service'      => $gia_like_twitter['code_service'],
          'server_service'          => $gia_like_twitter['server_service'],
          'rate_service'      => $chiet_khau_like_twitter,
          'title_service'         => $gia_like_twitter['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_like_twitter['server_name'],
          'server_text' => $gia_like_twitter['server_text'],
          'url_config'          => $url_site_name,
        ]);

        $gia_sub_twitter = $NTD->get_row("SELECT * FROM `server_service` WHERE `code_service` = 'sub_twitter' AND `status_service` = '1' AND `server_service` = '$so' AND  `url_config` = '" . $get_site2['site_me'] . "' ");
        $chiet_khau_sub_twitter = $gia_sub_twitter['rate_service'] + $gia_sub_twitter['rate_service'] * $chiet_khau_auto / 100;


        $insert_sub_twitter = $NTD->insert("server_service", [
          'code_service'      => $gia_sub_twitter['code_service'],
          'server_service'          => $gia_sub_twitter['server_service'],
          'rate_service'      => $chiet_khau_sub_twitter,
          'title_service'         => $gia_sub_twitter['title_service'],
          'status_service'        => 1,
          'server_name' => $gia_sub_twitter['server_name'],
          'server_text' => $gia_sub_twitter['server_text'],
          'url_config'          => $url_site_name,
        ]);



        $so++;
      }

      //


      $return['status'] = true;
      $return['error'] = false;
      $return['message']   = "Thêm dịch vụ thành công !";
      die(json_encode($return));
    }
    if ($action == "set_xoa_dv") {

      $api_token = api_token();
      $checkusite = $NTD->get_row(" SELECT * FROM `users` WHERE `token` = '$api_token'  AND  `url_config` = '" . $url_site_name . "' ");

      if (empty($api_token)) {
        $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "Thiếu API Token";
        die(json_encode($return));
      }

      if (!$checkusite) {
        $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "API Token không hợp lệ";
        die(json_encode($return));
      }
      if ($checkusite['capbac'] != 99) {
        $return['status'] = false;
        $return['error'] = true;
        $return['message']   = "Bạn không phải là admin !";
        die(json_encode($return));
      }
      $get_dv2 = $NTD->get_row(" SELECT * FROM `server_service` WHERE `url_config` = '" . $url_site_name . "'");
      if (!$get_dv2) {
        $return['status'] = false;
        $return['error'] = false;
        $return['message']   = "Không Tồn Tại Dịch Vụ !";
        die(json_encode($return));
      } else {
        $xoa_dv = $NTD->remove("server_service", "`status_service` = '1'  AND  `url_config` = '" . $url_site_name . "' ");
        if ($xoa_dv) {
          $return['status'] = true;
          $return['error'] = false;
          $return['message']   = "Xoá Dịch Vụ Thành Công !";
          die(json_encode($return));
        }
      }
    }
  }
