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
			// $this->deleteSession();
			// print_r($this->session->userdata('orderingSession'));
			// $this->load->view('imports/vHeader');
			$this->load->view('vMenu');
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
