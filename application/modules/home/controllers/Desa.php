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
		$data = [];
		$this->home_model->home();
		$this->esg->add_css(base_url().'templates/school/vendor/datatables/dataTables.bootstrap4.min.css');
		$this->esg->add_js(
			[
				base_url().'templates/school/vendor/datatables/jquery.dataTables.min.js',
				base_url().'templates/school/vendor/datatables/dataTables.bootstrap4.min.js',
				base_url().'templates/school/vendor/datatables/datatables-demo.js',
				base_url().'assets/modules/desa/script.js'
			]);
		// $this->esg->add_js(base_url().'templates/school/vendor/datatables/datatables-demo.js');
		// $this->esg->add_js(base_url().'templates/school/vendor/datatables/jquery.dataTables.min.js');
		// $data = $this->sip_dis_model->kepala_desa();
		$this->load->view('index', ['data'=>$data]);
	}

	public function ajax_kep_des()
	{
		$data = $this->sip_dis_model->kepala_desa();
		$output = ['success'=>false];
		if(!empty($data))
		{
			$output['data'] = $data;
			$output['success'] = true;
		}
		output_json($output);
	}

	public function bumdes()
	{
		$data = [];
		$this->home_model->home();
		$this->esg->add_css(base_url().'templates/school/vendor/datatables/dataTables.bootstrap4.min.css');
		$this->esg->add_js(
			[
				base_url().'templates/school/vendor/datatables/jquery.dataTables.min.js',
				base_url().'templates/school/vendor/datatables/dataTables.bootstrap4.min.js',
				base_url().'templates/school/vendor/datatables/datatables-demo.js',
				base_url().'assets/modules/bumdes/script.js'
			]);
		// $this->esg->add_js(base_url().'templates/school/vendor/datatables/datatables-demo.js');
		// $this->esg->add_js(base_url().'templates/school/vendor/datatables/jquery.dataTables.min.js');
		// $data = $this->sip_dis_model->kepala_desa();
		$this->load->view('index', ['data'=>$data]);
	}

	public function ajax_bumdes()
	{
		$data = $this->sip_dis_model->bumdes();
		$output = ['success'=>false];
		if(!empty($data))
		{
			$output['data'] = $data;
			$output['success'] = true;
		}
		output_json($output);
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