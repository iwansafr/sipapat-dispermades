<?php defined('BASEPATH') OR exit('No direct script access allowed');
// $form = new zea();
$this->zea->init('param');
$this->zea->setTable('config');
$this->zea->setHeading('Api Pembangunan');
$this->zea->setParamName('api_pembangunan');
$this->zea->addInput('link', 'text');
$this->zea->setFormName('api_pembangunan');
$this->zea->form();