<?php
require('head.php');
require('nav.php');
?>

<?php if ($NTD->getUsers('capbac') !== '99') {
    header('Location: /404');
    exit;
} ?>
<!-- Content Wrapper. Contains page content -->
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-header">
                <h6 class="card-title mb-3">Đăng nhập mbbank</h6>
            </div>
            <div class="card-body">
                <form submit-ajax="NTD" action="<?= BASE_URL('api/admin/setting/website'); ?>" method="post" api_token="<?= $NTD->getUsers('token'); ?>">
                    <input type="hidden" name="action" value="addmbbank">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="form-group">
                                <center><label class="form-label" for="">Tài khoản đăng nhập</label></center>
                                <input type="text" rows="5" cols="50" class="form-control" name="account" value="" placeholder=" Nhập tên tên tài khoản đăng nhập"></input>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <center><label class="form-label" for="">Mật khẩu</label></center>
                                <input type="text" rows="5" cols="50" class="form-control" name="password" value="" placeholder=" Nhập mật khẩu"></input>
                            </div>
                        </div>
                        <div class="col-md-12 hidden">
                            <div class="form-group">
                                <center><label class="form-label" for="">Số tài khoản</label></center>
                                <input type="text" rows="5" cols="50" class="form-control" name="accountno" value="" placeholder=" Nhập số tài khoản"></input>
                            </div>
                        </div>

                        <div class="col-md-4 mr-auto ml-auto pt-3">
                            <button type="submit" class="btn btn-primary btn-block">Thêm <em class="fa fa-paper-plane"></em></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card mb-3">
            <div class="card-body">
                <h6 class="card-title mb-3">Danh sách account mbbank</h6>
                <div class="table-responsive scrollbar">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                        <table class="table table-bordered table-striped fs--1 mb-3 dataTables-NTD dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            <thead class="bg-200 text-900">
                                <tr role="row" history>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 58.8438px;">#</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Người buff: activate to sort column ascending" style="width: 162.031px;">Tài khoản</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="type order: activate to sort column ascending" style="width: 193.031px;">Mật khẩu </th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Trạng thái: activate to sort column ascending" style="width: 211.047px;">Số tài khoản</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Trạng thái: activate to sort column ascending" style="width: 211.047px;">sitename</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Trạng thái: activate to sort column ascending" style="width: 211.047px;">Số dư</th>
                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Thao tác: activate to sort column ascending" style="width: 211.047px;">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($url_site_name == $URL_ADMIN) {
                                    $getlistcard = $NTD->get_list("SELECT * FROM `mbbankauto`  ORDER BY `id` DESC ");
                                } else {
                                    $getlistcard = $NTD->get_list("SELECT * FROM `mbbankauto` WHERE  `sitename` = '" . $url_site_name . "' ORDER BY `id` DESC ");
                                }

                                if ($getlistcard) {
                                    foreach ($getlistcard as $rowucard) { ?>
                                        <tr class="odd">
                                            <td><?= $rowucard['id'] ?></td>
                                            <td><?= $rowucard['account'] ?></td>
                                            <td><?= $rowucard['password'] ?></td>
                                            <td><?= $rowucard['accountno'] ?></td>
                                            <td><?= $rowucard['sitename'] ?></td>
                                            <td>empty</td>
                                            
                                            <td>
                                                <form submit-ajax="NTD" action="<?= BASE_URL('api/admin/setting/website'); ?>" method="post" api_token="<?= $NTD->getUsers('token'); ?>">
                                                    <input type="hidden" name="action" value="delete_mbbank">
                                                    <input type="hidden" name="id" value="<?= $rowucard['id'] ?>">
                                                    <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                                                </form>
                                                <form submit-ajax="NTD" action="<?=BASE_URL('private/mbbank/balance')?>" method="post" api_token="<?= $NTD->getUsers('token'); ?>">
                                                    <input type="hidden" name="id" value="<?= $rowucard['id'] ?>">
                                                    <button type="submit" class="btn btn-success btn-sm">Balance</button>
                                                </form>
                                            </td>

                                        </tr>
                                    <?php }
                                } else { ?>
                                    <tr class="odd">
                                        <td valign="top" colspan="6" class="dataTables_empty">
                                            <center>Không có dữ liệu để hiển thị</center>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
require('foot.php');

?>