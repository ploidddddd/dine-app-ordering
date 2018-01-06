<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class CProduct extends CI_Controller {

		public function __Construct(){
	      parent::__Construct ();
	      $this->load->helper('url');
		  $this->load->database(); // load database
		  $this->load->library('session');
		  $this->load->library('ciqrcode');
		  $this->load->model('MProduct');
		  $this->load->model('MOrdered');
		  $this->load->model('MCart');
	  	}

		public function index()
		{
			
		}

		function viewProductsInCategory($cat)
		{
			$now = new DateTime(NULL, new DateTimeZone('Asia/Manila'));
			if(!$this->session->userdata('orderingSession')){
				$data = array( 'guest_id' => null );
				$guest = $this->MGuest->insert($data);
				if($guest){
					$guest_id = $this->MGuest->db->insert_id();
					$data = array ('ordered_id' => null,
								   'ordered_guest_id' => $guest_id,
								   'ordered_time' => $now->format('Y-m-d H:i:s a')
							  );
					$ordered = $this->MOrdered->insert($data);
					if($ordered){
						$order_id = $this->MGuest->db->insert_id();
						$result = $this->MOrdered->getOrderedDetailsById($order_id);
						$this->createSession($result);
					}
				}
			}

			$cat = urldecode($cat);
			$order_id =  $this->session->userdata['orderingSession']['ordered_id'];
			$result = $this->MProduct->getProductsNotInCart($cat,$order_id);
			$data['prod_cat']  = $cat;
			// print_r($result);
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
			// print_r($this->session->userdata('orderingSession'));
			$this->load->view('imports/vHeader');
			$this->load->view('vProducts',$data);
			$this->load->view('imports/vFooter');

		}

		function viewMenu()
		{
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
			$this->load->view('imports/vFooter');
		}

		public function viewCart()
		{
			$order_id =  $this->session->userdata['orderingSession']['ordered_id'];
			$result = $this->MCart->getAllOrderProducts($order_id);
			$data['items'] = null;
			$data['total'] = 0;
			if($result){
				$data['items'] = $result;
				foreach($result as $res){
					$data['total'] += $res->order_item_subtotal;
				}
			}

			$this->load->view('imports/vHeader');
			$this->load->view('vCart',$data);
			// $this->load->view('imports/vFooter');
		}

		function viewCheckout()
		{
			$order_id =  $this->session->userdata['orderingSession']['ordered_id'];
			$result = $this->MCart->getAllOrderProducts($order_id);
			$data['items'] = null;
			$data['total'] = 0;
			if($result){
				$data['items'] = $result;
				foreach($result as $res){
					$data['total'] += $res->order_item_subtotal;
				}
				$array = array('ordered_total' => $data['total'] );
				$result = $this->MOrdered->update($order_id, $array);
			}
			if($result){
				$this->load->view('imports/vHeader');
				$this->load->view('vCheckout',$data);
				$this->load->view('imports/vFooter');
			}	
			
		}

		function viewQRCode()
		{
			$data['img_url']="";
			$qr_code = rand();
			$params['data'] = $qr_code;
			$params['level'] = 'H';
			$params['size'] = 8;
			$params['savename'] =FCPATH."assets/images/qr_image/".$qr_code.'.png';
			if($this->ciqrcode->generate($params))
			{
				$data['img_url']=$qr_code.'.png';
				$order_id =  $this->session->userdata['orderingSession']['ordered_id'];
				
				$array = array('ordered_qr_code' => $qr_code );
				$result = $this->MOrdered->update($order_id, $array);	
			}
			if($result){
				$this->load->view('vQRCode',$data);
			}
			
		}

		public function createSession($result)
		{
			foreach ($result as $row) {
			$sessionData = array('ordered_guest_id' => $row->ordered_guest_id,
								 'ordered_id' => $row->ordered_id
	                     		);
			$this->session->set_userdata('orderingSession', $sessionData);
			}
		}

 
		public function deleteSession()
		{
			$this->session->unset_userdata('orderingSession');
			redirect('CInitialize');
		}
	}

?>