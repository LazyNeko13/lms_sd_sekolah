<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Guru_pelajaran_m extends MY_Model{

  	protected $_table_name = 'guru_pelajaran';
    protected $_primary_key = 'id_guru_pelajaran';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_guru_pelajaran($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_guru_pelajaran($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_first_guru_pelajaran()
	{
		$query = $this->db->get_where('guru_pelajaran',['aktif' => 'Y', 'id_sekolah' => $this->session->userdata('LOGIN_SEKOLAH')])->row();
		return $query;
	}
	public function get_guru_pelajaran_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_guru_pelajaran($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_guru_pelajaran($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_guru_pelajaran($id){
		return parent::delete($id);
	}

	public function get_where_params($where=null, $select="*", $params=array(), $or_where=false){

		$query = parent::get_where_params($where, $select, $params, $or_where);

		return $query;

	}
}