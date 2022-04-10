<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Materi_m extends MY_Model{

  	protected $_table_name = 'materi';
    protected $_primary_key = 'id_materi';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_materi($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_materi($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_materi_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_materi($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_materi($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_materi($id){
		return parent::delete($id);
	}

}