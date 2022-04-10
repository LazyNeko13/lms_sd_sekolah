<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Splash_m extends MY_Model{

  	protected $_table_name = 'splash';
    protected $_primary_key = 'id_splash';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_splash($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_splash($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_first_splash()
	{
		$query = $this->db->get_where('splash',['aktif' => 'Y'])->row();
		return $query;
	}
	public function get_splash_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_splash($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_splash($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_splash($id){
		return parent::delete($id);
	}

}