<?php 

class Faskes_model extends CI_Model{

	public function getAll(){
		$this->db->select('*');
		$this->db->from('tb_faskes');
		return $this->db->get()->result();
	}

	public function getJoin(){
		$this->db->select('*');
		$this->db->from('tb_faskes');
		$this->db->join('tb_kecamatan','tb_kecamatan.id_kecamatan = tb_faskes.id_kecamatan');
		$query = $this->db->get()->result();
		return $query;
	}

	public function getByKategori($where){
		$this->db->select('*');
		$this->db->from('tb_faskes');
		$this->db->where('kategori', $where);
		return $this->db->get()->result();
	}

	public function getDetail($where){
		$this->db->select('*');
		$this->db->from('tb_faskes');
		$this->db->join('tb_kecamatan','tb_kecamatan.id_kecamatan = tb_faskes.id_kecamatan');
		$this->db->where('id_faskes',$where['id_faskes']);
		$query = $this->db->get()->result();
		return $query;
	}

	public function getRow($where){
		$this->db->select('*');
		$this->db->from('tb_faskes');
		$this->db->where('id_faskes',$where['id_faskes']);
		return $query = $this->db->get()->result();
		$query = $this->db->get_where($table, $data, $where);
		return $query;
	}

	public function tambah($data){
		$this->db->insert('tb_faskes', $data);

		$this->session->set_flashdata('pesan', '
				<div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i> Data berhasil Ditambahkan!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        ');
	}


	public function ubah($data){
		$this->db->where('id_faskes', $data['id_faskes']);
		$this->db->update('tb_faskes', $data);

		$this->session->set_flashdata('pesan', '
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i> Data berhasil diubah!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              ');
	}

	public function hapus($where){
		$this->db->where('id_faskes', $where['id_faskes']);
		$this->db->delete('tb_faskes', $where);
		$this->session->set_flashdata('pesan', '
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-trash me-1"></i> Data berhasil Terhapus!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              ');
	}
	
	
	public function countRumkit(){
		$query = $this->db->query('SELECT * FROM tb_faskes WHERE kategori = "rumkit"');
		$rumkit = $query->num_rows();
		return $rumkit;
	}
	
	public function countPuskesmas(){
		$query = $this->db->query('SELECT * FROM tb_faskes WHERE kategori = "puskesmas"');
		$puskesmas = $query->num_rows();
		return $puskesmas;
	}
	public function countPoskesdes(){
		$query = $this->db->query('SELECT * FROM tb_faskes WHERE kategori = "poskesdes"');
		$poskesdes = $query->num_rows();
		return $poskesdes;
	}
	public function countKlinik(){
		$query = $this->db->query('SELECT * FROM tb_faskes WHERE kategori = "klinik"');
		$klinik = $query->num_rows();
		return $klinik;
	}
	public function countApotik(){
		$query = $this->db->query('SELECT * FROM tb_faskes WHERE kategori = "apotik"');
		$apotik = $query->num_rows();
		return $apotik;
	}

	public function search($keyword){
		if(!$keyword){
			return null;
		}else{
		$this->db->select('*');
		$this->db->from('tb_faskes');
		$this->db->join('tb_kecamatan','tb_kecamatan.id_kecamatan = tb_faskes.id_kecamatan');
		$this->db->like('id_faskes',$keyword);
		$this->db->or_like('nama_faskes', $keyword);
		$this->db->or_like('alamat', $keyword);
		$this->db->or_like('telpon', $keyword);
		$this->db->or_like('nama_kecamatan', $keyword);
		$this->db->or_like('jam', $keyword);
		$this->db->or_like('kategori', $keyword);
		$this->db->or_like('layanan', $keyword);
		$this->db->or_like('dokter', $keyword);
		return $this->db->get()->result();
		}
	}

	public function filter_jenis($keyword){
		if(!$keyword){
			return null;
		}else{
		$this->db->select('*');
		$this->db->from('tb_faskes');
		$this->db->join('tb_kecamatan','tb_kecamatan.id_kecamatan = tb_faskes.id_kecamatan');
		$this->db->where('kategori', $keyword);
		return $this->db->get()->result();
		}
	}

	public function filter_kecamatan($keyword){
		if(!$keyword){
			return null;
		}else{
		$this->db->select('*');
		$this->db->from('tb_faskes');
		$this->db->join('tb_kecamatan','tb_kecamatan.id_kecamatan = tb_faskes.id_kecamatan');
		$this->db->where('tb_faskes.id_kecamatan', $keyword);
		return $this->db->get()->result();
		}
	}

	public function filter_layanan($keyword){
		if(!$keyword ){
			return null;
		}else{
		$this->db->select('*');
		$this->db->from('tb_faskes');
		$this->db->join('tb_kecamatan','tb_kecamatan.id_kecamatan = tb_faskes.id_kecamatan');
		$this->db->like('layanan', $keyword);
		return $this->db->get()->result();
		}
	}

	public function filter_dokter($keyword){
		if(!$keyword ){
			return "data tidak ditemukan";
		}else{
		$this->db->select('*');
		$this->db->from('tb_faskes');
		$this->db->join('tb_kecamatan','tb_kecamatan.id_kecamatan = tb_faskes.id_kecamatan');
		$this->db->like('dokter', $keyword);
		return $this->db->get()->result();
		}
	}

	public function getRute($id_faskes){
		if(!$id_faskes ){
			return null;
		}else{
		$this->db->select('*');
		$this->db->from('tb_faskes');
		$this->db->where('id_faskes', $id_faskes);
		return $this->db->get()->result();
		}
	}

	public function getDaftar($limit, $start, $keyword
		= null){

		if($keyword){
			$this->db->like('id_faskes',$keyword);
			$this->db->or_like('nama_faskes', $keyword);
			$this->db->or_like('alamat', $keyword);
			$this->db->or_like('telpon', $keyword);
			
			$this->db->or_like('jam', $keyword);
			$this->db->or_like('kategori', $keyword);
			$this->db->or_like('layanan', $keyword);
			$this->db->or_like('dokter', $keyword);
		}
		$query = $this->db->get('tb_faskes', $limit, $start);
		return $query;
	}

	public function daftarGetRows($keyword){
		$this->db->select('*');
		$this->db->from('tb_faskes');
		$this->db->like('id_faskes',$keyword);
			$this->db->or_like('nama_faskes', $keyword);
			$this->db->or_like('alamat', $keyword);
			$this->db->or_like('telpon', $keyword);
			
			$this->db->or_like('jam', $keyword);
			$this->db->or_like('kategori', $keyword);
			$this->db->or_like('layanan', $keyword);
			$this->db->or_like('dokter', $keyword);
		return $this->db->get()->num_rows();
	}


	public function daftarApotikRows($keyword=null){
		$this->db->select('*');
		$this->db->from('tb_faskes');
		$this->db->where('kategori',"apotik");
		if($keyword){
			$this->db->like('kategori',"apotik");
			$this->db->like('alamat',$keyword);
			$this->db->or_like('nama_faskes', $keyword);
			// $this->db->or_like('alamat', $keyword);
			$this->db->or_like('telpon', $keyword);
			
			$this->db->or_like('jam', $keyword);
			// $this->db->or_like('kategori', $keyword);
			$this->db->or_like('layanan', $keyword);
			$this->db->or_like('dokter', $keyword);
		}
		return $this->db->get()->num_rows();
	}

	public function getApotik($limit, $start, $keyword=null){
		$this->db->where('kategori',"apotik");
		if($keyword){
			$this->db->like('kategori',"apotik");
			$this->db->like('alamat',$keyword);
			$this->db->or_like('nama_faskes', $keyword);
			// $this->db->or_like('alamat', $keyword);
			$this->db->or_like('telpon', $keyword);
			
			$this->db->or_like('jam', $keyword);
			// $this->db->or_like('kategori', $keyword);
			$this->db->or_like('layanan', $keyword);
			$this->db->or_like('dokter', $keyword);
		}
		
		$query = $this->db->get('tb_faskes', $limit, $start);
		return $query;
	}


}

 ?>