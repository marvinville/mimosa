<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->navData = '';
		$this->data['nav'] = $this->load->view('template/nav', $this->navData, TRUE);

		$this->load->model('Devices_model');
	}

	public function index()
	{
		$this->data['devices'] = $this->Devices_model->getDevices();

		$this->load->view('template/header',$this->data);
		$this->load->view('home/index');
		$this->load->view('template/footer');
	}
}