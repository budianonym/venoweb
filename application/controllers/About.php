<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {


	public function index()
	{
		$data['judul'] = __CLASS__;
		$this->load->view('template/header');
		$this->slice->view(strtolower(__CLASS__), $data);
		$this->load->view('template/footer');
	}

	public function Team()
	{
		$data['judul'] = __FUNCTION__;
		$this->load->view('template/header');
		$this->slice->view(strtolower(__FUNCTION__), $data);
		$this->load->view('template/footer');
	}

	public function About_Us()
	{
		$data['judul'] = str_replace("_"," ",__FUNCTION__);
		$this->load->view('template/header');
		$this->slice->view(strtolower(__FUNCTION__), $data);
		$this->load->view('template/footer');
	}

	public function Contact()
	{
		$data['judul'] = __FUNCTION__;
		$this->load->view('template/header');
		$this->slice->view(strtolower(__FUNCTION__), $data);
		$this->load->view('template/footer');
	}
}
