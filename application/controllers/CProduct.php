<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class CProduct extends CI_Controller {

		public function __Construct(){
	      parent::__Construct ();
	      $this->load->helper('url');
	      $this->load->database(); // load database
	      $this->load->model('MProduct');
	  	}

		public function index()
		{
			
		}

		function viewMenu()
		{
			$this->load->view('imports/vHeader');
			$this->load->view('vMenu');
		}

		function viewMeals()
		{
			$this->load->view('imports/vHeader');
			$this->load->view('vMeals');
		}

		function viewDrinks()
		{
			$this->load->view('imports/vHeader');
			$this->load->view('vDrinks');
		}

		function viewDesserts()
		{
			$this->load->view('imports/vHeader');
			$this->load->view('vDesserts');
		}

		function viewExtras()
		{
			$this->load->view('imports/vHeader');
			$this->load->view('vExtras');
		}

		function viewProduct()
		{
			$this->load->view('imports/vHeader');
			$this->load->view('vProduct');
		}

		function viewCart()
		{
			$this->load->view('imports/vHeader');
			$this->load->view('vCart');
		}

		function viewCheckout()
		{
			$this->load->view('imports/vHeader');
			$this->load->view('vCheckout');
		}

		function viewQRCode()
		{
			$this->load->view('imports/vHeader');
			$this->load->view('vQRCode');
		}
	}

?>