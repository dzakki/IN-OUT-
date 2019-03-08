<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saldos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('saldo_model');
	}

	public function index()
	{
		redirect('news');
	}

}
