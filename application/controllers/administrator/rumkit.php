<?php 

class Rumkit extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->admin_login->cek_login();
	}
	
	public function index(){
		$where = "rumkit";
		$data = array(
			'title' => 'Data Rumah Sakit',
			'isi'	=> 'admin/rumkit/data',
			'rumkit'=> $this->faskes_model->getByKategori($where)
		);
		$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}

	public function detail($id_faskes){
		$where = array('id_faskes'=>$id_faskes);
		$data = array(
					'title'	=> 'Detail Rumah Sakit',
					'isi'	=> 'admin/rumkit/detail',
					'rumkit'=> $this->faskes_model->getDetail($where)
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
						'title' => 'Tambah Data Rumah Sakit',
						'error_upload'	=>  $this->upload->display_errors(),
						'isi'	=> 'admin/rumkit/tambah',
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
						'kategori'		=> "rumkit",
						'layanan'		=> implode(", ", $layanan),
						'dokter'		=> implode(", ", $dokter),
						'latitude'		=> $this->input->post('latitude'),
						'longitude'		=> $this->input->post('longitude'),
						'foto'			=> $upload_data['uploads']['file_name'],
						'id_kecamatan'	=> $this->input->post('id_kecamatan')

				);
				$this->faskes_model->tambah($data);
				redirect('administrator/rumkit');
			}
		}
				$data = array(
						'title' => 'Tambah Data Rumah Sakit',
						'isi'	=> 'admin/rumkit/tambah',
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
							'title' => 'Ubah Data Rumah Sakit',
							'error_upload'	=>  $this->upload->display_errors(),
							'isi'	=> 'admin/rumkit/ubah',
							'rumkit'=> $this->faskes_model->getDetail($where),
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
							'kategori'		=> "rumkit",
							'layanan'		=> implode(", ", $this->input->post('layanan')),
							'dokter'		=> implode(", ", $this->input->post('dokter')),
							'latitude'		=> $this->input->post('latitude'),
							'longitude'		=> $this->input->post('longitude'),
							'foto'			=> $upload_data['uploads']['file_name'],
							'id_kecamatan'	=> $this->input->post('id_kecamatan')

					);
					$this->faskes_model->ubah($data);
					redirect('administrator/rumkit');
			}
				$data = array(
						'id_faskes' 	=> $this->input->post('id_faskes'),
						'nama_faskes' 	=> $this->input->post('nama_faskes'),
						'alamat'		=> $this->input->post('alamat'),
						'telpon'		=> $this->input->post('telpon'),
						'jam'			=> $this->input->post('jam'),
						'kategori'		=> "rumkit",
						'layanan'		=> implode(", ", $this->input->post('layanan')),
						'dokter'		=> implode(", ", $this->input->post('dokter')),
						'latitude'		=> $this->input->post('latitude'),
						'longitude'		=> $this->input->post('longitude'),
						'id_kecamatan'	=> $this->input->post('id_kecamatan')

				);
				$this->faskes_model->ubah($data);
				redirect('administrator/rumkit');
		}

				$data = array(
						'title' => 'Tambah Data Rumah Sakit',
						'isi'	=> 'admin/rumkit/ubah',
						'rumkit'=> $this->faskes_model->getDetail($where),
						'kecamatan'=> $this->kecamatan_model->getAll()
				);
				$this->load->view('adminTemplate/wrapper', $data, FALSE);		

	}


	
	/*public function ubah(){
		
		$this->form_validation->set_rules('id_faskes', 'id_faskes', 'required');
		$this->form_validation->set_rules('nama_faskes', 'nama_faskes', 'required');
		$this->form_validation->set_rules('alamat', 'alamat', 'required');
		$this->form_validation->set_rules('telpon', 'telpon', 'required');
		$this->form_validation->set_rules('jam', 'jam', 'required');
		$this->form_validation->set_rules('latitude', 'latitude', 'required');
		$this->form_validation->set_rules('longitude', 'longitude', 'required');
		//$this->form_validation->set_rules('id_kecamatan', 'id_kecamatan', 'required');


		if($this->form_validation->run() == FALSE ){
			$this->ubah_form();
		}else{
			$id_faskes = $this->input->post('id_faskes');
			$nama_faskes = $this->input->post('nama_faskes');
			$alamat = $this->input->post('alamat');
			$telpon = $this->input->post('telpon');
			$jam = $this->input->post('jam');
			$layanan = $this->input->post('layanan');
			$dokter = $this->input->post('dokter');
			$latitude = $this->input->post('latitude');
			$longitude = $this->input->post('longitude');
			$id_kecamatan = $this->input->post('id_kecamatan');
			$foto 	= $_FILES['userfile']['name'];

			if($foto){
				$config['upload_path']		= './template/assets/foto';
				$config['allowed_types']	= 'jpg|png|gif|jpeg';
				$this->load->library('upload', $config);
				if($this->upload->do_upload('userfile')){
					$userfile = $this->upload->data('file_name');
				}else{
					echo "upload Gagal";
				}
			}
			$data = array(
						'id_faskes' 	=> $id_faskes,
						'nama_faskes' 	=> $nama_faskes,
						'alamat'		=> $alamat,
						'telpon'		=> $telpon,
						'jam'			=> $jam,
						'kategori'		=> "rumkit",
						'layanan'		=> implode(", ", $layanan),
						'dokter'		=> implode(", ", $dokter),
						'latitude'		=> $latitude,
						'longitude'		=> $longitude,
						'foto'			=> $userfile,
						'id_kecamatan'	=> $id_kecamatan
			);

			$this->faskes_model->ubah($data);
			redirect('administrator/rumkit');

		}

			
	}*/

	
	public function hapus($id_faskes){
		$where = array('id_faskes'=>$id_faskes);
		$this->faskes_model->hapus($where);
		
		redirect('administrator/rumkit');
	}
	

}


 ?>

 