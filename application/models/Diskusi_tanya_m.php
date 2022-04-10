<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Diskusi_tanya_m extends MY_Model{

  	protected $_table_name = 'diskusi_tanya';
    protected $_primary_key = 'id_diskusi_tanya';
    protected $_ascdesc = 'DESC';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_diskusi_tanya($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_diskusi_tanya($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_diskusi_tanya_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_diskusi_tanya($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_diskusi_tanya($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_diskusi_tanya($id){
		return parent::delete($id);
	}

	public function get_where_params($where=null, $select="*", $params=array(), $or_where=false){

		$query = parent::get_where_params($where, $select, $params, $or_where);

		return $query;

	}


	public function get_chat($where,$wherein,$limit)
	{
		$this->db->select('*');
		$this->db->from($this->_table_name);
		foreach ($where as $field => $value) {
			$this->db->where($field,$value);
		}
		foreach ($wherein as $field => $value) {
			$this->db->where_in($field,$value);
		}

		$this->db->order_by('last_update','DESC');
		$this->db->limit($limit);
		$data = $this->db->get();
		if ($data->num_rows() > 0) {
			return $data->result();
		}else{
			return FALSE;
		}

	}

}