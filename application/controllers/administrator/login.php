<?php 

class Login extends CI_Controller{


	public function index(){
		

		$data= array(
			'title' => "Login Admin"
		);
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$this->admin_login->login($username, $password);
		}
		$this->load->view('adminTemplate/header');
		$this->load->view('admin/login_form', $data);
		$this->load->view('adminTemplate/footer');
	}

	public function logout(){
		$this->admin_login->logout();
	}
}

 ?>
 