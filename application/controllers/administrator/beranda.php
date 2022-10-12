<?php 

class Beranda extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('faskes_model');
		$this->load->model('user_model');
		$this->admin_login->cek_login();
	}

	public function index(){
		$data = array(
			'title' => 'Beranda Admin',
			'isi'	=> 'admin/beranda',
			'user' => $this->user_model->countRows(),
			'rumkit' => $this->faskes_model->countRumkit(),
			'puskesmas' => $this->faskes_model->countPuskesmas(),
			'poskesdes' => $this->faskes_model->countPoskesdes(),
			'klinik' => $this->faskes_model->countKlinik(),
			'apotik' => $this->faskes_model->countApotik(),
			'kecamatan' => $this->kecamatan_model->countKecamatan()
		);
		$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}
}

 ?>
 