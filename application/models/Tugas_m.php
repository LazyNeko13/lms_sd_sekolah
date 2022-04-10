<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Tugas_m extends MY_Model{

  	protected $_table_name = 'tugas';
    protected $_primary_key = 'id_tugas';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_tugas($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_tugas($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_tugas_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_tugas($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_tugas($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_tugas($id){
		return parent::delete($id);
	}

}