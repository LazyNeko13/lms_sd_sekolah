<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Bab_m extends MY_Model{

  	protected $_table_name = 'bab';
    protected $_primary_key = 'id_bab';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_bab($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_bab($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_id_bab($array=NULL)
	{
		$this->db->select($this->_primary_key);
		$this->db->from($this->_table_name);
		if (is_array($array)) {
			foreach ($array as $row => $value) {
				$this->db->where($row,$value);
			}
		}
		$data = $this->db->get()->result_array();
		return $data;
	}
	public function get_bab_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_bab($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_bab($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_bab($id){
		return parent::delete($id);
	}

}