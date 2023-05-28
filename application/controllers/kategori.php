<?php

class Kategori extends CI_Controller{
    public function kaos(){
        $data['kaos']= $this->model_kategori->data_kaos()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('kaos',$data);
        $this->load->view('templates/footer');
    }
    public function softcase(){
        $data['softcase']= $this->model_kategori->data_softcase()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('softcase',$data);
        $this->load->view('templates/footer');
    }
    public function sticker(){
        $data['sticker']= $this->model_kategori->data_sticker()->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('sticker',$data);
        $this->load->view('templates/footer');
    }
}