<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Api_pembangunan extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->db->cache_off();
		$this->load->model('esg_model');
		$this->load->model('admin_model');
		$this->load->model('config_model');
		$this->load->library('esg');
		$this->load->library('ZEA/zea');
		$this->esg_model->init();
	}
	public function index()
	{
		$this->load->view('index');
	}
	
	public function b1()
	{
		$this->load->view('index');
	}
	public function b2()
	{
		$this->load->view('index');
	}
	public function b3()
	{
		$this->load->view('index');
	}
	public function b4()
	{
		$this->load->view('index');
	}
}