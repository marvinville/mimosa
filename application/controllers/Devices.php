<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Devices extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->navData = '';
		$this->data['nav'] = $this->load->view('template/nav', $this->navData, TRUE);

        $this->load->model('Devices_model');
        $this->load->model('Logs_model');
	}

	public function view()
	{
        $deviceId = $this->uri->segment(3);

        $this->data['device'] = $this->Devices_model->getDevices($deviceId);
        $this->data['log'] = $this->Logs_model->getLogs($deviceId);

        $this->load->view('template/header',$this->data);
        $this->load->view('devices/view');
		$this->load->view('template/footer');
	}
}