<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Materi_video_m extends MY_Model{

  	protected $_table_name = 'materi_video';
    protected $_primary_key = 'id_materi_video';
    protected $_order_by = 'id_materi_video';
    protected $_ascdesc = 'DESC';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_materi_video($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_materi_video($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_materi_video_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_materi_video($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_materi_video($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_materi_video($id){
		return parent::delete($id);
	}

}