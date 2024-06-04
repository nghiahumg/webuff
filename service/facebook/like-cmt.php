<?php require('../../config/function.php'); $text=getCurURL(); $dtb="like_cmt"; $action="like-cmt"; $title="Cảm Xúc Comment";?><?php require('../../config/head.php'); if(empty($_SESSION['username'])){header('Location: /Login');exit;}else{$getrate=$NTD->get_list("SELECT * FROM `server_service` WHERE `code_service`='$dtb' AND `status_service`='1' AND `url_config`='".$url_site_name."' ");}?>
       
<title><?=$title;?></title>

        <?php require('../../config/nav.php');?>
<div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><?=$title;?></h4>
                                <div class="row">
            <div class="col-md-12">
                <div class="card mb-4 card-tab">
    <div class="card-header">
                    <div class="row">
                <div class="col-6 d-grid gap-2">
                    <a href="<?=$text;?>" class="btn btn-primary"><img src="/assets/images/order.svg" alt="" width="25" height="25">
                        Thêm đơn</a>
                </div>
                <div class="col-6 d-grid gap-2">
                    <a href="<?=$text;?>/list" class="btn btn-outline-primary"><img src="/assets/images/list-order.svg" alt="" width="25" height="25">
                        Danh sách đơn</a>
                </div>
            </div>
            </div>
    <div class="card-body">
        <div class="row">

                        <div class="col-md-8 mb-3">
                         <form submit-ajax="NTD" action="<?=BASE_URL('api/facebook/buy');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
                                     <input type="hidden" name="action" value="<?=$action;?>">
                                    <input type="hidden" name="code_dich_vu" value="<?=$dtb;?>">
<div class="form-group row mb-3">
<label for="" class="form-label col-md-3">ID comment </label>
<div class="col-md-9">
<input class="form-control" name="id"  placeholder="Nhập id comment" onpaste="getUID('id');" onchange="bill();">

</div>
</div>
<div class="form-group row mb-3">
    <label for="" class="form-label col-md-3">Máy chủ </label>
  
    <div class="col-md-9">
          <?php foreach($getrate as $showrate){?>
        <div class="mb-2">
            <div class="mb-1">
                <div class="form-check">
                    <input class="form-check-input" id="<?=$showrate['server_service']?>" type="radio" detail="<?=$showrate['server_name']?>" name="server" onchange="bill();" value="<?=$showrate['server_service']?>">
                    <label class="form-check-label" for="<?=$showrate['server_service']?>">SV<?=$showrate['server_service']?>
&nbsp;(<?=$showrate['title_service']?>)&nbsp;<span class="badge bg-success text-white "><?=$showrate['rate_service']+($showrate['rate_service']*$chietkhau/100)?> đ / lượt</span>&nbsp;<b class="text-warning">(Hoạt đông)</b></label>
                </div>
            </div>
        </div> <?php }?>
        <div id="detailServer"></div>
    </div>
   
</div>
<div class="form-group row mb-3">
<label for="" class="form-label col-md-3">Số lượng </label>
<div class="col-md-9">
<input type="text" class="form-control mb-3" name="soluong"  onchange="bill();" value="100" placeholder="Nhập số lượng cần tăng">
<div class="alert text-white bg-info text-center" role="alert">
<strong>Tổng tiền = (Số lượng) x (Giá 1 lượt)</strong>
</div>
</div>
</div>
 <div class="form-group row mb-3" id="group_reaction">
    <label for="" class="form-label col-md-3">Loại cảm xúc :</label>
    <div class="col-md-8">
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio1">
                <input class="form-check-input checkbox d-none" type="radio" id="inlineRadio1" name="loai_camxuc" value="like" checked="" /> <img src="/assets/svg/likepost.png" alt="image" class="d-block ml-2 rounded-circle" width="36" />
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio2">
                <input class="form-check-input checkbox d-none" type="radio" id="inlineRadio2" name="loai_camxuc" value="care" /> <img src="/assets/svg/caremotion.png" alt="image" class="d-block ml-2 rounded-circle" width="36" />
                <!-- <input id="type_caremotion" type="checkbox" class="d-none"> -->
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio3">
                <input class="form-check-input checkbox d-none" type="radio" id="inlineRadio3" name="loai_camxuc" value="love" /> <img src="/assets/svg/love.png" alt="image" class="d-block ml-2 rounded-circle" width="36" />
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio4">
                <input class="form-check-input checkbox d-none" type="radio" id="inlineRadio4" name="loai_camxuc" value="haha" /> <img src="/assets/svg/haha.png" alt="image" class="d-block ml-2 rounded-circle" width="36" />
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio5">
                <input class="form-check-input checkbox d-none" type="radio" id="inlineRadio5" name="loai_camxuc" value="wow" /> <img src="/assets/svg/wow.png" alt="image" class="d-block ml-2 rounded-circle" width="36" />
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio6">
                <input class="form-check-input checkbox d-none" type="radio" id="inlineRadio6" name="loai_camxuc" value="sad" /> <img src="/assets/svg/sad.png" alt="image" class="d-block ml-2 rounded-circle" width="36" />
            </label>
        </div>
        <div class="form-check form-check-inline">
            <label class="form-check-label" for="inlineRadio7">
                <input class="form-check-input checkbox d-none" type="radio" id="inlineRadio7" name="loai_camxuc" value="angry" /> <img src="/assets/svg/angry.png" alt="image" class="d-block ml-2 rounded-circle" width="36" />
            </label>
        </div>
    </div>
</div>

<div class="form-group row mb-3"><label for="" class="form-label col-md-3">Tốc độ </label>
<div class="col-md-9">
<div class="">
<div class="mb-1">
<div class="form-check"><input class="form-check-input" id="speed1" type="radio" name="speed" onchange="bill();" value="fast"><label class="form-check-label" for="speed1">Nhanh
(lên nhanh thì sẽ bị
nhanh tụt nhé.)</label></div>
</div>
<div class="mb-1">
<div class="form-check"><input class="form-check-input" id="speed2" type="radio" name="speed" checked="checked" onchange="bill();" value="slow"><label class="form-check-label" for="speed2">Chậm (nên chọn cho ổn định,
sẽ không
chậm lắm đâu nhé.)</label></div>
</div>
</div>
</div>
</div>

<div class="form-group row mb-3">
<label for="" class="form-label col-md-3">Ghi chú </label>
<div class="col-md-9">
<textarea class="form-control mb-3" name="ghichu" rows="3" placeholder="Nhập ghi chú nếu cần"></textarea>
<div class="alert bg-danger text-white" role="alert">
<h4 class="text-white">Vui lòng đọc tránh mất tiền</h4>
- <b>Mua bằng ID bình luận đã mở chế độ công khai, có nút like.</b>
</div> </div>
</div>
<div class="form-group row mb-3">
<div class="col-sm-12 text-center">
<div class="alert text-white bg-success " role="alert">
<h3 class="font-bold text-white">Tổng thanh toán: <span class="bold green"><span id="total_payment" class="text-danger">0</span> coin</span></h3>
</div>
</div>
</div>


                                <div class="d-grid gap-2">
    <button type="submit" class="btn btn-primary" id="buy" order="Bạn có muốn thanh toán đơn hàng?, chúng tôi sẽ không hoàn tiền với đơn đã thanh toán."><img src="/assets/images/buy.svg" alt="" width="30" height="30"> Thanh
        toán</button>
</div>
                            </form>
                        </div>

                        <div class="col-md-4">
                            <div class="alert bg-danger text-white" role="alert">
    <h4 class="text-white">Lưu ý</h4>
    - <b>Nghiêm cấm buff các đơn có nội dung vi phạm pháp luật, chính trị, đồ trụy... Nếu cố tình buff bạn
        sẽ
        bị trừ hết tiền và ban khỏi hệ thống vĩnh viễn, và phải chịu hoàn toàn trách nhiệm trước pháp
        luật</b>.
    <br>
    - <b>Nếu đơn đang chạy trên hệ thống mà bạn vẫn mua ở các hệ thống bên khác, nếu có tình trạng hụt,
        thiếu
        số lượng giữa 2 bên thì sẽ không được xử lí</b>. <br>
    - <b>Đơn cài sai thông tin hoặc lỗi trong quá trình tăng hệ thống sẽ không hoàn lại tiền</b>. <br>
    - <b>Nếu gặp lỗi hãy nhắn tin hỗ trợ phía bên phải góc màn hình hoặc vào mục liên hệ hỗ trợ để được hỗ
        trợ
        tốt nhất</b>.
</div>
                        </div>
                    </div>
    </div>
</div>
            </div>
                        </div>
                    
                    
          
  
            </div>

        
<script>
       function getUID(elm) {
            $('#buy').prop("disabled", true);
            setTimeout(() => {
                let link = $('[name=' + elm + ']').val();
                if (!isURL(link)) {
                    $('#buy').prop("disabled", false);
                    return;
                }
                $('[name=' + elm + ']').prop("disabled", true).val('Đang xử lý');
                $.ajax({
                    type: "GET",
                    url: "/api/tool/get-uid-fb",
                    data: {
                        link
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.status === true) {
                            $('[name=' + elm + ']').prop("disabled", false).val(response.data);
                        } else {
                            $('[name=' + elm + ']').prop("disabled", false).val('');
                        }
                        $('#buy').prop("disabled", false);
                    }
                });
            }, 100);
        }


        function detailServer(text) {
            $('#detailServer').show().html(`<div class="alert bg-danger text-white" role="alert">
                <h4>Thông tin máy chủ</h4>
                - <b>${text}</b></div>`);
        }
    </script>
    
<script src="https://code.jquery.com/jquery.min.js"></script>
<script>
        swal('Vui lòng đọc kĩ các chú ý dịch vụ trước khi lên đơn!');
        let prices = JSON.parse(setting.ytb_like);

        function bill() {
            let server = $('input[name=server]:checked');
            let detail = server.attr('detail');
            server = server.val();
            if (!server) return;
            detailServer(detail);
            let soluong = $('[name=soluong]').val();
        <?php foreach($getrate as $runrate){?>
            if(server == '<?=$runrate['server_service']?>'){
            var price = <?=$runrate['rate_service']?>;
             var price2 = <?=$runrate['rate_service']+($runrate['rate_service']*$chietkhau/100)?>;
            }
        <?php }?>
        let total_payment = Math.round(soluong * price2);
        $('#total_payment').html(Intl.NumberFormat().format(total_payment));
    }
    $(document).ready(function() {
        bill();
    });
    </script>



<script src="https://code.jquery.com/jquery.min.js"></script>

 <?php
if($NTD->modal($dtb, status)=="ON")  {?>
             <div class="modal fade" id="modalSystem" tabindex="-1" role="dialog" aria-labelledby="modalSystemLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="modalSystemLabel">Thông báo hệ thống</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
     
<p><?=$NTD->modal($dtb, text_thong_bao);?></p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Đóng</button>
</div>
</div>
</div>
</div>
            
             <?php }?>
             
             <script>
$(window).on('load', function() {
    $('#staticBackdrop').modal('show');
});
</script>
<?php require('../../config/end.php');?>