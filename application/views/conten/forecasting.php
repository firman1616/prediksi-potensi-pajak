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

        <div class="row">
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

                            <label for="email">Pilih Perhitungan * :</label>
                            <select class="form-control" name="pilihan">
                                <option></option>
                                <option value="bulan">Bulanan</option>
                                <option value="Hari">Harian</option>
                            </select>
                            <label for="email">Pilih Bulan * :</label>
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
                            <label>Pilih Tahun*:</label>
                            <?php
                            $now = date('Y');
                            $ymin = $now - 5;
                            echo "<select name='tahun' class=form-control required>";
                            echo "<option value=''>Pilih Tahun</option>";
                            for ($a = $now; $a >= $ymin; --$a) {
                                echo "<option value='$a'>$a</option>";
                            }
                            echo "</select>";
                            ?>
                            <label>Nilai Alpa *:</label>
                            <select class="form-control" name="alpa" required>
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
                        <!-- COnten -->

                        <?php
                        error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
                        $bln_input = $_POST['bulan'];
                        $thn_input = $_POST['tahun'];
                        $alpha = $_POST['alpa'];
                        $alpamin = 1 - $alpha;
                        $tgl = $thn_input . '-' . $bln_input;

                        echo $alpha . '<br>';
                        echo $alpamin . '<br>';
                        for ($i = 12; $i > 0; $i--) {
                            $tgl_resv = date('Y-m', strtotime('-' . $i . ' months', strtotime($tgl)));

                            $data = $this->db->query(
                                "SELECT
                                    SUM( a.nominal ) AS jumlah_a,
                                    SUM( b.nominal ) AS jumlah_b,
                                    SUM( c.nominal ) AS jumlah_c
                                FROM
                                    tbl_rm_sumber_hidup AS a
                                    LEFT JOIN tbl_rm_brewok AS b ON a.tgl_transaksi = b.tgl_transaksi
                                    LEFT JOIN tbl_rm_amanis AS c ON a.tgl_transaksi = c.tgl_transaksi
                                WHERE
                                    DATE_FORMAT( a.tgl_transaksi, '%Y-%m' ) = '" . $tgl_resv . "'
                                "
                            )->result();

                            foreach ($data as $bulan) {
                                $total_1[] = $bulan->jumlah_a + $bulan->jumlah_b + $bulan->jumlah_c;
                                $total = $bulan->jumlah_a + $bulan->jumlah_b + $bulan->jumlah_c;
                                echo $total . '<br>';
                            }
                        }
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
                        <!-- COnten -->
                        <?php
                        $total_2[0] = $total_1[0];
                        for ($j = 1; $j < 12; $j++) {
                            $total_2[$j] = ($alpha * $total_1[$j]) + ($alpamin * $total_2[($j - 1)]);
                        }


                        foreach ($total_2 as $data) {
                            echo round($data, 1) . '<br>';
                        }
                        ?>
                    </div>


                </div>
            </div>

        </div>

    </div>
</div>