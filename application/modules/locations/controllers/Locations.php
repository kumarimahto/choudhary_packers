<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Locations extends CI_Controller {

    public function index()
    
    {
        $this->load->view('locations');
    }

    public function city($cityName)
    {
        $data['cityName'] = ucfirst(str_replace('-', ' ', $cityName));
        $this->load->view('city_page', $data);
    }
}