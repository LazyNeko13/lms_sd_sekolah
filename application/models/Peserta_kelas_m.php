<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Peserta_kelas_m extends MY_Model{

  	protected $_table_name = 'peserta_kelas';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_peserta_kelas($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_peserta_kelas($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_first_peserta_kelas()
	{
		$query = $this->db->get_where('peserta_kelas',['aktif' => 'Y', 'id_sekolah' => $this->session->userdata('LOGIN_SEKOLAH')])->row();
		return $query;
	}
	public function get_peserta_kelas_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_peserta_kelas($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_peserta_kelas($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_peserta_kelas($id){
		return parent::delete($id);
	}

}