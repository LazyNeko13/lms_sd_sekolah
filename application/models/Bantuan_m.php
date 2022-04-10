<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Bantuan_m extends MY_Model{

  	protected $_table_name = 'bantuan';
    protected $_primary_key = 'id_bantuan';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_bantuan($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_bantuan($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_bantuan_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_bantuan($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_bantuan($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_bantuan($id){
		return parent::delete($id);
	}
	public function get_where_params($where=null, $select="*", $params=array(), $or_where=false){

		$query = parent::get_where_params($where, $select, $params, $or_where);

		return $query;

	}
}