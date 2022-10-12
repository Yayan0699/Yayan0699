<?php 

class Kecamatan_model extends CI_Model{

	public function getAll(){
		$this->db->select('*');
		$this->db->from('tb_kecamatan');
		return $this->db->get()->result();
	}

	public function getRow($where){
		$this->db->select('*');
		$this->db->from('tb_kecamatan');
		$this->db->where('id_kecamatan',$where['id_kecamatan']);
		return $query = $this->db->get()->result();
		$query = $this->db->get_where($table, $data, $where);
		return $query;
	}

	public function tambah($data){
		$this->db->insert('tb_kecamatan', $data);

		$this->session->set_flashdata('pesan', '
				<div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i> Data berhasil Ditambahkan!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        ');
	}

	public function ubah($data){
		$this->db->where('id_kecamatan', $data['id_kecamatan']);
		$this->db->update('tb_kecamatan', $data);
		$this->session->set_flashdata('pesan', '
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i> Data berhasil diubah!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              ');
	}

	public function hapus($where){
		$this->db->where('id_kecamatan', $where['id_kecamatan']);
		$this->db->delete('tb_kecamatan', $where);
		$this->session->set_flashdata('pesan', '
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-trash me-1"></i> Data berhasil Terhapus!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              ');
	}

	public function countKecamatan(){
		$query = $this->db->query('SELECT * FROM tb_kecamatan');
		$kecamatan = $query->num_rows();
		return $kecamatan;
	}


}

 ?>