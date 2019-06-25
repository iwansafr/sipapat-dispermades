<?php defined('BASEPATH') OR exit('No direct script access allowed');
// $form = new zea();
$this->zea->init('param');
$this->zea->setTable('config');
$this->zea->setHeading('Api Potensi');
$this->zea->setParamName('api_potensi');
$this->zea->addInput('link', 'text');
$this->zea->setFormName('api_potensi');
$this->zea->form();