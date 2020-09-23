<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Master Target Pajak</h3>
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
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Master Target Pajak Restoran</h2>
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
                  	<form method="post" action="<?php echo base_url('Master/edit_target_resto') ?>">
                  	<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <select class="form-control" name="bulan">
                        <option value="">Pilih Bulan</option>
                        	<?php
                        $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                        $jlh_bln=count($bulan);
                        for($c=0; $c<$jlh_bln; $c+=1){
                            echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                        }
                        ?>
                        </select>
                      </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <?php
                          $now=date('Y');
                          $ymin=$now-4;
                          echo "<select name='tahun_resto' class=form-control required>";
                          echo "<option>Pilih Tahun</option>";
                          for($a=$now;$a>=$ymin;--$a)
                          {
                               echo "<option value='$a'>$a</option>";
                          }
                          echo "</select>";
                        ?>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" name="nominal" class="form-control" placeholder="Nominal Target">
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <button type="submit" class="btn btn-warning"><i class="fa fa-edit"></i> | Ubah Target</button>
                      </div>
                      </form>
                      <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Bulan</th>
                          <th>Tahun</th>
                          <th>Nominal Target</th>
                        </tr>
                      </thead>
                      <tbody>
                      	<?php 
                      	foreach ($restoran->result() as $row) { ?>
                      	
                        <tr>
                          <th scope="row">1</th>
                          <td><?php echo $row->bulan; ?></td>
                          <td><?php echo $row->tahun; ?></td>
                          <td>Rp. <?php echo number_format($row->target) ?>,-</td>
                        </tr>

                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Master Target Pajak Hotel</h2>
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
                  	<form method="post" action="<?php echo base_url('Master/edit_target_hotel') ?>">
                  	<div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <select class="form-control" name="bulan">
                        	<option value="">Pilih Bulan</option>
                        	<?php
                        $bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
                        $jlh_bln=count($bulan);
                        for($c=0; $c<$jlh_bln; $c+=1){
                            echo"<option value=$bulan[$c]> $bulan[$c] </option>";
                        }
                        ?>
                        </select>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <?php
                          $now=date('Y');
                          $ymin=$now-4;
                          echo "<select name='tahun_hotel' class=form-control required>";
                          echo "<option>Pilih Tahun</option>";
                          for($a=$now;$a>=$ymin;--$a)
                          {
                               echo "<option value='$a'>$a</option>";
                          }
                          echo "</select>";
                        ?>
                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <input type="number" name="nominal" class="form-control" placeholder="Nominal Target">
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
                        <button type="submit" class="btn btn-warning"><i class="fa fa-edit"> | Ubah Target</i></button>
                      </div>
                  	  </form>
                      <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Bulan</th>
                          <th>Tahun</th>
                          <th>Nominal Target</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                      	foreach ($hotel->result() as $row) { ?>
                      	
                        <tr>
                          <th scope="row">1</th>
                          <td><?php echo $row->bulan; ?></td>
                          <td><?php echo $row->tahun; ?></td>
                          <td>Rp. <?php echo number_format($row->target) ?>,-</td>
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