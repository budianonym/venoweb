<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Careers extends CI_Controller {


	public function index()
	{
		$data['judul'] = __CLASS__;
		$this->load->view('template/header');
		$this->slice->view(strtolower(__CLASS__), $data);
		$this->load->view('template/footer');
	}
}
