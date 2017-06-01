<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->library('googlemaps');

		$config['center'] = '-8.176607, 114.357915';
		$config['zoom'] = '17';
		$this->googlemaps->initialize($config);

		$marker = array();
		$marker['position'] = '-8.176607, 114.357915';
		$marker['infowindow_content'] = '1 - Hello World!';
		$marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
		$this->googlemaps->add_marker($marker);

		$data['map'] = $this->googlemaps->create_map();

		$this->load->view('view_home', $data);
	}
}
