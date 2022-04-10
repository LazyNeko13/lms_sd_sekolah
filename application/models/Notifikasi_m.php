<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Notifikasi_m extends MY_Model{

  	protected $_table_name = 'notifikasi';
    protected $_primary_key = 'id_notifikasi';
    protected $_order_by = 'id_notifikasi';
    protected $_ascdesc = 'ASC';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_notifikasi($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_notifikasi($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_notifikasi_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_notifikasi($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_notifikasi($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_notifikasi($id){
		return parent::delete($id);
	}

	public function get_order_by_notifikasi($select="*",$where=array(),$order_by=array(),$limit = NULL,$start = 0)
	{
		$this->db->select($select);
		$this->db->from($this->_table_name);
		if (isset($where)) {
			foreach ($where as $field => $value) {
				$this->db->where($field,$value);
			}
		}
		if (isset($order_by)) {
			foreach ($order_by as $field => $sort) {
				$this->db->order_by($field,$sort);
			}
		}
		if ($limit) {
			$this->db->limit($limit,$start);
		}
		$data = $this->db->get();
		if ($data->num_rows() > 0 ) {
			return $data->result();
		}else{
			return FALSE;
		}
	}

	public function get_notifikasi_order_id($array=array(),$limit=NULL,$start=0)
	{
		$this->db->select('*');
		$this->db->from($this->_table_name);
		if (isset($array)) {
			foreach ($array as $field => $value) {
				$this->db->where($field,$value);
			}
		}
		$this->db->order_by('id_notifikasi','DESC');
		if ($limit != NULL) {
			$this->db->limit($limit,$start);
		}
		$data = $this->db->get();
		if ($data->num_rows() > 0 ) {
			return $data->result();
		}else{
			return FALSE;
		}
	}

}