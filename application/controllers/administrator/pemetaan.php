<?php 


class Pemetaan extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('faskes_model');
	}

	public function index(){
		$data = array(
			'title' => 'Peta Persebaran',
			'faskes'=> $this->faskes_model->getJoin(),
			'kecamatan'	=> $this->kecamatan_model->getAll(),
			'isi'	=> 'admin/pemetaan'
			
		);
		$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}

	public function search(){

		if($this->input->post('keyword'))
		{
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		}else{
			$data['keyword'] = $this->session->userdata('keyword');
		}
		$data['title']	= "peta persebaran";
		$data = array(
			'title' => 'Peta Persebaran',
			'faskes'=> $this->faskes_model->search($data['keyword']),
			'kecamatan'	=> $this->kecamatan_model->getAll(),
			'isi'	=> 'admin/pemetaan'
			
		);
		$this->load->view('adminTemplate/header');
		$this->load->view('adminTemplate/head');
		$this->load->view('adminTemplate/sidebar');
		$this->load->view('admin/pemetaan', $data);
		$this->load->view('adminTemplate/footer');
	}

	public function filter_jenis(){
		if($this->input->post('keyword'))
		{
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		}else{
			$data['keyword'] = $this->session->userdata('keyword');
		}
		$data = array(
			'title' => 'Peta Persebaran',
			'faskes'=> $this->faskes_model->filter_jenis($data['keyword']),
			'kecamatan'	=> $this->kecamatan_model->getAll(),
			'isi'	=> 'admin/pemetaan'
			
		);
		$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}

	public function filter_kecamatan(){
		if($this->input->post('keyword'))
		{
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		}else{
			$data['keyword'] = $this->session->userdata('keyword');
		}
		$data = array(
			'title' => 'Peta Persebaran',
			'faskes'=> $this->faskes_model->filter_kecamatan($data['keyword']),
			'kecamatan'	=> $this->kecamatan_model->getAll(),
			'isi'	=> 'admin/pemetaan'
			
		);
		$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}


	public function filter_layanan(){
		if($this->input->post('layanan'))
		{
			$data['keyword'] = implode(", ", $this->input->post('layanan'));
			$this->session->set_userdata('keyword', $data['keyword']);
		}else{
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$data = array(
			'title' => 'Peta Persebaran',
			'faskes'=> $this->faskes_model->filter_layanan($data['keyword']),
			'kecamatan'	=> $this->kecamatan_model->getAll(),
			'isi'	=> 'admin/pemetaan'
			
		);
		$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}

	public function filter_dokter(){
		if($this->input->post('dokter'))
		{
			$data['keyword'] = implode(", ", $this->input->post('dokter'));
			$this->session->set_userdata('keyword', $data['keyword']);
		}else{
			$data['keyword'] = $this->session->userdata('keyword');
		}
		$data = array(
			'title' => 'Peta Persebaran',
			'faskes'=> $this->faskes_model->filter_dokter($data['keyword']),
			'kecamatan'	=> $this->kecamatan_model->getAll(),
			'isi'	=> 'admin/pemetaan'
			
		);
		$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}

	public function rute($id_faskes){

		$data = array(
			'title' => 'Peta Persebaran',
			'faskes'=> $this->faskes_model->getRute($id_faskes),
			'isi'	=> 'admin/rute'
			
		);
		$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}
}





 ?>