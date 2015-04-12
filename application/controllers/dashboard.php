<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('asia/jakarta'); 
		if(!$this->session->userdata('session_login')){
			redirect('login');
		}
	}
	
	function index()
	{	
		$data['page']   = 'welcome';
		$this->load->view('template',$data);
	}
	
	function uploads($data,$name){
		$file = $data;
		$folder = "./assets/upload/bukti/";
		$folder = $folder . basename($name);
		move_uploaded_file($data['tmp_name'], $folder);	
	}
	
	function web_profile(){
		$data['profile'] = $this->app_model->get_profile();
		$data['page'] = 'web_profile';
		$this->load->view('template',$data);
	}
	
	function slider(){
		$data['page'] = 'slider';
		$this->load->view('template_table',$data);
	}
	
	function save_data_laporan(){
		$sess = $this->session->userdata('session_login');
		$bukti = $_FILES['bukti']['name'];
		if($bukti!=''){
		$bukti = date('Ymdhis').'_'.$_FILES['bukti']['name'];
		$this->uploads($_FILES['bukti'],$bukti);
		}
		$data = array(
		'nis'				=> $this->input->post('nis'),
		'id_pelanggaran'	=> $this->input->post('pelanggaran'),
		'tgl_lapor'			=> date('Y-m-d h:i:s'),
		'id_pelapor'		=> $sess['nik'],
		'foto_bukti'		=> $bukti,
		'keterangan'		=> $this->input->post('ket'),
		'flag'				=> 0
		);
		$this->app_model->save_data_laporan($data);
		redirect('dashboard/data_pelanggaran');
	}
	
}


	
