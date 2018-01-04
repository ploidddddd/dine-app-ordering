<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class COrderItem extends CI_Controller {

		public function __Construct(){
	      parent::__Construct ();
	      $this->load->helper('url');
		  $this->load->database(); // load database
		  $this->load->library('session');
	      $this->load->model('MOrderItem');
	  	}

		public function index()
		{
			
		}

		public function addOrderItem() 
		{
			$subtotal = $this->input->post('prod_price') * $this->input->post('qty');
			$data = array('order_item_qty' => $this->input->post('qty'),
						  'order_item_subtotal' => $subtotal ,
						  'order_item_product_id' => $this->input->post('prod_id'),
						  'order_item_ordered_id' => $this->session->userdata['orderingSession']['ordered_id']
						 );

			$result = $this->MOrderItem->insert($data);
			if($result){
				redirect('CProduct/viewCart');
			}
			# code...
		}

		public function updateCart($order_item_id)
		{
			if($this->input->post('qty'."$order_item_id") > 0){
				$subtotal = $this->input->post('prod_price') * $this->input->post('qty'."$order_item_id");
				$data = array('order_item_qty' => $this->input->post('qty'."$order_item_id"),
						  'order_item_subtotal' => $subtotal
						  );
				$result = $this->MOrderItem->update($order_item_id,$data);
				if($result){
					redirect('CProduct/viewCart');
				}
			} else {
				$result = $this->MOrderItem->delete($order_item_id);
				if($result){
					redirect('CProduct/viewCart');
				}
			}
		}

		public function removeToCart()
		{
			// print_r('deleting..');
			$order_item_id = $this->input->post('order_item_id');
			// print_r($order_item_id);
			$result = $this->MOrderItem->delete($order_item_id);
			if($result){
				redirect('CProduct/viewCart');
			}
		}

	}


?>