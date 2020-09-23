 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Forecasting</h3>
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

            <div class="row" >
              <div class="col-md-6 col-sm-6 col-xs-12" id="hitung">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Forecasting</h2>
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
                    <form method="post" action="">

                      <label for="email">Nilai 1 * :</label>
                      <input type="number" class="form-control" name="nilai1" required />
                      <label for="email">Nilai 2 * :</label>
                      <input type="number" class="form-control" name="nilai2" required />
                      <label for="email">Nilai 3 * :</label>
                      <input type="number" class="form-control" name="nilai3" required />
                      <label for="email">Nilai 4 * :</label>
                      <input type="number" class="form-control" name="nilai4" required />
                      <label for="email">Nilai 5 * :</label>
                      <input type="number" class="form-control" name="nilai5" required />

                      <label>Nilai Alpa *:</label>
                          <select class="form-control" name="alpa" required >
                            <option value="">Pilih Nilai Alpa</option>
                            <option value="0.1">0.1</option>
                            <option value="0.2">0.2</option>
                            <option value="0.3">0.3</option>
                            <option value="0.4">0.4</option>
                            <option value="0.5">0.5</option>
                            <option value="0.6">0.6</option>
                            <option value="0.7">0.7</option>
                            <option value="0.8">0.8</option>
                            <option value="0.9">0.9</option>
                      </select>
                      <br>
                      <button type="submit" class="btn btn-primary" name="hitung"><i class="fa fa-calculator"></i> Hitung</button>
                    </form>
                    <?php 
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$nilai1 = $_POST['nilai1'];
$nilai2 = $_POST['nilai2'];
$nilai3 = $_POST['nilai3'];
$nilai4 = $_POST['nilai4'];
$nilai5 = $_POST['nilai5'];
$alpa = $_POST['alpa'];

$param2 = ($alpa * $nilai2) + ((1-$alpa) * $nilai1);
$param3 = ($alpa * $nilai3) + ((1-$alpa) * $param2);
$param4 = ($alpa * $nilai4) + ((1-$alpa) * $param3);
$param5 = ($alpa * $nilai5) + ((1-$alpa) * $param4);

$set2 = ($alpa * $param2) + ((1-$alpa) * $nilai1);
$set3 = ($alpa * $param3) + ((1-$alpa) * $set2);
$set4 = ($alpa * $param4) + ((1-$alpa) * $set3);
$set5 = ($alpa * $param5) + ((1-$alpa) * $set4);

$at1 = (2 * $nilai1) - $nilai1;
$at2 = (2 * $param2) - $set2;
$at3 = (2 * $param3) - $set3;
$at4 = (2 * $param4) - $set4;
$at5 = (2 * $param5) - $set5;

$bt1 = $alpa/(1-$alpa) * ($nilai1 - $nilai1);
$bt2 = $alpa/(1-$alpa) * ($param2 - $set2);
$bt3 = $alpa/(1-$alpa) * ($param3 - $set3);
$bt4 = $alpa/(1-$alpa) * ($param4 - $set4);
$bt5 = $alpa/(1-$alpa) * ($param5 - $set5);

$akhir1 = ($at1 + $bt1);
$akhir2 = ($at2 + $bt2);
$akhir3 = ($at3 + $bt3);
$akhir4 = ($at4 + $bt4);
$akhir5 = ($at5 + $bt5);

$error1 = $nilai1 - $akhir1;
$error2 = $nilai2 - $akhir2;
$error3 = $nilai3 - $akhir3;
$error4 = $nilai4 - $akhir4;
$error5 = $nilai5 - $akhir5;

$bagi1 = $error1/$nilai1;
$bagi2 = $error2/$nilai2;
$bagi3 = $error3/$nilai3;
$bagi4 = $error4/$nilai4;
$bagi5 = $error5/$nilai5;

$kali1 = $bagi1*100;
$kali2 = $bagi2*100;
$kali3 = $bagi3*100;
$kali4 = $bagi4*100;
$kali5 = $bagi5*100;

$pe = $kali1+$kali2+$kali3+$kali4+$kali5;
?>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12" id="nilai">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Forecasting</h2>
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
                      <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <th scope="row" width="20%">Nilai 1</th>
                          <td>Rp. <?php echo number_format($nilai1) ?>,-</td>
                        </tr>
                        <tr>
                          <th scope="row">Nilai 2</th>
                          <td>Rp. <?php echo number_format($nilai2) ?>,-</td>
                        </tr>
                        <tr>
                          <th scope="row">Nilai 3</th>
                          <td>Rp. <?php echo number_format($nilai3) ?>,-</td>
                        </tr>
                        <tr>
                          <th scope="row">Nilai 4</th>
                          <td>Rp. <?php echo number_format($nilai4) ?>,-</td>
                        </tr>
                        <tr>
                          <th scope="row">Nilai 5</th>
                          <td>Rp. <?php echo number_format($nilai5) ?>,-</td>
                        </tr>
                        <tr>
                          <th scope="row">Nilai Alpa</th>
                          <td><?php echo $alpa ?></td>
                        </tr>
                        <tr>
                          <th scope="row">1 - a</th>
                          <td><?php echo 1-$alpa; ?></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

            </div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12" id="hasil">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Hasil Perhitungan Satu Parameter</h2>
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
                      
                    <table class="table table-bordered"><!-- id="datatable" class="table table-striped table-bordered -->
                      <thead>
                        <tr>
                          <th>S't = a*Xt + (1-a)*S't-1</th>
                          <th>S''t =  a*S't + (1-a)</th>
                          <th>at = 2S't - S''t</th>
                          <th>bt = a/(1-a) * (S't - S''t)</th>
                          <th>ft+m = at + bt</th>
                          <th>Xt - Ft</th>
                          <th>(Xt-Ft)/Xt</th>
                          <th>*100</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                          <td><?php echo number_format($nilai1); ?></td>
                          <td><?php echo number_format($nilai1); ?></td>
                          <td><?php echo number_format($at1); ?></td>
                          <td><?php echo number_format($bt1); ?></td>
                          <td><?php echo number_format($akhir1); ?></td>
                          <td><?php echo number_format($error1) ?></td>
                          <td><?php echo $bagi1;; ?></td>
                          <td><?php echo $kali1;; ?></td>
                        </tr>
                        <tr>
                          <td><?php echo number_format($param2); ?></td>
                          <td><?php echo number_format($set2); ?></td>
                          <td><?php echo number_format($at2); ?></td>
                          <td><?php echo number_format($bt2); ?></td>
                          <td><?php echo number_format($akhir2); ?></td>
                          <td><?php echo number_format($error2) ?></td>
                          <td><?php echo $bagi2; ?></td>
                          <td><?php echo $kali2;; ?></td>
                        </tr>
                        <tr>
                          <td><?php echo number_format($param3); ?></td>
                          <td><?php echo number_format($set3); ?></td>
                          <td><?php echo number_format($at3); ?></td>
                          <td><?php echo number_format($bt3); ?></td>
                          <td><?php echo number_format($akhir3); ?></td>
                          <td><?php echo number_format($error3) ?></td>
                          <td><?php echo $bagi3; ?></td>
                          <td><?php echo $kali3;; ?></td>
                        </tr>
                        <tr>
                          <td><?php echo number_format($param4); ?></td>
                          <td><?php echo number_format($set4); ?></td>
                          <td><?php echo number_format($at4); ?></td>
                          <td><?php echo number_format($bt4); ?></td>
                          <td><?php echo number_format($akhir4); ?></td>
                          <td><?php echo number_format($error4) ?></td>
                          <td><?php echo $bagi4; ?></td>
                          <td><?php echo $kali4;; ?></td>
                        </tr>
                        <tr>
                          <td><?php echo number_format($param5); ?></td>
                          <td><?php echo number_format($set5); ?></td>
                          <td><?php echo number_format($at5); ?></td>
                          <td><?php echo number_format($bt5); ?></td>
                          <td><?php echo number_format($akhir5); ?></td>
                          <td><?php echo number_format($error5) ?></td>
                          <td><?php echo $bagi5; ?></td>
                          <td><?php echo $kali5;; ?></td>
                        </tr>
                      </tbody>
                    </table>

                    <table class="table table-bordered"><!-- id="datatable" class="table table-striped table-bordered -->
                      <thead>
                      <th>Nilai PE</th>
                      <th>Nilai MAPE</th>
                      </thead>

                      <tbody>
                        <tr>
                          <td><?php echo $pe; ?></td>
                          <td><?php echo $pe/5; ?></td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>