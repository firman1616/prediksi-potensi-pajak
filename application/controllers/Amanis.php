<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Amanis extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1 ){
				redirect(base_url("login"));
			}
	//	$this->load->library('Pdf');
			$this->load->library('PHPExcel');
	 }

	public function index()
	{
		$data['name'] 			= $this->session->userdata('nama');
		$data['conten'] 		= 'conten/amanis';
		$data['title'] 			= 'RM Amanis';
		$data['sumber']			= $this->M_data->get_data('tbl_rm_amanis');
		//$data['restoran']		= $this->M_data->get_data('tbl_restoran');
		$this->load->view('template/conten',$data);
	}

	public function detail_rekap_bulanan()
	{
		$data['name'] 			= $this->session->userdata('nama');
		$data['conten'] 		= 'conten/detail_rekap_amanis';
		$data['title'] 			= 'RM Amanis';
		
		//$data['sumber']			= $this->M_data->get_data('tbl_rm_sumber_hidup');
		//$data['restoran']		= $this->M_data->get_data('tbl_restoran');
		$this->load->view('template/conten',$data);
	}

	public function tambah_pajak()
	{
		$date = date('Y-m-d H:i:s');
		$table='tbl_rm_amanis';
		$data= array(	
				'tgl_transaksi'	  => $this->input->post('tgl_transaksi'),
				'nominal' 		  => $this->input->post('nominal'),
				'validasi' 		  => $date
						 );
		$this->M_data->simpan_data($table,$data);
		redirect('Amanis');
	}

	public function import()
	{
		$config['upload_path'] = './assets/';
		$config['allowed_types'] = 'xlsx|xls';

		$this->load->library('upload');
		$this->upload->initialize($config);  

		if (! $this->upload->do_upload()){
		$this->session->set_flashdata("gagal","<center><strong>Import Data GAGAL !!!</strong></center>");
		redirect('Amanis');
			// print_r('gagal');
		}else{
		$data = array('upload_data' => $this->upload->data());
        $upload_data = $this->upload->data(); //Returns array of containing all of the data related to the file you uploaded.
        $filename = $upload_data['file_name'];
        $this->M_data->upload_data_amanis($filename);
        unlink('./assets/'.$filename);
        $this->session->set_flashdata("berhasil","<center><strong>Import Data BERHASIL!!!</strong></center>");
		redirect('Amanis');}
			// print_r('proses');
		//semang
	}

	/*public function update_pajak($id){
		$date = date('Y-m-d H:i:s');
		$table='tbl_restoran';
		$data= array(	
				'masa_pajak'	  => $this->input->post('masa_pajak'),
				'tahun' 		  => $this->input->post('tahun'),
				'jumlah_pajak'    => $this->input->post('nominal'),
				'date_validation' => $date
						 );
		$this->M_data->update_data($table,$data,array('id_resto' => $id));
		redirect('Dinas_resto');
	}

	public function hapus_pajak($id)
	{
		$table = 'tbl_restoran';
		$where = array('id_resto' => $id);
		$this->M_data->hapus_data($table,$where);
		redirect('Dinas_resto');
	}*/
}
