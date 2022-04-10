<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Kategori_konten_m extends MY_Model{

  	protected $_table_name = 'kategori_konten';
    protected $_primary_key = 'id_kategori_konten';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_kategori_konten($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_kategori_konten($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_first_kategori_konten()
	{
		$query = $this->db->get_where('kategori_konten',['aktif' => 'Y', 'id_sekolah' => $this->session->userdata($this->config->item('prefix_session').'LOGIN_SEKOLAH')])->row();
		return $query;
	}
	public function get_kategori_konten_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_kategori_konten($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_kategori_konten($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_kategori_konten($id){
		return parent::delete($id);
	}

}