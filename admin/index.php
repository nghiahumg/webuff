
<?php
require('head.php'); 
require('nav.php'); 
?>

<?php 
                $total_money = $NTD->get_row("SELECT SUM(`money`) FROM `users` WHERE `money` >= 0 AND  `url_config` = '".$url_site_name."'") ['SUM(`money`)']; 
                
                $total_thanhvien = $NTD->get_row("SELECT COUNT(*) FROM `users` WHERE  `url_config` = '".$url_site_name."'") ['COUNT(*)'];
                
                $total_doanhthu=$NTD->get_row("SELECT SUM(`thucnhan`) FROM `history_naptien` WHERE  `date` >= DATE(NOW())  AND `date` < DATE(NOW()) + INTERVAL 1 DAY AND  `url_config` = '".$url_site_name."'")['SUM(`thucnhan`)'];
                $total_nap = $NTD->get_row("SELECT SUM(`tongnap`) FROM `users` WHERE `tongnap` >= 0 AND  `url_config` = '".$url_site_name."'") ['SUM(`tongnap`)']; 
                
                $total_don_today=$NTD->get_row("SELECT COUNT(*) FROM `history_buy` WHERE `date` >= DATE(NOW())  AND `date` < DATE(NOW()) + INTERVAL 1 DAY AND  `url_config` = '".$url_site_name."'") ['COUNT(*)'];
                $total_tru = $NTD->get_row("SELECT SUM(`tongtru`) FROM `users` WHERE `tongtru` >= 0 AND  `url_config` = '".$url_site_name."'") ['SUM(`tongtru`)']; 
                
                
                 $total_card = $NTD->get_row("SELECT COUNT(*) FROM `history_naptien` WHERE  `url_config` = '".$url_site_name."'") ['COUNT(*)'];
                
                 $total_don = $NTD->get_row("SELECT COUNT(*) FROM `history_buy` WHERE  `url_config` = '".$url_site_name."'") ['COUNT(*)'];
                        
                ?>
  <!-- Content Wrapper. Contains page content -->
 

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-money-bill-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Số Dư</span>
                <span class="info-box-number">
                 <?=format_money($total_money);?>
                  <small>đ</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Tổng Nạp</span>
                <span class="info-box-number"><?=format_money($total_nap);?> <small>đ</small></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Đã Tiêu</span>
                <span class="info-box-number"><?=format_money($total_tru);?><small>đ</small></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Tổng Thành Viên</span>
                <span class="info-box-number"><?=format_money($total_thanhvien);?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        
          <div class="row">
               <div class="col-12 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fab fa-cc-apple-pay"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Doanh Thu Hôm Nay</span>
                <span class="info-box-number">
                <?=format_money($total_doanhthu);?>
                  <small>đ</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
           <div class="col-12 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fab fa-cc-apple-pay"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Tổng Đơn Hôm Nay</span>
                <span class="info-box-number">
                <?=$total_don_today;?>
                  <small>đơn</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          
               <div class="col-12 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fab fa-cc-apple-pay"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Tổng Đơn Nạp</span>
                <span class="info-box-number">
                <?=$total_card;?>
                  <small>thẻ</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
         
          <!-- /.col -->
         
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

     
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Tổng Đơn</span>
                <span class="info-box-number"><?=format_money($total_don);?> <small>đơn</small></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

       
        <!-- /.row -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            
            <!-- /.card -->
          

            <!-- TABLE: LATEST ORDERS -->
          
            <!-- /.card -->
          </div>
          <!-- /.col -->

     
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      
    </section>
      <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">Latest Orders</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
               <div class="table-responsive scrollbar">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                        <table class="table table-bordered table-striped fs--1 mb-3 dataTables-NTD dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                            <thead class="bg-200 text-900">
                                                <tr role="row" history>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 58.8438px;">#</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 58.8438px;">Thời gian</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Người buff: activate to sort column ascending" style="width: 162.031px;">Người buff</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="type order: activate to sort column ascending" style="width: 193.031px;">type order</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Số lượng: activate to sort column ascending" style="width: 96.0781px;">Số lượng</th>
                                                    <!--<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Hoàn thành: activate to sort column ascending" style="width: 96.0781px;">Hoàn thành</th>-->
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Tổng tiền: activate to sort column ascending" style="width: 148.969px;">Tổng tiền</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Link buff: activate to sort column ascending" style="width: 148.969px;">ID</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Server: activate to sort column ascending" style="width: 148.969px;">Mã đơn</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Server: activate to sort column ascending" style="width: 148.969px;">Server</th>
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Server: activate to sort column ascending" style="width: 148.969px;">Thời Gian Tạo</th>
                                                    <!--<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Note: activate to sort column ascending" style="width: 148.969px;">Note</th>-->
                                                    <!--<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 148.969px;">Date</th>-->
                                                    <!--<th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Mã giao dịch: activate to sort column ascending" style="width: 148.969px;">Mã giao dịch</th>-->
                                                  
                                                    <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Thao tác: activate to sort column ascending" style="width: 211.047px;">Hình thức</th>
                                                      <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Trạng thái: activate to sort column ascending" style="width: 211.047px;">Trạng thái</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $getlistcard = $NTD->get_list("SELECT * FROM `history_buy` WHERE  `url_config` = '".$url_site_name."' ORDER BY `id` DESC "); if($getlistcard){ foreach($getlistcard as $rowucard){?>
                                                <tr class="odd">
                                                    <td><?=$rowucard['id']?></td>
                                                    <td><?=$rowucard['date']?></td>
                                                    <td><?=$rowucard['username']?></td>
                                                    <td><?=$rowucard['type']?></td>
                                                    <td><?=$rowucard['soluong']?></td>
                                                    <!--<td><?=$rowucard['da_buft']?></td>-->
                                                    <td><?=format_money($rowucard['tong_tien'])?></td>
                                                    <td><b><?=$rowucard['link_buy']?></b></td>
                                                    <td><?=$rowucard['ma_gd']?></td>
                                                    <td><?=$rowucard['server_buy']?></td>
                                                    <td><?=$rowucard['date']?></td>
                                                    <td><?=$rowucard['hinh_thuc']?></td>
                                                    <td><b><?=statusorder($rowucard['status'])?></b></td>
                                                    
                                                </tr>
                                                <?php }}else{?>
                                                <tr class="odd">
                                                    <td valign="top" colspan="6" class="dataTables_empty">
                                                        <center>Không có dữ liệu để hiển thị</center>
                                                    </td>
                                                </tr>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                <!-- /.table-responsive -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Place New Order</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">View All Orders</a>
              </div>
              <!-- /.card-footer -->
            </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
require('foot.php'); 

?>