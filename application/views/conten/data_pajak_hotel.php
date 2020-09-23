<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Pajak Hotel</h3>
              </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Pajak Hotel</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fa fa-plus"> | Tambah Data</i></button>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Masa Pajak</th>
                          <th>Tahun Pajak</th>
                          <th>Nominal</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php 
                        $x=1;
                        $no=1;
                        foreach ($hotel->result() as $row) {?>
                        <tr>
                          <td><?php echo $x++; ?></td>
                          <td><?php echo $row->masa_pajak; ?></td>
                          <td><?php echo $row->tahun ?></td>
                          <td>Rp. <?php echo number_format($row->jumlah_pajak); ?>,-</td>
                          <td>
                              <button type="button" class="btn btn-warning" title="Edit Data" data-toggle="modal" data-target="#myModalEdit<?php echo $no++; ?>"><i class="fa fa-edit"></i></button>
                              <a href="<?php echo base_url('Dinas_hotel/hapus_pajak/'.$row->id_hotel) ?>"><button type="button" class="btn btn-danger" title="Hapus Data" onclick="return confirm('Data Akan dihapus?')"><i class="fa fa-trash"></i></button></a>
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


<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-sm">
                      <div class="modal-content">
                        <form method="post" action="<?php echo base_url('Dinas_hotel/tambah_pajak') ?>">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel2">Tambah Data</h4>
                        </div>
                        <div class="modal-body">

                        <label for="fullname">Masa Pajak * :</label>
                        <select class="form-control" name="masa_pajak" required>
                        <option value="">Pilih Bulan</option>
                        <?php
                        $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                        $jlh_bln=count($bulan);
                        for($c=0; $c<$jlh_bln; $c+=1){
                            echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                        }
                        ?>
                        </select>

                        <label for="fullname">Tahun Pajak * :</label>
                        <?php
                          $now=date('Y');
                          $ymin=$now-4;
                          echo "<select name='tahun' class=form-control required>";
                          echo "<option>Pilih Tahun</option>";
                          for($a=$now;$a>=$ymin;--$a)
                          {
                               echo "<option value='$a'>$a</option>";
                          }
                          echo "</select>";
                        ?>

                        <label for="fullname">Tanggal Transaksi * :</label>
                        <!-- <input type="date" class="form-control" name="tgl_transaksi" required /> -->
                         <div class='input-group date' id='myDatepicker2'>
                            <input type='text' class="form-control" name="tgl_transaksi" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>

                        <label for="fullname">Nominal Pajak * :</label>
                        <input type="text" class="form-control" name="nominal" required />

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <!-- /modals -->

<!-- Modal Edit -->
<?php 
$y=1;
foreach ($hotel->result() as $row) { 
  $masa_pajak = $row->masa_pajak;
  $tahun = $row->tahun;
?>  
<div class="modal fade" id="myModalEdit<?php echo $y++; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                      <form method="post" action="<?php echo base_url('Dinas_hotel/update_pajak/'.$row->id_hotel) ?>">
                                        <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Edit Data Pajak Hotel</h4>
                                        </div>
                                        <div class="modal-body">

                                            <!-- Table -->
                                          <label for="fullname">Masa Pajak * :</label>
                                          <select class="form-control" name="masa_pajak">
                                          <option>Pilih Bulan</option>
                                          <option <?php if ($masa_pajak == "Januari") {
                                          echo "selected";} ?> value="Januari">Januari</option>
                                          <option <?php if ($masa_pajak == "Februari") {
                                          echo "selected";} ?> value="Februari">Februari</option>
                                          <option <?php if ($masa_pajak == "Maret") {
                                          echo "selected";} ?> value="Maret">Maret</option>
                                          <option <?php if ($masa_pajak == "April") {
                                          echo "selected";} ?> value="April">April</option>
                                          <option <?php if ($masa_pajak == "Mei") {
                                          echo "selected";} ?> value="Mei">Mei</option>
                                          <option <?php if ($masa_pajak == "Juni") {
                                          echo "selected";} ?> value="Juni">Juni</option>
                                          <option <?php if ($masa_pajak == "Juli") {
                                          echo "selected";} ?> value="Juli">Juli</option>
                                          <option <?php if ($masa_pajak == "Agustus") {
                                          echo "selected";} ?> value="Agustus">Agustus</option>
                                          <option <?php if ($masa_pajak == "September") {
                                          echo "selected";} ?> value="September">September</option>
                                          <option <?php if ($masa_pajak == "Oktober") {
                                          echo "selected";} ?> value="Oktober">Oktober</option>
                                          <option <?php if ($masa_pajak == "November") {
                                          echo "selected";} ?> value="November">November</option>
                                          <option <?php if ($masa_pajak == "Desember") {
                                          echo "selected";} ?> value="Desember">Desember</option>
                                        </select>

                                          <label for="fullname">Tahun Pajak * :</label>
                                          <select class="form-control" name="tahun">
                                              <option>Pilih Tahun</option>
                                              <option <?php if ($tahun == "2015") {
                                              echo "selected";} ?> value="2015">2015</option>
                                              <option <?php if ($tahun == "2016") {
                                              echo "selected";} ?> value="2016">2016</option>
                                              <option <?php if ($tahun == "2017") {
                                              echo "selected";} ?> value="2017">2017</option>
                                              <option <?php if ($tahun == "2018") {
                                              echo "selected";} ?> value="2018">2018</option>
                                              <option <?php if ($tahun == "2019") {
                                              echo "selected";} ?> value="2019">2019</option>
                                          </select>

                                          <label for="fullname">Nominal Pajak * :</label>
                                          <input type="text" class="form-control" name="nominal" value="<?php echo $row->jumlah_pajak; ?>">

                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
<?php $no++; }?>