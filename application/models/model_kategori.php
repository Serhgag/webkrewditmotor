<?php

class Model_kategori extends CI_Model
{
	public function data_sport()
	{
		return $this->db->get_where("tbl_produk", array('kategori' => 'Sport'));
	}

	public function data_bebek()
	{
		return $this->db->get_where("tbl_produk", array('kategori' => 'Bebek'));
	}
	public function data_metik()
	{
		return $this->db->get_where("tbl_produk", array('kategori' => 'Metik'));
	}
}
