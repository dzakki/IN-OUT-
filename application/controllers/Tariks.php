<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tariks extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tarik_model');
		$this->load->model('saldo_model');
	}

	public function index()
	{
		redirect('news');
	}

	public function create()
	{

		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nominal','Nominal','trim|required|min_length[5]');

		if($this->form_validation->run() == FALSE){

		$this->load->view('templates/header');
		$this->load->view('tariks/create');
		$this->load->view('templates/footer');

		}else{
			$this->tarik_model->set_tariks();
			redirect('news');
		}
	}

	public function update($id)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['tariks_item'] = $this->tarik_model->get_tariks_id($id);

		$this->form_validation->set_rules('nominal','Nominal','trim|required|min_length[5]');	
		if($this->form_validation->run() == FALSE){	
			$this->load->view('templates/header');
			$this->load->view('tariks/update', $data);
			$this->load->view('templates/footer');
		}else{
			$this->saldo_model->tambah_saldos($id, $data);
			$this->tarik_model->update_tariks($id);
			redirect('news');
		}
	}

	public function delete($id)
	{
		$data['tariks_item'] = $this->tarik_model->get_tariks_select_id($id);
		$this->saldo_model->tambah_saldos($id, $data);
		$this->tarik_model->del_tariks($id);
		redirect('news');
	}

}
