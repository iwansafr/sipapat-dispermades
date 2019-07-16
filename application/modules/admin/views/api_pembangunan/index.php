<?php defined('BASEPATH') OR exit('No direct script access allowed');
$param_name = 'api_pembangunan';
$judul      = '';

if(!empty($navigation['array']['2']))
{
	$param_name = 'api_pembangunan_'.$navigation['array']['2'];
	$judul = 'Bidang '.str_replace('b', '', $navigation['array']['2']);
}
$this->zea->init('param');
$this->zea->setTable('config');
$this->zea->setHeading('Api Pembangunan '.$judul);
$this->zea->setParamName($param_name);
$this->zea->addInput('link', 'text');
$this->zea->setFormName($param_name);
$this->zea->form();