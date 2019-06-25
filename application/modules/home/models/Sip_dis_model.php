<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Sip_dis_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('esg');
		$this->load->library('ZEA/zea');
		$this->load->model('esg_model');
	}
	
	public function block()
	{
		$base_url = 'http://localhost/sipapat/api/';
		$potensi = file_get_contents($base_url.'potensi');
		if(!empty($potensi))
		{
			$potensi = json_decode($potensi,1);
			$potensi = ['potensi_slider'=>$potensi];
			$home = $this->esg->get_esg('home');
			if(!empty($home))
			{
				$home = array_merge($home, $potensi);
			}else{
				$home = $output;
			}
			$this->esg->set_esg('home', $home);
		}
		$perangkat = file_get_contents($base_url.'perangkat');
		if(!empty($perangkat))
		{
			$perangkat = json_decode($perangkat,1);
			$perangkat = ['perangkat_slider'=>$perangkat];
			$home = $this->esg->get_esg('home');
			if(!empty($home))
			{
				$home = array_merge($home, $perangkat);
			}else{
				$home = $output;
			}
			$this->esg->set_esg('home', $home);
		}
		$pembangunan = file_get_contents($base_url.'pembangunan');
		if(!empty($pembangunan))
		{
			$pembangunan = json_decode($pembangunan,1);
			$pembangunan = ['pembangunan_slider'=>$pembangunan];
			$home = $this->esg->get_esg('home');
			if(!empty($home))
			{
				$home = array_merge($home, $pembangunan);
			}else{
				$home = $output;
			}
			$this->esg->set_esg('home', $home);
		}
	}

}