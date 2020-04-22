<?php
class M_data extends CI_Model {
	function __construct(){
        parent :: __construct();
    }
    function get_data($table){
  		return $this->db->get($table);
  	}
		function get_data_by_id($table,$where) {
          return $this->db->get_where($table,$where);
  	}
		function simpan_data($table,$data){
    	$this->db->insert($table,$data);
    }
		function update_data($table,$data,$where){
    	$this->db->update($table,$data,$where);
    }
    function hapus_data($table,$where){
    	$this->db->delete($table,$where);
    }
    function cek_login($table,$where){    
    return $this->db->get_where($table,$where);
    }

    public function upload_data_sumber_hidup($filename){
          $date = date('Y-m-d H:i:s');
          ini_set('memory_limit', '-1');
          $inputFileName = './assets/'.$filename;
          try {
          $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
          } catch(Exception $e) {
          die('Error loading file :' . $e->getMessage());
          }

          $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
          $numRows = count($worksheet);

          for ($i=2; $i < ($numRows+1) ; $i++) {

            $ins = array(
                "tgl_transaksi"        => $worksheet[$i]["B"],
                "nominal"              => $worksheet[$i]["C"],
                "validasi"             => $date
                 );
            $this->db->insert('tbl_rm_sumber_hidup',$ins);
          }
    }

    public function upload_data_brewok($filename){
          $date = date('Y-m-d H:i:s');
          ini_set('memory_limit', '-1');
          $inputFileName = './assets/'.$filename;
          try {
          $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
          } catch(Exception $e) {
          die('Error loading file :' . $e->getMessage());
          }

          $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
          $numRows = count($worksheet);

          for ($i=2; $i < ($numRows+1) ; $i++) {

            $ins = array(
                "tgl_transaksi"        => $worksheet[$i]["B"],
                "nominal"              => $worksheet[$i]["C"],
                "validasi"             => $date
                 );
            $this->db->insert('tbl_rm_brewok',$ins);
          }
    }

    public function upload_data_amanis($filename){
          $date = date('Y-m-d H:i:s');
          ini_set('memory_limit', '-1');
          $inputFileName = './assets/'.$filename;
          try {
          $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
          } catch(Exception $e) {
          die('Error loading file :' . $e->getMessage());
          }

          $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
          $numRows = count($worksheet);

          for ($i=2; $i < ($numRows+1) ; $i++) {

            $ins = array(
                "tgl_transaksi"        => $worksheet[$i]["B"],
                "nominal"              => $worksheet[$i]["C"],
                "validasi"             => $date
                 );
            $this->db->insert('tbl_rm_amanis',$ins);
          }
    }
}
