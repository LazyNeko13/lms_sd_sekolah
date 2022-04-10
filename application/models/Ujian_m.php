<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Ujian_m extends MY_Model{

  	protected $_table_name = 'ujian';
    protected $_primary_key = 'id_ujian';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_ujian($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_ujian($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_ujian_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_ujian($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_ujian($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_ujian($id){
		return parent::delete($id);
	}

	public function get_where_params($where=null, $select="*", $params=array(), $or_where=false){

		$query = parent::get_where_params($where, $select, $params, $or_where);

		return $query;

	}

}