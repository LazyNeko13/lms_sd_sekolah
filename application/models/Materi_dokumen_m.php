<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Materi_dokumen_m extends MY_Model{

  	protected $_table_name = 'materi_dokumen';
    protected $_primary_key = 'id_materi_dokumen';
    protected $_order_by = 'id_materi_dokumen';
    protected $_ascdesc = 'DESC';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_materi_dokumen($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_materi_dokumen($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_materi_dokumen_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_materi_dokumen($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_materi_dokumen($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_materi_dokumen($id){
		return parent::delete($id);
	}

}