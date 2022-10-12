<?php 

class Klinik extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->admin_login->cek_login();
	}
	
	public function index(){
		$where = "klinik";
		$data = array(
			'title' => 'Data Klinik',
			'isi'	=> 'admin/klinik/data',
			'klinik'=> $this->faskes_model->getByKategori($where)
		);
		$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}

	public function detail($id_faskes){
		$where = array('id_faskes'=>$id_faskes);
		$data = array(
					'title'	=> 'Detail Klinik ',
					'isi'	=> 'admin/klinik/detail',
					'klinik'=> $this->faskes_model->getDetail($where)
		);
		$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}

		
	public function tambah(){
		$this->form_validation->set_rules('id_faskes', 'id_faskes', 'required');
		$this->form_validation->set_rules('nama_faskes', 'nama_faskes', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('telpon', 'telpon', 'required');
		$this->form_validation->set_rules('jam', 'jam', 'required');
		$this->form_validation->set_rules('latitude', 'latitude', 'required');
		$this->form_validation->set_rules('longitude', 'longitude', 'required');
		$this->form_validation->set_rules('id_kecamatan', 'id_kecamatan', 'required');

				
				$layanan 		= $this->input->post('layanan');
				$dokter 		= $this->input->post('dokter');

		if($this->form_validation->run()==TRUE){
			$config['upload_path'] = './template/assets/foto/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']     = '5000';
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('foto'))
			{
				$data = array(
						'title' => 'Tambah Data klinik',
						'error_upload'	=>  $this->upload->display_errors(),
						'isi'	=> 'admin/klinik/tambah',
						'kecamatan'=> $this->kecamatan_model->getAll()
				);
				$this->load->view('adminTemplate/wrapper', $data, FALSE);
			}else{
				$upload_data = array('uploads'=> $this->upload->data());
				$config['image_library']	=	'gd2';
				$config['source_image']		= './template/assets/foto/'.$upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = array(
						'id_faskes' 	=> $this->input->post('id_faskes'),
						'nama_faskes' 	=> $this->input->post('nama_faskes'),
						'alamat'		=> $this->input->post('alamat'),
						'telpon'		=> $this->input->post('telpon'),
						'jam'			=> $this->input->post('jam'),
						'kategori'		=> "klinik",
						'layanan'		=> implode(", ", $layanan),
						'dokter'		=> implode(", ", $dokter),
						'latitude'		=> $this->input->post('latitude'),
						'longitude'		=> $this->input->post('longitude'),
						'foto'			=> $upload_data['uploads']['file_name'],
						'id_kecamatan'	=> $this->input->post('id_kecamatan')

				);
				$this->faskes_model->tambah($data);
				redirect('administrator/klinik');
			}
		}
				$data = array(
						'title' => 'Tambah Data klinik',
						'isi'	=> 'admin/klinik/tambah',
						'kecamatan'=> $this->kecamatan_model->getAll()
				);
				$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}
	
	public function ubah($id_faskes){
		$where = array('id_faskes'=>$id_faskes);
		$this->form_validation->set_rules('id_faskes', 'id_faskes', 'required');
		$this->form_validation->set_rules('nama_faskes', 'nama_faskes', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('telpon', 'telpon', 'required');
		$this->form_validation->set_rules('jam', 'jam', 'required');
		$this->form_validation->set_rules('latitude', 'latitude', 'required');
		$this->form_validation->set_rules('longitude', 'longitude', 'required');
		//$this->form_validation->set_rules('id_kecamatan', 'id_kecamatan', 'required');
		

		if($this->form_validation->run()==TRUE){
			$config['upload_path'] = './template/assets/foto/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']     = '5000';
			$this->upload->initialize($config);
			if(!$this->upload->do_upload('foto'))
				{
					$data = array(
							'title' => 'Ubah Data klinik',
							'error_upload'	=>  $this->upload->display_errors(),
							'isi'	=> 'admin/klinik/ubah',
							'klinik'=> $this->faskes_model->getDetail($where),
							'kecamatan'=> $this->kecamatan_model->getAll()
					);
					$this->load->view('adminTemplate/wrapper', $data, FALSE);
				}else{
					$upload_data = array('uploads'=> $this->upload->data());
					$config['image_library']	=	'gd2';
					$config['source_image']		= './template/assets/foto/'.$upload_data['uploads']['file_name'];
					$this->load->library('image_lib', $config);
					$data = array(
							'id_faskes' 	=> $this->input->post('id_faskes'),
							'nama_faskes' 	=> $this->input->post('nama_faskes'),
							'alamat'		=> $this->input->post('alamat'),
							'telpon'		=> $this->input->post('telpon'),
							'jam'			=> $this->input->post('jam'),
							'kategori'		=> "klinik",
							'layanan'		=> implode(", ", $this->input->post('layanan')),
							'dokter'		=> implode(", ", $this->input->post('dokter')),
							'latitude'		=> $this->input->post('latitude'),
							'longitude'		=> $this->input->post('longitude'),
							'foto'			=> $upload_data['uploads']['file_name'],
							'id_kecamatan'	=> $this->input->post('id_kecamatan')

					);
					$this->faskes_model->ubah($data);
					redirect('administrator/klinik');
			}
				$data = array(
						'id_faskes' 	=> $this->input->post('id_faskes'),
						'nama_faskes' 	=> $this->input->post('nama_faskes'),
						'alamat'		=> $this->input->post('alamat'),
						'telpon'		=> $this->input->post('telpon'),
						'jam'			=> $this->input->post('jam'),
						'kategori'		=> "klinik",
						'layanan'		=> implode(", ", $this->input->post('layanan')),
						'dokter'		=> implode(", ", $this->input->post('dokter')),
						'latitude'		=> $this->input->post('latitude'),
						'longitude'		=> $this->input->post('longitude'),
						'id_kecamatan'	=> $this->input->post('id_kecamatan')

				);
				$this->faskes_model->ubah($data);
				redirect('administrator/klinik');
		}

				$data = array(
						'title' => 'Tambah Data klinik',
						'isi'	=> 'admin/klinik/ubah',
						'klinik'=> $this->faskes_model->getDetail($where),
						'kecamatan'=> $this->kecamatan_model->getAll()
				);
				$this->load->view('adminTemplate/wrapper', $data, FALSE);		

	}

	
	public function hapus($id_faskes){
		$where = array('id_faskes'=>$id_faskes);
		$this->faskes_model->hapus($where);
		
		redirect('administrator/klinik');
	}
	

}


 ?>

 