<?php 

class Kecamatan extends CI_Controller{


	public function __construct(){
		parent::__construct();
		$this->admin_login->cek_login();
	}

	public function index(){
		$data = array(
			'title' => 'Data Kecamatan',
			'isi'	=> 'admin/kecamatan/data',
			'kecamatan'	=> $this->kecamatan_model->getAll()
		);
		$this->load->view('adminTemplate/wrapper', $data, FALSE);
	}

	
	public function tambah(){
		$this->form_validation->set_rules('id_kecamatan', 'id_kecamatan', 'required');
		$this->form_validation->set_rules('nama_kecamatan', 'nama_kecamatan', 'required');
		$this->form_validation->set_rules('luas', 'luas', 'required');
		$this->form_validation->set_rules('jum_penduduk', 'jum_penduduk', 'required');
		$this->form_validation->set_rules('jum_rumkit', 'jum_rumkit', 'required');
		$this->form_validation->set_rules('jum_puskesmas', 'jum_puskesmas', 'required');
		$this->form_validation->set_rules('jum_poskesdes', 'jum_poskesdes', 'required');
		$this->form_validation->set_rules('jum_klinik', 'jum_klinik', 'required');
		$this->form_validation->set_rules('jum_apotik', 'jum_apotik', 'required');


		if($this->form_validation->run() == FALSE ){
			$data = array(
						'title' => 'Tambah Data Kecamatan',
						'isi'	=> 'admin/kecamatan/tambah'
			);
			$this->load->view('adminTemplate/wrapper', $data, FALSE);
		}else{
			$id_kecamatan = $this->input->post('id_kecamatan');
			$nama_kecamatan = $this->input->post('nama_kecamatan');
			$luas = $this->input->post('luas');
			$jum_penduduk = $this->input->post('jum_penduduk');
			$jum_rumkit = $this->input->post('jum_rumkit');
			$jum_puskesmas = $this->input->post('jum_puskesmas');
			$jum_poskesdes = $this->input->post('jum_poskesdes');
			$jum_klinik = $this->input->post('jum_klinik');
			$jum_apotik = $this->input->post('jum_apotik');

			$data = array(
						'id_kecamatan' => $id_kecamatan,
						'nama_kecamatan' => $nama_kecamatan,
						'luas'	=> $luas,
						'jum_penduduk'	=> $jum_penduduk,
						'jum_rumkit'	=> $jum_rumkit,
						'jum_puskesmas'	=> $jum_puskesmas,
						'jum_poskesdes'	=> $jum_poskesdes,
						'jum_klinik'	=> $jum_klinik,
						'jum_apotik'	=> $jum_apotik
			);

			$this->kecamatan_model->tambah($data);
			redirect('administrator/kecamatan');

		}
		
	}
	
	public function ubah($id_kecamatan){
		$where = array('id_kecamatan'=>$id_kecamatan);
		$this->form_validation->set_rules('id_kecamatan', 'id_kecamatan', 'required');
		$this->form_validation->set_rules('nama_kecamatan', 'nama_kecamatan', 'required');
		$this->form_validation->set_rules('luas', 'luas', 'required');
		$this->form_validation->set_rules('jum_penduduk', 'jum_penduduk', 'required');
		$this->form_validation->set_rules('jum_rumkit', 'jum_rumkit', 'required');
		$this->form_validation->set_rules('jum_puskesmas', 'jum_puskesmas', 'required');
		$this->form_validation->set_rules('jum_poskesdes', 'jum_poskesdes', 'required');
		$this->form_validation->set_rules('jum_klinik', 'jum_klinik', 'required');
		$this->form_validation->set_rules('jum_apotik', 'jum_apotik', 'required');


		if($this->form_validation->run() == FALSE ){
			$data = array(
						'title' => 'Update Data Kecamatan',
						'isi'	=> 'admin/kecamatan/ubah',
						'kecamatan'	=> $this->kecamatan_model->getRow($where)
			);
			$this->load->view('adminTemplate/wrapper', $data, FALSE);
		}else{
			$id_kecamatan = $this->input->post('id_kecamatan');
			$nama_kecamatan = $this->input->post('nama_kecamatan');
			$luas = $this->input->post('luas');
			$jum_penduduk = $this->input->post('jum_penduduk');
			$jum_rumkit = $this->input->post('jum_rumkit');
			$jum_puskesmas = $this->input->post('jum_puskesmas');
			$jum_poskesdes = $this->input->post('jum_poskesdes');
			$jum_klinik = $this->input->post('jum_klinik');
			$jum_apotik = $this->input->post('jum_apotik');

			$data = array(
						'id_kecamatan' => $id_kecamatan,
						'nama_kecamatan' => $nama_kecamatan,
						'luas'	=> $luas,
						'jum_penduduk'	=> $jum_penduduk,
						'jum_rumkit'	=> $jum_rumkit,
						'jum_puskesmas'	=> $jum_puskesmas,
						'jum_poskesdes'	=> $jum_poskesdes,
						'jum_klinik'	=> $jum_klinik,
						'jum_apotik'	=> $jum_apotik
			);

			$this->kecamatan_model->ubah($data);
			
			redirect('administrator/kecamatan');

		}
	}

	
	public function hapus($id_kecamatan){
		$where = array('id_kecamatan'=>$id_kecamatan);
		$this->kecamatan_model->hapus($where);
		
		redirect('administrator/kecamatan');
	}

}


 ?>

 