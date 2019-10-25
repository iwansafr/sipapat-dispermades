<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Api_config extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->db->cache_off();
		$this->load->model('esg_model');
		$this->load->model('admin_model');
		$this->load->model('admin_menu_model');
		$this->load->library('esg');
		$this->load->library('ZEA/zea');
		$this->esg_model->init();
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function kep_des()
	{
		$this->load->view('index');
	}

	public function bumdes()
	{
		$this->load->view('index');
	}

}