<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pembangunan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('sip_dis_model');
		$this->load->library('esg');
	}
	public function index()
	{
		$this->home_model->home();
		$this->sip_dis_model->pembangunan();
		$this->load->view('index');
	}
	public function b1()
	{
		$this->load->view('index');
	}
}