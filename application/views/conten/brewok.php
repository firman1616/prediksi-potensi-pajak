<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>RM. Ayam Brewok</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ayam Brewok</h2>
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
                    <?php
                      if($this->session->flashdata('gagal')==TRUE){ ?>
                            <div class="alert alert-danger">
                              <?php echo $this->session->flashdata('gagal') ?>
                            </div>
                      <?php } ?>
                      <?php
                      if($this->session->flashdata('berhasil')==TRUE){ ?>
                            <div class="alert alert-success">
                              <?php echo $this->session->flashdata('berhasil') ?>
                            </div>
                      <?php } ?>
                      <!-- <button type="button" class="btn btn-primary fa fa-plus" data-toggle="modal" data-target=".bs-example-modal-lg"> Tambah Data</button>  
                        ws pokok e iki seng ws filteran mbek nglebokno parameter-->
                      <form method="post" action="">
                      <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                        <select class="form-control" name="bulan">
                            <option>Pilih Bulan</option>
                            <option value="1">Januari</option>
                            <option value="2">Febuari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                          </select> 
                      </div>
                      <div class="col-md-3 col-sm-12 col-xs-12 form-group">
                      <?php
                      $now=date('Y');
                      $ymin=$now-5;
                      echo "<select name='tahun' class=form-control required>";
                      echo "<option value=''>Pilih Tahun</option>";
                      for($a=$now;$a>=$ymin;--$a)
                      {
                           echo "<option value='$a'>$a</option>";
                      }
                      echo "</select>";
                      ?>
                      </div>
                      <button type="submit" class="btn btn-danger" name="cari"><i class="fa fa-search"></i> Cari Data</button>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-plus"></i> Tambah Dana</button>
                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-lg1"><i class="fa fa-upload"></i> Import Data</button>

                      <?php
                      error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                      if (isset($_POST["cari"]))
                      {
                      //iki gwe opo?
                        $bulan=$_POST["bulan"];
                        $year=$_POST["tahun"];
                        
                      }
                      ?>
                      </form>
                      <!-- <?php 
                      echo "$bulan".'-';
                      echo "$year";
                      ?> -->
                      &nbsp;&nbsp;<b>Bulan => 
                      <?php if ($bulan == "1") { echo "Januari "; } ?>
                      <?php if ($bulan == "2") { echo "Februari "; } ?>
                      <?php if ($bulan == "3") { echo "Maret "; } ?>
                      <?php if ($bulan == "4") { echo "April "; } ?>
                      <?php if ($bulan == "5") { echo "Mei "; } ?>
                      <?php if ($bulan == "6") { echo "Juni "; } ?>
                      <?php if ($bulan == "7") { echo "Juli "; } ?>
                      <?php if ($bulan == "8") { echo "Agustus "; } ?>
                      <?php if ($bulan == "9") { echo "September "; } ?>
                      <?php if ($bulan == "10") { echo "Oktober "; } ?>
                      <?php if ($bulan == "11") { echo "November "; } ?>
                      <?php if ($bulan == "12") { echo "Desember "; } ?>
                      dan Tahun => <?php echo $year ?></b>

                     <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Bulan</th>
                          <th>Jumlah Setoran</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      if ($year = 0 || empty($year) && $bulan = 0 || empty($bulan)) {
                        $year = date('Y');
                        for ($i=date("n"); $i >= 1;$i--) {
                          if($i < 10){
                            $i = "0".$i;
                          }
                          ?>
                          <tr>
                            <td>
                              <font size="3px">
                              <?php echo completeFormatMonthIndo_helper($i) .'-'. $year ?>
                              </font>
                            </td>
                            <td>
                            <?php 
                              $date = date('Y').'-'.$i;
                              $data = $this->db->query("SELECT SUM(nominal) AS jumlah FROM tbl_rm_brewok WHERE tgl_transaksi LIKE '%$date%';");
                              $x = 0;
                              foreach ($data->result() as $row) {
                                echo "Rp. ".number_format($row->jumlah)." ,-";
                                $x += $row->jumlah;
                              }
                              ?>
                            </td>
                            <td>
                              <a target="_new" href="<?php echo base_url('brewok/detail_rekap_bulanan?param='.$date.'') ?>"><button type="button" class="btn btn-primary"><i class="fa fa-list-alt"></i> Lihat Detail</button></a>
                            </td>
                          </tr>
                          <?php 
                        }
                      } elseif(isset($bulan) && isset($year)) {
                        /*$year = date('Y');*/
                        //error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                        for ($i=$bulan; $i >= 1;$i--) {
                          if($i < 10){
                            $i = '0'.$i;
                          } 
                          ?>

                          <tr> 
                            <td>
                              <font size="3px">
                              <?php echo completeFormatMonthIndo_helper($i) .'-'. $_POST["tahun"] ?>
                              </font>
                            </td>
                            <td>
                            <?php 
                              $date = $_POST["tahun"].'-'.$i;
                              $data = $this->db->query("SELECT SUM(nominal) AS jumlah FROM tbl_rm_brewok WHERE tgl_transaksi LIKE '%$date%';");
                              $x = 0;
                              foreach ($data->result() as $row) {
                                echo "Rp. ".number_format($row->jumlah)." ,-";
                                $x += $row->jumlah;
                              } 
                              ?>
                            </td>
                            <td>
                              <a href="<?php echo base_url('brewok/detail_rekap_bulanan?param='.$date.'') ?>" target="_new"><button type="button" class="btn btn-primary"><i class="fa fa-list-alt"></i> Lihat Detail</button></a>
                            </td>
                          </tr>
                          <?php 
                        } 
                      }?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <form method="post" action="<?php echo base_url('brewok/tambah_pajak') ?>">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                        <h4 class="modal-title" id="myModalLabel">Tambah Data Transaksi</h4>
                        </div>
                        <div class="modal-body">
                        <label for="fullname">Tanggal Transaksi * :</label>
                          <input type="date" class="form-control" name="tgl_transaksi" required />
                        <label for="fullname">Nominal Transaksi * :</label>
                          <input type="number" class="form-control" name="nominal" required />
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>

<div class="modal fade bs-example-modal-lg1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg1">
                      <div class="modal-content">
                        <form method="post" action="<?php echo base_url('brewok/import')?>" enctype="multipart/form-data" accept-charset="utf-8">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                        <h4 class="modal-title" id="myModalLabel">Import Data </h4>
                        </div>
                        <div class="modal-body">
                        <label for="fullname">Pilih File * :</label>
                          <input class="form-control" type="file" name="userfile" required>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                        </form>
                      </div>
                    </div>
                  </div>