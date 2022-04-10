<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Pengumuman_m extends MY_Model{

  	protected $_table_name = 'pengumuman';
    protected $_primary_key = 'id_pengumuman';
    protected $_order_by = 'id_pengumuman';
	protected $_ascdesc = 'desc';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_pengumuman($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_pengumuman($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_pengumuman_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_pengumuman($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_pengumuman($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_pengumuman($id){
		return parent::delete($id);
	}

	public function get_pengumuman_order_by($id_sekolah, $order_by = 'id_pengumuman', $asds = 'asc', $limit = 5, $start = 0,$update=NULL)
	{
		$this->db->select('*');
		$this->db->from('pengumuman');
		$this->db->where('id_sekolah',$id_sekolah);
		if ($update != NULL) {
			$this->db->where('tanggal_mulai <= ',date('Y-m-d'));
			$this->db->where('tanggal_akhir >= ',date('Y-m-d'));
		}
		$this->db->order_by($order_by,$asds);
		$this->db->limit($limit,$start);
		$data = $this->db->get();
		return $data->result();
	}

}