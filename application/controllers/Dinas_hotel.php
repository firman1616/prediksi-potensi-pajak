<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dinas_hotel extends CI_Controller {
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
		$data['conten'] 		= 'conten/data_pajak_hotel';
		$data['title'] 			= 'Data Pajak Hotel';
		$data['hotel']		= $this->M_data->get_data('tbl_hotel');
		$this->load->view('template/conten',$data);
	}

	public function tambah_pajak()
	{
		$date = date('Y-m-d H:i:s');
		$table='tbl_hotel';
		$data= array(	
				'masa_pajak'	  => $this->input->post('masa_pajak'),
				'tahun' 		  => $this->input->post('tahun'),
				'jumlah_pajak'    => $this->input->post('nominal'),
				'date_validation' => $date
						 );
		$this->M_data->simpan_data($table,$data);
		redirect('Dinas_hotel');
	}

	public function update_pajak($id){
		$date = date('Y-m-d H:i:s');
		$table='tbl_hotel';
		$data= array(	
				'masa_pajak'	  => $this->input->post('masa_pajak'),
				'tahun' 		  => $this->input->post('tahun'),
				'jumlah_pajak'    => $this->input->post('nominal'),
				'date_validation' => $date
						 );
		$this->M_data->update_data($table,$data,array('id_hotel' => $id));
		redirect('Dinas_hotel');
	}

	public function hapus_pajak($id)
	{
		$table = 'tbl_hotel';
		$where = array('id_hotel' => $id);
		$this->M_data->hapus_data($table,$where);
		redirect('Dinas_hotel');
	}
}
