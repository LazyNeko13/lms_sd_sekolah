<?php if(!defined('BASEPATH')) exit('No direct script allowed');

class Surat_ijin_m extends MY_Model{

  	protected $_table_name = 'surat_ijin';
    protected $_primary_key = 'id_surat_ijin';
    
    public function __construct() 
	{
		parent::__construct();
	}

	public function get_single_surat($array=NULL){
		$query = parent::get_single($array);
		return $query;
	}
    
	public function get_surat($array=NULL, $limit=20, $start=0){
		$query = parent::get_order_by($array, $limit, $start);
		return $query;
	}

	public function get_surat_all($array=NULL){
		$query = parent::get_all($array);
		return $query;
	}

	public function insert_surat($array){
		$id=parent::insert($array);
		return $id;
	}

	public function update_surat($data, $id=NULL){
		$res = parent::update($data, $id);
		return $res;

	}

	public function delete_surat($id){
		return parent::delete($id);
	}

	public function get_all_surat($id_sekolah)
	{
		$query="SELECT a.id_surat_ijin,a.tipe,b.nama as nama_siswa,d.nama as nama_kelas,
            a.berlaku_mulai,a.berlaku_sampai
			FROM surat_ijin a inner JOIN siswa b ON b.id_siswa = a.id_siswa
			inner JOIN peserta_kelas c ON c.id_siswa = b.id_siswa 
			inner JOIN kelas d ON d.id_kelas = c.id_kelas 
            where d.id_sekolah = '".$id_sekolah."'
			order by a.berlaku_sampai desc";
		$data = $this->db->query($query);
		return $data->result();
	}
}