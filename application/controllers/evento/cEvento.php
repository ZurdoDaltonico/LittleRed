<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cEvento extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('evento/vEvento.php');
	}

	/*
	public function guardar () {
		$this->input->p


	}
	*/
}
