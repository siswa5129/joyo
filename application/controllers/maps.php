<?php

class Maps extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->library('googlemaps');

        $config['center'] = '37.4419, -122.1419';
        $config['zoom'] = '13';
        $this->googlemaps->initialize($config);

        $marker = array();
        $marker['position'] = '37.429, -122.1519';
        $marker['infowindow_content'] = '1 - Hello World!';
        $marker['icon'] = 'http://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=A|9999FF|000000';
        $this->googlemaps->add_marker($marker);

        $data['map'] = $this->googlemaps->create_map();

        $this->load->view('view_home', $data);
    }
}
