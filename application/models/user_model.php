<?php 

class user_model extends CI_Model{

	public function getAll(){
		$this->db->select('*');
		$this->db->from('tb_admin');
		return $this->db->get()->result();
	}

	public function getRow($where){
		$this->db->select('*');
		$this->db->from('tb_admin');
		$this->db->where('id_admin',$where['id_admin']);
		return $query = $this->db->get()->result();
		$query = $this->db->get_where($table, $data, $where);
		return $query;
	}

	public function insert($data){
		$this->db->insert('tb_admin', $data);

		$this->session->set_flashdata('pesan', '
				<div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i> Data berhasil Ditambahkan!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
        ');
	}

	public function update($data){
		$this->db->where('id_admin', $data['id_admin']);
		$this->db->update('tb_admin', $data);
		$this->session->set_flashdata('pesan', '
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i> Data berhasil diubah!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              ');
	}

	public function delete($where){
		$this->db->where('id_admin', $where['id_admin']);
		$this->db->delete('tb_admin', $where);
		$this->session->set_flashdata('pesan', '
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-trash me-1"></i> Data berhasil Terhapus!!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              ');
	}

	public function countRows(){
		$query = $this->db->count_all('tb_admin');
		return $query;
	}


}

 ?>