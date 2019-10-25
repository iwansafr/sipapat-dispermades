<?php defined('BASEPATH') OR exit('No direct script access allowed');

// $form = new zea();
$this->zea->init('param');
$this->zea->setTable('config');
$this->zea->setHeading('Api Bumdes All');
$this->zea->setParamName('api_bumdes_all');
$this->zea->addInput('link', 'text');
$this->zea->setFormName('api_bumdes_all');
$this->zea->form();