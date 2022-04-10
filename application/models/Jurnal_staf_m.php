<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Jurnal_staf_m extends MY_Model{

  	protected $_table_name = 'jurnal_staf';
    protected $_primary_key = 'id_jurnal_staf';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_jurnal_staf($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_jurnal_staf($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_jurnal_staf_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_jurnal_staf($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_jurnal_staf($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_jurnal_staf($id){
		return parent::delete($id);
	}

}