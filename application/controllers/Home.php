<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('home-view');
		$this->load->view('template/footer');
		// echo "string";
	}

	public function Terms_of_Use()
	{
		$data['judul'] = str_replace("_"," ",__FUNCTION__);
		$this->load->view('template/header');
		$this->slice->view(strtolower(__FUNCTION__), $data);
		$this->load->view('template/footer');
	}

	public function Privacy_Policy()
	{
		$data['judul'] = str_replace("_"," ",__FUNCTION__);
		$this->load->view('template/header');
		$this->slice->view(strtolower(__FUNCTION__), $data);
		$this->load->view('template/footer');
	}

	public function Start()
	{
		$data['judul'] = str_replace("_"," ",__FUNCTION__);
		$this->load->view('template/header');
		$this->slice->view(strtolower(__FUNCTION__), $data);
		$this->load->view('template/footer');
	}
}
