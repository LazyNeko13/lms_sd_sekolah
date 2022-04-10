<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Diskusi_jawab_m extends MY_Model{

  	protected $_table_name = 'diskusi_jawab';
    protected $_primary_key = 'id_diskusi_jawab';
    protected $_order_by = 'tanggal';
    protected $_ascdesc = 'ASC';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_diskusi_jawab($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_diskusi_jawab($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_diskusi_jawab_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_diskusi_jawab($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_diskusi_jawab($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_diskusi_jawab($id){
		return parent::delete($id);
	}

}