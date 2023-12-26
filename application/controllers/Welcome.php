<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }

	 
    public function index()
	{
        $this->load->view('_partials/frontend_header');
        $this->load->view('welcome_message');
        $this->load->view('_partials/frontend_footer');
    }
 
	public function profil()
	{
        $this->load->view('_partials/frontend_header');
        $this->load->view('profil');
        $this->load->view('_partials/frontend_footer');
    }
 
    public function about()
	{
        $this->load->view('_partials/frontend_header');
        $this->load->view('about');
        $this->load->view('_partials/frontend_footer');
    }
}
