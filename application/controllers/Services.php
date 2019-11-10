<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {


	public function index()
	{
		$data['judul'] = __CLASS__;
		$this->load->view('template/header');
		$this->slice->view(strtolower(__CLASS__), $data);
		$this->load->view('template/footer');
	}

	public function Webtesting()
	{
		$data['judul'] = 'Web Testing';
		$this->load->view('template/header');
		$this->slice->view(strtolower(__FUNCTION__), $data);
		$this->load->view('template/footer');
	}

	public function Domain()
	{
		if (isset($_POST['domain'])){
			$id = $_POST['domain'];
			function http_request($url){
				// persiapkan curl
				$ch = curl_init(); 

				// set url 
				curl_setopt($ch, CURLOPT_URL, $url);

				// set user agent    
				curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

				// return the transfer as a string 
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

				// $output contains the output string 
				$output = curl_exec($ch); 

				// tutup curl 
				curl_close($ch);      

				// mengembalikan hasil curl
				return $output;
				};

				$profile = json_decode(http_request("https://madchecker.com/domain/api/".$id), TRUE);
				if($profile["data"]["available"]=='true'){
				$data['doma'] =  '<h3 align="center" id="result"><font color="green">'.ucfirst($profile['domain']).' is Available</font></h3>';
				}else{
					$data['doma'] =   '<h3 align="center" id="result"><font color="red">'.ucfirst($profile['domain']).' is Not Available</font></h3>';
				};
						};
		$data['judul'] = __FUNCTION__;
		$this->load->view('template/header');
		$this->slice->view(strtolower(__FUNCTION__), $data);
		$this->load->view('template/footer');
	}

	public function Domainn()
	{
		$data['judul'] = __FUNCTION__;
		$this->load->view('template/header');
		$this->slice->view(strtolower(__FUNCTION__), $data);
		$this->load->view('template/footer');
	}

	public function Webdevelopment()
	{
		$data['judul'] = "Web Development";
		$this->load->view('template/header');
		$this->slice->view('web_development', $data);
		$this->load->view('template/footer');
	}

	public function webappdevelopment()
	{
		$data['judul'] = "Web Application Development";
		$this->load->view('template/header');
		$this->slice->view('app_development', $data);
		$this->load->view('template/footer');
	}

	public function Themes_Development()
	{
		$data['judul'] = str_replace("_"," ",__FUNCTION__);
		$this->load->view('template/header');
		$this->slice->view(strtolower(__FUNCTION__), $data);
		$this->load->view('template/footer');
	}

	public function Plugin_Development()
	{
		$data['judul'] = str_replace("_"," ",__FUNCTION__);
		$this->load->view('template/header');
		$this->slice->view(strtolower(__FUNCTION__), $data);
		$this->load->view('template/footer');
	}

	public function Datascience()
	{
		$data['judul'] = "Data Science";
		$this->load->view('template/header');
		$this->slice->view('data_analysis', $data);
		$this->load->view('template/footer');
	}

	public function Mobile_Development()
	{
		$data['judul'] = str_replace("_"," ",__FUNCTION__);
		$this->load->view('template/header');
		$this->slice->view(strtolower(__FUNCTION__), $data);
		$this->load->view('template/footer');
	}
}
