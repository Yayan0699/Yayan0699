<?php 


class Rasio extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('faskes_model');
	}

	public function index(){
		$data = array(
			'title' => 'Rasio Perbandingan Jumlah penduduk dengan jumlah fasilitas',
			'faskes'=> $this->faskes_model->getJoin(),
			'kecamatan'	=> $this->kecamatan_model->getAll(),
			'isi'	=> 'admin/kecamatan/rasio'
			
		);
		$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}

	public function rumkitKecamatan($id_kecamatan){
		$kondisi = array(
			'id_kecamatan' => $id_kecamatan
		);
		$data = array(
			'rumkit'	=> $this->faskes_model->rumkitKecamatan($kondisi)
		);
		return $data['rumkit'];
	}
	/*
	public function search(){
		$keyword = $this->input->post('keyword');
		$data = array(
			'title' => 'Peta Persebaran',
			'faskes'=> $this->faskes_model->search($keyword),
			'kecamatan'	=> $this->kecamatan_model->getAll(),
			'isi'	=> 'admin/pemetaan'
			
		);
		$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}

	public function filter_jenis(){
		$keyword = $this->input->post('keyword');
		$data = array(
			'title' => 'Peta Persebaran',
			'faskes'=> $this->faskes_model->filter_jenis($keyword),
			'kecamatan'	=> $this->kecamatan_model->getAll(),
			'isi'	=> 'admin/pemetaan'
			
		);
		$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}

	public function filter_kecamatan(){
		$keyword = $this->input->post('keyword');
		$data = array(
			'title' => 'Peta Persebaran',
			'faskes'=> $this->faskes_model->filter_kecamatan($keyword),
			'kecamatan'	=> $this->kecamatan_model->getAll(),
			'isi'	=> 'admin/pemetaan'
			
		);
		$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}


	public function filter_layanan(){
		$keyword = implode(", ", $this->input->post('layanan'));
		$data = array(
			'title' => 'Peta Persebaran',
			'faskes'=> $this->faskes_model->filter_layanan($keyword),
			'kecamatan'	=> $this->kecamatan_model->getAll(),
			'isi'	=> 'admin/pemetaan'
			
		);
		$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}

	public function filter_dokter(){
		$keyword = implode(", ", $this->input->post('dokter'));
		$data = array(
			'title' => 'Peta Persebaran',
			'faskes'=> $this->faskes_model->filter_dokter($keyword),
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
	*/
}





 ?>