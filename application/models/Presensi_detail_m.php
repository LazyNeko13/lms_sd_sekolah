<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Presensi_detail_m extends MY_Model{

  	protected $_table_name = 'presensi_detail';
    protected $_primary_key = 'id_presensi_detail';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_presensi_detail($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_presensi_detail($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_presensi_detail_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_presensi_detail($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_presensi_detail($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_presensi_detail($id){
		return parent::delete($id);
	}

}