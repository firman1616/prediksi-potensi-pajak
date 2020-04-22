<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dinas_resto extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if($this->session->userdata('status') == FALSE || $this->session->userdata('level') != 1 ){
				redirect(base_url("login"));
			}
	//	$this->load->library('Pdf');
	 }

	public function index()
	{
		$data['name'] 			= $this->session->userdata('nama');
		$data['conten'] 		= 'conten/data_pajak_restoran';
		$data['title'] 			= 'Data Pajak restoran';
		$data['restoran']		= $this->M_data->get_data('tbl_restoran');
		$this->load->view('template/conten',$data);
	}

	public function tambah_pajak()
	{
		$date = date('Y-m-d H:i:s');
		$table='tbl_restoran';
		$data= array(	
				'masa_pajak'	  => $this->input->post('masa_pajak'),
				'tahun' 		  => $this->input->post('tahun'),
				'jumlah_pajak'    => $this->input->post('nominal'),
				'tgl_transaksi'	  => $this->input->post('tgl_transaksi'),
				'date_validation' => $date
						 );
		$this->M_data->simpan_data($table,$data);
		redirect('Dinas_resto');
	}

	public function update_pajak($id){
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
	}
}
