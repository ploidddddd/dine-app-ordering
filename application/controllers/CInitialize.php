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
			$this->load->model('MProduct');
	  	}

		public function index()
		{
			$data['tray'] = null;
			if($this->session->userdata('orderingSession')){
				$order_id =  $this->session->userdata['orderingSession']['ordered_id'];
				$data['tray'] = $this->MProduct->getAllProductsInCart($order_id);
			}
				$this->load->view('imports/vHeader',$data);
				$this->load->view('vHome');
				$this->load->view('imports/vFooter');
		}




	}

?>
