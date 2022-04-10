<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Presensi_staf_m extends MY_Model{

  	protected $_table_name = 'presensi_staf';
    protected $_primary_key = 'id_presensi_staf';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_presensi($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}
    
	public function get_presensi($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}

	public function get_presensi_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_presensi($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_presensi($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_presensi($id){
		return parent::delete($id);
	}

}