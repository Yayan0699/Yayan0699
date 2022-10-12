<?php 

class Daftar extends CI_Controller{

	public function index(){


		if($this->input->post('submit'))
		{
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		}else{
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$config['base_url'] 	= site_url('user/daftar/index');
		$config['total_rows'] 	= $this->faskes_model->daftarGetRows($data['keyword']);
		$config['per_page']		= 15;
		$confi["uri_segment"] 	= 4;
		$choice 				= $config["total_rows"] / $config["per_page"];
		$config["num_links"]	= floor($choice);

	
		$config['first_link'] 	= 'First';
		$config['last_link'] 	= 'Last';
		$config['next_link'] 	= 'Next';
		$config['prev_link'] 	= 'Prev';

		$config['full_tag_open']	='<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] 	='</ul></nav></div>';

		$config['num_tag_open']		='<li class="page-item"> <span class="page-link">';
		$config['num_tag_close']	='</span></li>';

		$config['cur_tag_open']		='<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']	='</span></li>';

		$config['next_tag_open']	='<li class="page-item"> <span class="page-link">';
		$config['next_tagl_close']	='<span aria-hidden="true">&raquo</span></span></li>';

		$config['prev_tag_open']	='<li class="page-item"> <span class="page-link">';
		$config['prev_tagl_close']	='</span>Next</li>';

		$config['first_tag_open']	='<li class="page-item"> <span class="page-link">';
		$config['first_tagl_close']	='</span></li>';

		$config['last_tag_open']	='<li class="page-item"> <span class="page-link">';
		$config['last_tagl_close']	='</span></li>';
		


		$this->pagination->initialize($config);
		$data['start']	= ($this->uri->segment(4))? $this->uri->segment(4):0 ; 

		$data['faskes']	= $this->faskes_model->getDaftar($config["per_page"], $data['start'], $data['keyword'])->result();
		$data['pagination'] = $this->pagination->create_links(); 
		$data['title']	= "Halaman Daftar Fasilitas";


		$this->load->view('userTemplate/head');
		$this->load->view('userTemplate/navbar');
		$this->load->view('user/daftar', $data);
		$this->load->view('userTemplate/footer');
	}

	public function detail($id_faskes){
		$where = array('id_faskes'=>$id_faskes);
		$data = array(
					'title'	=> 'Halaman Detail',
					'isi'	=> 'user/detail',
					'faskes'=> $this->faskes_model->getDetail($where)
		);
		$this->load->view('userTemplate/wrapper', $data, FALSE);
	}


	public function Apotik(){


		if($this->input->post('submit'))
		{
			$data['keyword'] = $this->input->post('keyword');
			$this->session->set_userdata('keyword', $data['keyword']);
		}else{
			$data['keyword'] = $this->session->userdata('keyword');
		}

		$config['base_url'] 	= site_url('user/daftar/Apotik');
		$config['total_rows'] 	= $this->faskes_model->daftarApotikRows($data['keyword']);
		$config['per_page']		= 15;
		$confi["uri_segment"] 	= 4;
		$choice 				= $config["total_rows"] / $config["per_page"];
		$config["num_links"]	= floor($choice);

		$config['first_link'] 	= 'First';
		$config['last_link'] 	= 'Last';
		$config['next_link'] 	= 'Next';
		$config['prev_link'] 	= 'Prev';

		$config['full_tag_open']	='<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] 	='</ul></nav></div>';

		$config['num_tag_open']		='<li class="page-item"> <span class="page-link">';
		$config['num_tag_close']	='</span></li>';

		$config['cur_tag_open']		='<li class="page-item active"><span class="page-link">';
		$config['cur_tag_close']	='</span></li>';

		$config['next_tag_open']	='<li class="page-item"> <span class="page-link">';
		$config['next_tagl_close']	='<span aria-hidden="true">&raquo</span></span></li>';

		$config['prev_tag_open']	='<li class="page-item"> <span class="page-link">';
		$config['prev_tagl_close']	='</span>Next</li>';

		$config['first_tag_open']	='<li class="page-item"> <span class="page-link">';
		$config['first_tagl_close']	='</span></li>';

		$config['last_tag_open']	='<li class="page-item"> <span class="page-link">';
		$config['last_tagl_close']	='</span></li>';
		
		$this->pagination->initialize($config);
		$data['start']	= ($this->uri->segment(4))? $this->uri->segment(4):0 ; 

		$data['faskes']	= $this->faskes_model->getApotik($config["per_page"], $data['start'], $data['keyword'])->result();
		$data['pagination'] = $this->pagination->create_links(); 
		$data['title']	= "Halaman Daftar Apotik";


		$this->load->view('userTemplate/head');
		$this->load->view('userTemplate/navbar');
		$this->load->view('user/daftarApotik', $data);
		$this->load->view('userTemplate/footer');
	}


	

	

}


 ?>