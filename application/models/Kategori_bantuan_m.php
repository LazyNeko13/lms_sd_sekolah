<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Kategori_bantuan_m extends MY_Model{

  	protected $_table_name = 'kategori_bantuan';
    protected $_primary_key = 'id_kategori_bantuan';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_kategori_bantuan($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_kategori_bantuan($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_kategori_bantuan_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_kategori_bantuan($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_kategori_bantuan($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_kategori_bantuan($id){
		return parent::delete($id);
	}

}