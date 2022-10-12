<?php 


class Admin_login
{
	protected $ci;

	public function __construct(){
		$this->ci=& get_instance();
		$this->ci->load->model('login_model');
	}

	public function login($username, $password)
	{
		$cek = $this->ci->login_model->login($username, $password);
		if($cek){
			$nama = $cek->nama_admin;
			$username = $cek->username;

			$this->ci->session->set_userdata('nama_admin', $nama);
			$this->ci->session->set_userdata('username', $username);
			redirect('administrator/beranda');
		}else{
			$this->ci->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert" style="font-size:15px;">
                 Username atau Password Salah!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');
			redirect('administrator/login');
		}
	}

	public function cek_login()
	{
		if($this->ci->session->userdata('username')==""){
			$this->ci->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert" style="font-size:15px;">
                 Anda Belum Login
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');
			redirect('administrator/login');
		}
	}

	public function logout(){
		$this->ci->session->unset_userdata('nama_admin');
		$this->ci->session->unset_userdata('username');
		$this->ci->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert" style="font-size:15px;">
                Anda Berhasil Logout!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>');
		redirect('administrator/login');
	}


}


 ?>