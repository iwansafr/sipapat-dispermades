<?php defined('BASEPATH') OR exit('No direct script access allowed');

// $form = new zea();
$this->zea->init('param');
$this->zea->setTable('config');
$this->zea->setHeading('Api Kepala Desa');
$this->zea->setParamName('api_kep_des');
$this->zea->addInput('link', 'text');
$this->zea->setFormName('api_kep_des');
$this->zea->form();