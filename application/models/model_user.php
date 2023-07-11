<?php

class Model_user extends CI_Model{
	public function tampil_user(){
		return $this->db->get('tbl_user');
	}

  public function tambah_user($data,$table){
		$this->db->insert($table,$data);
	}

  public function edit_user($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_user($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function hapus_user($where,$table){
	  $this->db->where($where);
		$this->db->delete($table);
	}

	public function find($id)
	{
		$result = $this->db->where('id', $id)
							->limit(1)
							->get('tbl_user');
		if ($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}
	}
	public function detail_user($id)
	{
		$result = $this->db->where('id',$id)->get('tbl_user');
		if ($result->num_rows() > 0){
			return $result->result();
		}else {
			return false;
		}
	}
}
