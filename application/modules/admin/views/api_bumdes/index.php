<?php defined('BASEPATH') OR exit('No direct script access allowed');
// $form = new zea();
$this->zea->init('param');
$this->zea->setTable('config');
$this->zea->setHeading('Api Bumdes');
$this->zea->setParamName('api_bumdes');
$this->zea->addInput('link', 'text');
$this->zea->setFormName('api_bumdes');
$this->zea->form();