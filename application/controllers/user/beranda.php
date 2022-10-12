<?php 

class Beranda extends CI_Controller{

	public function index(){
		$data = array(
			'title'	=> 'Halaman Beranda',
			'isi'	=> 'user/beranda'
		);
		$this->load->view('userTemplate/wrapper', $data, FALSE);
	}

}


 ?>