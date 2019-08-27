<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
	function __construct()
	{
        parent::__construct();
        $this->load->model('Drink_model', 'mDrink');
	}

	public function index()
	{
		//$data['get_raw_query'] = $this->mDrink->get_raw_query();
		$data['get_ci_data'] = $this->mDrink->get_ci_data();

		//echo '<pre>';
		//print_r($data);
		//die();

		$this->load->view('welcome_message', $data);
	}
}
