<?php  
class Linker{
	var $CI;
    var $base_link = "";
    var $base_url = "";
    public function __construct()
	{
        $this->CI = & get_instance();
        $this->base_link = "https://lmssma.alphatechin.id/data/";
        $this->base_url = base_url();
    }

    public function img_splash($gambar){
        $link = $this->base_link.'splash/'.$gambar;
        return $link;
    }
    public function img_banner($id_sekolah,$gambar){
        $link = $this->base_link.'sekolah_'.$id_sekolah.'/banner/'.$gambar;
        return $link;
    }
}
?>