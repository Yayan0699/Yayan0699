<?php 


class Peta extends CI_Controller{

	public function index(){
		$data = array(
			'title'	=> 'Halaman Peta',
			'faskes'=> $this->faskes_model->getJoin(),
			'kecamatan'	=> $this->kecamatan_model->getAll(),
			'isi'	=> 'user/peta'
		);
		$this->load->view('userTemplate/wrapper', $data, FALSE);
	}

	public function search(){
		if($this->input->post('keyword'))
		{
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		}else{
			$data['keyword'] = $this->session->userdata('keyword');
		}
		$data = array(
			'title' => 'Peta Persebaran',
			'faskes'=> $this->faskes_model->search($data['keyword']),
			'kecamatan'	=> $this->kecamatan_model->getAll(),
			'isi'	=> 'user/peta'
			
		);
		$this->load->view('userTemplate/wrapper', $data, FALSE);
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
			'isi'	=> 'user/peta'
			
		);
		$this->load->view('userTemplate/wrapper', $data, FALSE);
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
			'isi'	=> 'user/peta'
			
		);
		$this->load->view('userTemplate/wrapper', $data, FALSE);
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
			'isi'	=> 'user/peta'
			
		);
		$this->load->view('userTemplate/wrapper', $data, FALSE);
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
			'isi'	=> 'user/peta'
			
		);
		$this->load->view('userTemplate/wrapper', $data, FALSE);
	}

	public function rute($id_faskes){

		$data = array(
			'title' => 'Rute',
			'faskes'=> $this->faskes_model->getRute($id_faskes),
			'isi'	=> 'user/rute'
			
		);
		$this->load->view('userTemplate/wrapper', $data, FALSE);
	}

}


 ?>