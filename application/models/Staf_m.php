<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Staf_m extends MY_Model{

  	protected $_table_name = 'staf';
    protected $_primary_key = 'id_staf';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_staf($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}
	public function hash_my_password($kode,$nip,$password)
	{
		$data = hash('sha256', $kode.$nip.$password);
		return $data;
	}
	public function get_staf($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}

	public function get_staf_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_staf($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_staf($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_staf($id){
		return parent::delete($id);
	}

}