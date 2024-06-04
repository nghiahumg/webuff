<div class="contact-button-group">
        <a role="button" class="contact-head" href="javascript:void(0)">
            <i class="fa fa-headphones contact-head-icon"></i>
            <i class="fa fa-times contact-head-icon d-none"></i>
            <div class="contact-head-label">Liên hệ &amp; hỗ trợ</div>
        </a>
        
        <a role="button" class="contact-button zalo-button button-closed" href="https://zalo.me/<?=$NTD->site('phone_zalo');?>" target="_blank" rel="nofollow">
            <i aria-hidden="true" class="fa fa-comment button-icon"></i>
            <div class="contact-label">Nhắn tin Zalo</div>
        </a>

        <a role="button" class="contact-button messenger-button button-closed" href="https://www.facebook.com/<?=$NTD->site('id_page');?>" target="_blank" rel="nofollow">
            <i aria-hidden="true" class="fa fa-life-ring button-icon"></i>
            <div class="contact-label">Nhắn tin Page</div>
        </a> 
        
    </div>
 <footer class="content-footer footer bg-footer-theme">
                <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                  <div class="mb-2 mb-md-0">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , hệ thống được thiết kế và vận hành bởi
                    <a
                    href="<?=$NTD->site('facebook');?>" target="_blank"
                    rel="noopener noreferrer"><?=$NTD->site('full_name_admin');?></a>
                  </div>
                  <div>
                    <a
                      href="<?=$NTD->site('facebook');?>"
                      target="_blank"
                      class="footer-link me-4"
                      >Facebook</a
                    >
                    <a
                      href="tel:<?=$NTD->site('phone_zalo');?>"
                      target="_blank"
                      class="footer-link me-4"
                      >Zalo</a
                    >
                  </div>
                </div>
              </footer>
              
  
              <div class="content-backdrop fade"></div>
            </div>
  </div>
          
        </div>
  
        
        <div class="layout-overlay layout-menu-toggle"></div>
  
        
        <div class="drag-target"></div>
      </div>
      

                    <div class="content-backdrop fade"></div>
                </div>
                
            </div>
            
        </div>

        
        <div class="layout-overlay layout-menu-toggle"></div>

        
        <div class="drag-target"></div>
    </div>
    
    

<script src="/sneat/assets/vendor/libs/jquery/jquery.js?<?=rand(1,99999);?>"></script>
<script src="/sneat/assets/vendor/libs/popper/popper.js?<?=rand(1,99999);?>"></script>
<script src="/sneat/assets/vendor/js/bootstrap.js?<?=rand(1,99999);?>"></script>
<script src="/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js?<?=rand(1,99999);?>"></script>

<script src="/sneat/assets/vendor/libs/hammer/hammer.js?<?=rand(1,99999);?>"></script>
<script src="/sneat/assets/vendor/js/<?=rand(1,99999);?>"></script>

<script src="/sneat/assets/vendor/js/menu.js?<?=rand(1,99999);?>"></script>



<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script src="/sneat/assets/js/main.js?<?=rand(1,99999);?>"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/pusher/7.0.3/pusher.min.js?<?=rand(1,99999);?>"></script>
<script>
    const pusher = new Pusher('8424c10da800c48a00cf', {
        cluster: 'ap1'
    });
</script>
<script src="/dist/js/function.js?<?=rand(1,99999);?>?v=1656249163"></script>

    <script>
        $(document).ready(function() {
            // if (!getCookie('modalSystem')) {
            //     $('#modalSystem').modal('show');
            // }
            $('#modalSystem').modal('show');

        });

        function closeModalSystem() {
            setCookie('modalSystem', true, 1);
            $('#modalSystem').modal('hide');
        }
    </script>
<script type="text/javascript">(function(){window['__CF$cv$params']={r:'72163232ac456e3d',m:'9ki1qXmLmUYTSnMf19VFeY7e9mII8n1fyG2Mys6FRNU-1656249163-0-AZnfHhAXmOlG3bWD0E9WPv+NAHx3I5UUrDcC+CLp/lT5gBm0XTBkoHjrSRtnE3LcAYrjxYr/FTpcyS9qHWVPAxIIDX2NNBQpfMPhyCe1GHfJTs0uvrF/67iYeiphHyTBRA==',s:[0x744385cb13,0xc97960cfe3],u:'/cdn-cgi/challenge-platform/h/g'}})();</script></body>

</html>
