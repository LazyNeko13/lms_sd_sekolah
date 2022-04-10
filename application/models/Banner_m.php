<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Banner_m extends MY_Model{

  	protected $_table_name = 'banner';
    protected $_primary_key = 'id_banner';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_banner($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_banner($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_first_banner($id_sekolah)
	{
		$query = $this->db->get_where('banner',['aktif' => 'Y', 'id_sekolah' => $id_sekolah])->row();
		return $query;
	}
	public function get_banner_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_banner($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_banner($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_banner($id){
		return parent::delete($id);
	}

}