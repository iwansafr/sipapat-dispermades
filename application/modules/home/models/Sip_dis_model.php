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
		$potensi_url = $this->esg->get_config('api_potensi')['link'];
		$perangkat_url = $this->esg->get_config('api_perangkat')['link'];
		$pembangunan_url = $this->esg->get_config('api_pembangunan')['link'];
		if(!empty($potensi_url))
		{
			$potensi = file_get_contents($potensi_url);
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
		}
		if(!empty($perangkat_url))
		{
			$perangkat = file_get_contents($perangkat_url);
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
		}
		if(!empty($pembangunan_url))
		{
			$pembangunan = file_get_contents($pembangunan_url);
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

}