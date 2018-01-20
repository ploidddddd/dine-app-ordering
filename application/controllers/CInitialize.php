<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class CInitialize extends CI_Controller {
		public function __Construct(){
	      parent::__Construct ();
		  $this->load->helper('url');
		  $this->load->database(); // load database
		  $this->load->library('session');
		  $this->load->model('MGuest');
		  $this->load->model('MOrdered');
	  	}

		public function index()
		{
			$this->load->view('imports/vHeader');
			$this->load->view('vHome');
			$this->load->view('imports/vFooter');
		}

		


	}

?>
