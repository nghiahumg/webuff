<?php require('../config/function.php');?><?php require('../config/head.php'); if(empty($_SESSION['username'])){header('Location: /auth/login');exit;}?>
<title>Nâng cấp bậc</title>

        <?php require('../config/nav.php');?>
        <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Nâng cấp bậc</h4>
    <div class="row">
        <div class="col-md-4">
            <div class="card border shadow-none">
                <div class="card-body">
                    <h3 class="fw-bold text-center text-uppercase mt-3">Cộng tác viên</h3>
                    <div class="my-4 py-2 text-center">
                        <img src="/sneat/assets/img/unicons/bookmark.png" alt="Starter Image" height="80">
                    </div>

                    <div class="text-center mb-4">
                        <div class="mb-2 d-flex justify-content-center">
                            <h1 class="fw-bold h1 mb-0">Free</h1>
                            <sub class="h5 pricing-duration mt-auto mb-2"></sub>
                        </div>
                    </div>

                    <ul class="ps-3 pt-4 pb-2 list-unstyled">
                        <li class="mb-2">
                            <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Cấp bậc này sẽ được giảm giá các dịch vụ và có thể tạo website riêng.
                        </li>
                        <li class="mb-2">
                            <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Có ưu đãi dịch vụ.
                        </li>
                    </ul>
<form submit-ajax="NTD" action="<?=BASE_URL('api/upgrade-level');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
                                                        <input type="hidden" name="_token" value="s8JjdnkkKwNenM3VEgTCI4ueJRHO5SSK8EZmJNIU">
                                                        <input type="hidden" name="type" value="collaborators">
                                                        <input type="hidden" name="action" value="upgrade">
                   
                     <button type="submit" class="btn btn-label-primary d-grid w-100">Nâng ngay</button>
                                                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border shadow-none">
                <div class="card-body">
                    <h3 class="fw-bold text-center text-uppercase mt-3">Đại lý</h3>
                    <div class="my-4 py-2 text-center">
                        <img src="/sneat/assets/img/unicons/briefcase-round.png" alt="Starter Image" height="80">
                    </div>

                    <div class="text-center mb-4">
                        <div class="mb-2 d-flex justify-content-center">
                            <h1 class="fw-bold h1 mb-0">20,000,000</h1>
                            <sub class="h5 pricing-duration mt-auto mb-2">coin</sub>
                        </div>
                    </div>

                    <ul class="ps-3 pt-4 pb-2 list-unstyled">
                        <li class="mb-2">
                            <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Cấp bậc này sẽ được giảm giá dịch vụ, tạo website riêng, hỗ trợ riêng, ...
                        </li>
                        <li class="mb-2">
                            <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Có ưu đãi dịch vụ.
                        </li>
                    </ul>
<form submit-ajax="NTD" action="<?=BASE_URL('api/upgrade-level');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
                                                        <input type="hidden" name="_token" value="s8JjdnkkKwNenM3VEgTCI4ueJRHO5SSK8EZmJNIU">
                                                        <input type="hidden" name="type" value="agency">
                                                         <input type="hidden" name="action" value="upgrade">
                                                        <button type="submit" class="btn btn-label-primary d-grid w-100">Nâng ngay</button>
                                                    </form>
                   
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card border shadow-none">
                <div class="card-body">
                    <h3 class="fw-bold text-center text-uppercase mt-3">Nhà phân phối</h3>
                    <div class="my-4 py-2 text-center">
                        <img src="/sneat/assets/img/unicons/wallet-round.png" alt="Starter Image" height="80">
                    </div>

                    <div class="text-center mb-4">
                        <div class="mb-2 d-flex justify-content-center">
                            <h1 class="fw-bold h1 mb-0">100,000,000</h1>
                            <sub class="h5 pricing-duration mt-auto mb-2">coin</sub>
                        </div>
                    </div>

                    <ul class="ps-3 pt-4 pb-2 list-unstyled">
                        <li class="mb-2">
                            <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Cấp bậc này sẽ được giảm giá dịch vụ riêng, tạo website riêng, hỗ trợ riêng, ...
                        </li>
                        <li class="mb-2">
                            <span class="badge badge-center w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i class="bx bx-check bx-xs"></i></span> Có ưu đãi dịch vụ.
                        </li>
                    </ul>

                <form submit-ajax="NTD" action="<?=BASE_URL('api/upgrade-level');?>" method="post" api_token="<?=$NTD->getUsers('token');?>">
                                                        <input type="hidden" name="_token" value="s8JjdnkkKwNenM3VEgTCI4ueJRHO5SSK8EZmJNIU">
                                                        <input type="hidden" name="type" value="agencyy">
                                                         <input type="hidden" name="action" value="upgrade">
                                                        <button type="submit" class="btn btn-label-primary d-grid w-100">Nâng ngay</button>
                                                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require('../config/end.php');?>