<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Desa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('sip_dis_model');
		$this->load->helper('content');
		$this->load->library('esg');
	}
	public function index()
	{
		$this->home_model->home();
		$this->load->view('index');
	}

	public function kep_des()
	{
		$this->load->view('index', ['data'=>$this->sip_dis_model->kepala_desa()]);
	}

	public function tanpa_perangkat()
	{
		$this->home_model->home();
		$this->sip_dis_model->tanpa_perangkat();
		$uri['string'] = $this->uri->uri_string();
		$uri['array'] = ['Desa yang belum mengisi data perangkat','total'];
		$this->esg->set_esg('navigation',$uri);
		$this->load->view('index');
	}
	public function tanpa_perangkat_table()
	{
		$this->home_model->home();
		$this->sip_dis_model->tanpa_perangkat();
		$uri['string'] = $this->uri->uri_string();
		$uri['array'] = ['Desa yang belum mengisi data perangkat','total'];
		$this->esg->set_esg('navigation',$uri);
		$this->load->view('index');
	}
	public function tanpa_perangkat_complete()
	{
		$this->home_model->home();
		$this->sip_dis_model->tanpa_perangkat();
		$uri['string'] = $this->uri->uri_string();
		$uri['array'] = ['Desa yang belum mengisi data perangkat','total'];
		$this->esg->set_esg('navigation',$uri);
		$this->load->view('index');
	}
}