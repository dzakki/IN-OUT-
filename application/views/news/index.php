
    
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>

        <!-- Icon Cards-->
        <div class="row">
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-primary o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-comments"></i>
                </div>
                <div class="mr-5"><strong>Saldo: Rp</strong> <?= number_format($saldo['jumlah_saldo'], 2) ?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-warning o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-list"></i>
                </div>
                <div class="mr-5"><strong>Total Masukkan:</strong> <?= $news_count?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-3">
            <div class="card text-white bg-success o-hidden h-100">
              <div class="card-body">
                <div class="card-body-icon">
                  <i class="fas fa-fw fa-shopping-cart"></i>
                </div>
                <div class="mr-5"><strong>Total Tarik:</strong> <?= $tarik_count?></div>
              </div>
              <a class="card-footer text-white clearfix small z-1" href="#">
                <span class="float-left">View Details</span>
                <span class="float-right">
                  <i class="fas fa-angle-right"></i>
                </span>
              </a>
            </div>
          </div>

        <!-- DataTables Example -->
        <div class="row">
          <div class="col-sm">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Masuk Tunai <a class="float-right btn btn-secondary btn-sm" href="<?= base_url('index.php/news/create')?>">Tambah</a></div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Saldo</th>
                      <th>Keterangan</th>
                      <th>Tanggal</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; foreach($news as $news_item){ ?>
                    <tr>
                      <td><?=$i++?></td>
                      <td><?= $news_item['saldo']?></td>
                      <td><?= $news_item['ket']?></td>
                      <td><?= $news_item['tanggal']?></td>
                      <td>
                        <a href="<?= site_url("news/update/".$news_item['id_masukan'])?>" class="btn btn-sm btn-primary" style=" font-size: 8px;"><span class="fa fa-edit fa-sm " ></span></a>
                        <a href="<?= site_url("news/delete/".$news_item['id_masukan'])?>" class="btn btn-sm btn-danger"  onclick="return confirm('Yakin akan membatalkan Masukkan!!')"  style=" font-size: 9px;"><span class="fa fa-trash fa-xs"></span></a>
                      </td>
                    </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
          <div class="col-sm">
              <div class="card mb-3">
              <div class="card-header">
                <i class="fas fa-table"></i>
                Data Tarik Tunai <a class="float-right btn btn-secondary btn-sm" href="<?= base_url('index.php/tariks/create')?>">Tambah</a></div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nominal</th>
                        <th>Keterangan</th>
                        <th>Tanggal</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach($tarik as $news_item){ ?>
                      <tr>
                        <td><?=$i++?></td>
                        <td><?= $news_item['nominal']?></td>
                        <td><?= $news_item['ket']?></td>
                        <td><?= $news_item['tanggal']?></td>
                        <td>
                          <a href="<?= site_url("tarik/update/".$news_item['id_tarik'])?>" class="btn btn-sm btn-primary fa-sm"  style=" font-size: 8px;"><span class="fa fa-edit fa-xs"></span></a>
                          <a href="<?= site_url("tarik/delete/".$news_item['id_tarik'])?>" class="btn btn-sm btn-danger"  onclick="return confirm('Yakin akan membatalkan penarikan!!')"  style=" font-size: 9px;"><span class="fa fa-trash  fa-xs"></span></a>
                        </td>
                      </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
            </div>
          </div>
          </div>
        </div>

      
      <!-- /.container-fluid -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  

