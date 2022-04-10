<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Konten_m extends MY_Model{

  	protected $_table_name = 'konten';
    protected $_primary_key = 'id_konten';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_konten($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}

	public function get_konten($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}
	public function get_konten_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function get_where_params($where=null, $select="*", $params=array(), $or_where=false){

		$query = parent::get_where_params($where, $select, $params, $or_where);

		return $query;

	}

	public function insert_konten($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_konten($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_konten($id){
		return parent::delete($id);
	}


	public function get_berita_lengkap($id_sekolah, $order_by, $limit = 'all', $dsas = 'asc', $kecuali = NULL,$kat=NULL,$start = 0)
	{
		$this->db->select('*');
		$this->db->from('konten');
		$this->db->join('kategori_konten','konten.id_kategori_konten = kategori_konten.id_kategori_konten', 'LEFT');
		$this->db->where('id_sekolah',$id_sekolah);
		if ($kat != NULL) {
			$this->db->where('konten.id_kategori_konten',$kat);
		}
		if ($kecuali != NULL) {
			$id_1 = $kecuali[0]->id_konten;
			$id_2 = $kecuali[1]->id_konten;
			$this->db->where('id_konten !=',$id_1);
			$this->db->where('id_konten !=',$id_2);
		}
		$this->db->order_by($order_by,$dsas);
		if ($limit != 'all') {
			$this->db->limit($limit,$start);
		}
		$data = $this->db->get();
		return $data->result();

	}

	public function paling_banyak_dibaca($id_sekolah,$limit,$kat = NULL)
	{
		$this->db->select('*');
		$this->db->from($this->_table_name);
		$this->db->join('kategori_konten','kategori_konten.id_kategori_konten = konten.id_kategori_konten','LEFT');
		$this->db->where('id_sekolah',$id_sekolah);
		if ($kat != NULL) {
			$this->db->where('konten.id_kategori_konten',$kat);
		}
		$this->db->order_by('jumlah_dibaca','DESC');
		$this->db->limit($limit);
		$data = $this->db->get();

		return $data->result();
	}
	public function get_konten_order_by($where, $select="*",$limit = 5,$kecuali = NULL)
	{
		$this->db->select($select);
		$this->db->from($this->_table_name);
		$this->db->join('kategori_konten','kategori_konten.id_kategori_konten = konten.id_kategori_konten','LEFT');
		foreach ($where as $field => $value) {
			$this->db->where($field,$value);
		}
		if ($kecuali != NULL) {
			$this->db->where('id_konten !=',$kecuali[0]);
			$this->db->where('id_konten !=',$kecuali[1]);
		}
		$this->db->order_by('tanggal','DESC');
		$this->db->limit($limit);
		$data = $this->db->get();
		if ($data->num_rows() > 0) {
			return $data->result();
		}else{
			return FALSE;
		}
	}

}