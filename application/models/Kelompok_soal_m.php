<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Kelompok_soal_m extends MY_Model{

  	protected $_table_name = 'kelompok_soal';
    protected $_primary_key = 'id_kelompok_soal';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_kelompok_soal($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_kelompok_soal($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_kelompok_soal_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_kelompok_soal($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_kelompok_soal($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_kelompok_soal($id){
		return parent::delete($id);
	}

}