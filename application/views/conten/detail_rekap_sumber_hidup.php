 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Detail Rekap Pajak</h3>
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
                    <h2>Detail Rekap Pajak Perbulan</h2>
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
                      <button type="button" class="btn btn-danger" onclick="goBack()"><i class="fa fa-mail-reply"></i> Kembali</button>
                      <button type="button" class="btn btn-warning" onclick="Reload()"><i class="fa fa-refresh"></i> Reload</button>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Hari dan Tanggal</th>
                          <th>Total</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php 
                      for ($i=1; $i <= 31 ; $i++) { 
                        if ($i < 10) {$i = "0".$i;} 
                            /*for ($i=date("n"); $i >= 1 ; $i++) {
                                if($i < 10){
                                    $i = "0".$i;
                                  }*/
                          ?>
                        <tr>
                          <th scope="row"><?php echo $i; ?></th>
                          <td>
                            <?php echo hari_helpers(date('l',strtotime($this->input->get("param")."-".$i))).", ".reverseNormalFormatDate_helper($this->input->get("param")."-".$i); ?>
                          </td>
                          <td>
                            Rp. <?php 
                            $tgl = $this->input->get("param")."-".$i;
                            $nama = $this->input->get("nama");
                            $query_tgl = $this->db->query("SELECT SUM(nominal) AS total FROM tbl_rm_sumber_hidup WHERE tgl_transaksi LIKE '%$tgl%'");
                            foreach ($query_tgl->result() as $row) {
                             echo number_format($row->total);
                           }
                           ?> ,-
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

<script>
        function goBack() {
          window.history.back();
        }
      </script>

<script>
function Reload() {
  location.reload();
}
</script>