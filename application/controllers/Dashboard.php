<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	 
    public function index()
	{
        $this->load->view('_partials/backend_header');
        $this->load->view('dashboard/index');
        $this->load->view('_partials/backend_footer');
    }
}
