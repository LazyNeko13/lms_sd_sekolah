<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Waktu_m extends MY_Model{

  	protected $_table_name = 'waktu';
    protected $_primary_key = 'id_waktu';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_waktu($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_waktu($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_waktu_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_waktu($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_waktu($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_waktu($id){
		return parent::delete($id);
	}

}