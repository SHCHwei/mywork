<?php

class Stack extends CI_Controller {
	public $Rate_data = '';
	public function index()
	{
		$this->load->view('basicLay/header');
		$this->load->view('basicLay/navsider');
		$this->load->view('HomePage');
		$this->load->view('basicLay/footer');

	}

	public function exchange_rate(){

		$curl_handle = curl_init();
		curl_setopt($curl_handle,CURLOPT_URL,"http://tw.rter.info/capi.php");
		curl_setopt($curl_handle,CURLOPT_CONNECTTIMEOUT,2);
		curl_setopt($curl_handle,CURLOPT_RETURNTRANSFER,1);
		$buffer = curl_exec($curl_handle);
		curl_close($curl_handle);

		if( !empty($buffer) ){
			$this -> Rate_data = json_decode($buffer,true);//explode(" ",$buffer);
		}

		$data["Rate"] = $this->Rate_data;

		$this->load->view('basicLay/header');
		$this->load->view('basicLay/navsider');
		$this->load->view('Rate',$data);
		$this->load->view('basicLay/footer');

	}


}
