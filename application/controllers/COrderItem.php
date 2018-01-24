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
			$subtotal = $this->input->post('modprod_price') * $this->input->post('modqty');
			$prod_id = $this->input->post('modprod_id');
			$cat = $this->input->post('modprod_category');
			$data = array('order_item_qty' => $this->input->post('modqty'),
						  'order_item_subtotal' => $subtotal ,
						  'order_item_product_id' => $prod_id,
						  'order_item_ordered_id' => $this->session->userdata['orderingSession']['ordered_id']
						 );

			$result = $this->MOrderItem->insert($data);
			if($result){
				$this->session->set_flashdata('response',"Successfully added product in your tray!");
				redirect('menu/category/'.$cat."/1");
			}
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
					$this->session->set_flashdata('response',"Successfully updated product in your tray!");
					redirect('tray');
				}
			} else {
				$result = $this->MOrderItem->delete($order_item_id);
				if($result){
					$this->session->set_flashdata('response',"Successfully deleted product in your tray!");
					redirect('tray');
				}
			}
		}

		public function removeToCart()
		{
			$order_item_id = $this->input->post('order_item_id');
			$result = $this->MOrderItem->delete($order_item_id);
			if($result){
				$this->session->set_flashdata('response',"Successfully deleted product in your tray!");
				redirect('tray');
			}
		}

	}


?>