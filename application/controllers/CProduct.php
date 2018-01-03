<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class CProduct extends CI_Controller {

		public function __Construct(){
	      parent::__Construct ();
	      $this->load->helper('url');
		  $this->load->database(); // load database
		  $this->load->library('session');
		  $this->load->model('MProduct');
		  $this->load->model('MCart');
	  	}

		public function index()
		{
			
		}

		function viewProductsInCategory($cat)
		{
			$result = $this->MProduct->getProductsByCategory($cat);
			$data['prod_cat']  = $cat;
			
            $array = array();
			if($result){
				foreach ($result as $value) {
						$arrObj = new stdClass;
						$arrObj->product_id = $value->product_id;
						$arrObj->product_name = $value->product_name;
						$arrObj->product_price = $value->product_price;
						$arrObj->product_image = $value->product_image;
						$arrObj->product_category = $value->product_category;
						$array[] = $arrObj;
				}
			$data['products']  = $array;
			}
			$this->load->view('imports/vHeader');
			$this->load->view('vProducts',$data);

		}

		function viewMenu()
		{
			$this->load->view('imports/vHeader');
			$this->load->view('vMenu');
		}

		function viewProduct($id)
		{
			$data['product'] = null;
			$result = $this->MProduct->getProductDetailsById($id);
			if($result){
				$data['product'] = $result;
			}

			$this->load->view('imports/vHeader');
			$this->load->view('vProduct',$data);
		}

		function viewCart()
		{
			$order_id =  $this->session->userdata['orderingSession']['ordered_id'];
			$result = $this->MCart->getAllOrderProducts($order_id);
			if($result){
				$data['items'] = $result;
			}

			$this->load->view('imports/vHeader');
			$this->load->view('vCart',$data);
		}

		public function updateCart()
		{
			print_r('WP');
			# code...
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