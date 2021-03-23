<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}
 
	public function index()
	{
		$this->load->view('home');
	}
 
}
