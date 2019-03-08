<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->model('tarik_model');
        $this->load->model('saldo_model');
    }

	public function index()
	{   
        $data['news'] = $this->news_model->get_news();
        $data['news_count'] = $this->news_model->get_news_count();
        $data['news_tanggal'] = $this->news_model->get_news_date();
        $data['tarik'] = $this->tarik_model->get_tariks();
        $data['tarik_count'] = $this->tarik_model->get_tariks_count();
        $data['saldo'] = $this->saldo_model->get_saldos();
        $this->load->view('templates/header');
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }


    public function create()
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $this->form_validation->set_rules('saldo','Saldo','required|min_length[5]');
       
        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('news/create');
            $this->load->view('templates/footer');
        }else{
            $this->news_model->set_news();
            redirect('news');
        }
     
    }

    public function update($id){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['news_item'] = $this->news_model->get_news_id($id);
        $this->form_validation->set_rules('saldo','Saldo','required|min_length[5]');
        if($this->form_validation->run() === FALSE){
            
            $this->load->view('templates/header');
            $this->load->view('news/update',$data);
            $this->load->view('templates/footer');
        }else{
            $this->saldo_model->hapus_saldos($id, $data);
            
            $this->news_model->update_news($id);
            redirect('news');
        }

    }

    public function delete($id)
    {
        $data['news_item'] = $this->news_model->get_news_select_id($id);
        $this->saldo_model->hapus_saldos($id, $data);
        $this->news_model->del_news($id);
        redirect('news');
    }

}
