<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Controller {
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
		$data['conten'] 		= 'conten/master';
		$data['title'] 			= 'Master Target';
		$data['restoran']		= $this->M_data->get_data_by_id('tbl_target', array('id_target' => 1 ));
		$data['hotel']			= $this->M_data->get_data_by_id('tbl_target', array('id_target' => 2 ));
		$this->load->view('template/conten',$data);
	}

	function edit_target_resto(){
		$id = 1;
		$bulan = $this->input->post('bulan');
		$nominal = $this->input->post('nominal');
		$tahun = $this->input->post('tahun_resto');
		$table = 'tbl_target';
		$where  = array('id_target' => $id);
		$data = array(
			'bulan' => $bulan,
			'target' => $nominal,
			'tahun' => $tahun
			);
		$this->M_data->update_data($table, $data, $where);
		redirect('master');
	}

	function edit_target_hotel(){
		$id = 2;
		$bulan = $this->input->post('bulan');
		$nominal = $this->input->post('nominal');
		$tahun = $this->input->post('tahun_hotel');
		$table = 'tbl_target';
		$where  = array('id_target' => $id);
		$data = array(
			'bulan' => $bulan,
			'target' => $nominal,
			'tahun' => $tahun
			);
		$this->M_data->update_data($table, $data, $where);
		redirect('master');
	}
}
