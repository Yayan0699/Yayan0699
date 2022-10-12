<?php 

class User extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->admin_login->cek_login();
	}
	
	public function index(){
		$data = array(
			'title' => 'Data Admin',
			'isi'	=> 'admin/user/data',
			'user'	=> $this->user_model->getAll()
		);
		$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}


	public function tambah(){

		$this->form_validation->set_rules('nama_admin', 'nama_admin', 'required');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if($this->form_validation->run() == FALSE ){
			$data = array(
						'title' => 'Insert Data User',
						'isi'	=> 'admin/user/tambah'
			);
			$this->load->view('adminTemplate/wrapper', $data, FALSE);
		}else{
			$id_admin = $this->input->post('id_admin');
			$nama_admin = $this->input->post('nama_admin');
			$jabatan = $this->input->post('jabatan');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
						'id_admin' => $id_admin,
						'nama_admin' => $nama_admin,
						'jabatan'	=> $jabatan,
						'username'	=> $username,
						'password'	=> $password
			);

			$this->user_model->insert($data);
			redirect('administrator/user');

		}
		
	}

	public function ubah($id_admin){
		$where = array('id_admin'=>$id_admin);
		$this->form_validation->set_rules('nama_admin', 'nama_admin', 'required');
		$this->form_validation->set_rules('jabatan', 'jabatan', 'required');
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if($this->form_validation->run() == FALSE ){
			$data = array(
						'title' => 'Update Data User',
						'isi'	=> 'admin/user/ubah',
						'user'	=> $this->user_model->getRow($where)
			);
			$this->load->view('adminTemplate/wrapper', $data, FALSE);
		}else{
			$id_admin = $this->input->post('id_admin');
			$nama_admin = $this->input->post('nama_admin');
			$jabatan = $this->input->post('jabatan');
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$data = array(
						'id_admin'	=> $where['id_admin'],
						'nama_admin' => $nama_admin,
						'jabatan'	=> $jabatan,
						'username'	=> $username,
						'password'	=> $password
			);

			$this->user_model->update($data);
			
			redirect('administrator/user');

		}
	}


	public function hapus($id_admin){
		$where = array('id_admin'=>$id_admin);
		$this->user_model->delete($where);
		
		redirect('administrator/user');
	}

}


 ?>

 