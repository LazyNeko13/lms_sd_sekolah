<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Tagihan_m extends MY_Model{

  	protected $_table_name = 'tagihan';
    protected $_primary_key = 'id_tagihan';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_tagihan($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_tagihan($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_tagihan_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_tagihan($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_tagihan($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_tagihan($id){
		return parent::delete($id);
	}

	public function get_data_tagihan_lengkap($id_sekolah = NULL, $id_siswa = NULL, $id_tagihan = NULL,$filter = NULL)
	{
		$this->db->select('*');
		$this->db->from('tagihan');
		$this->db->join('kategori_biaya', 'tagihan.id_kategori_biaya = kategori_biaya.id_kategori_biaya', 'LEFT');
		$this->db->where('kategori_biaya.id_sekolah',$id_sekolah);
		$this->db->where('tagihan.id_siswa',$id_siswa);
		if ($id_tagihan != NULL) {
			$this->db->where('tagihan.id_tagihan',$id_tagihan);
		}
		if ($filter != NULL) {
			$this->db->where('tagihan.lunas',$filter);
		}
		$this->db->order_by('tagihan.tanggal','DESC');
		$data = $this->db->get();
		if ($data->num_rows() > 0) {
			return $data->result();
		}else{
			return false;
		}
	}

}