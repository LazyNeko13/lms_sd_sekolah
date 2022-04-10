<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Tugas_siswa_m extends MY_Model{

  	protected $_table_name = 'tugas_siswa';
    protected $_primary_key = 'id_tugas_siswa';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_tugas_siswa($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_tugas_siswa($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_tugas_siswa_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_tugas_siswa($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_tugas_siswa($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_tugas_siswa($id){
		return parent::delete($id);
	}

}