<?php
class Model_kategori extends CI_Model{
    public function data_kaos(){
        return $this->db->get_where("tb_barang",array('kategori'=>'Kaos'));
    }
    public function data_softcase(){
        return $this->db->get_where("tb_barang",array('kategori'=>'Softcase'));
    }
    public function data_sticker(){
        return $this->db->get_where("tb_barang",array('kategori'=>'Sticker'));
    }
}