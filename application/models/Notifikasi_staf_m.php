<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Notifikasi_staf_m extends MY_Model{

  	protected $_table_name = 'notifikasi_staf';
    protected $_primary_key = 'id_notifikasi_staf';
    protected $_order_by = 'id_notifikasi_staf';
    protected $_ascdesc = 'ASC';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_notifikasi_staf($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_notifikasi_staf($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_notifikasi_staf_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_notifikasi_staf($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_notifikasi_staf($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_notifikasi_staf($id){
		return parent::delete($id);
	}


}