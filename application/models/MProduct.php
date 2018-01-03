<?php
	class MProduct extends MY_Model{
		private $product_id;
		private $product_image;
		private $product_name;
		private $product_description;
		private $product_price;
		private $product_availability;
		private $product_category;
		private $product_created_by;
		private $product_created_on;
		private $product_modified_by;
		private $product_modified_on;
		

    	const DB_TABLE = "product";
    	const DB_TABLE_PK = "product_id";

		public function __construct(){

		}

		public function getProductDetailsById($id)
		{
			$where = array($this::DB_TABLE_PK =>$id);
			$query = $this->read_where($where);
			return $query;
		}

		public function getProductsByCategory($cat){
			$where = array('product_category' => $cat,
						   'product_availability' => 'AVAILABLE'
		                  );
			$query = $this->read_where($where);
			return $query;
		}

		public function getProductsNotInCart($cat, $ordered_id)
		{
			$statement ="product WHERE product.product_id NOT IN (SELECT cart.product_id FROM cart WHERE cart.ordered_id = $ordered_id) AND product.product_category = '$cat'";
			$query = $this->db->get($statement);

			return $query->result();
		}

		public function getProduct_id(){
			return $this->product_id;
		}

		public function setProduct_id($product_id){
			$this->product_id = $product_id;
		}

		public function getProduct_image(){
			return $this->product_image;
		}

		public function setProduct_image($product_image){
			$this->product_image = $product_image;
		}

		public function getProduct_name(){
			return $this->product_name;
		}

		public function setProduct_name($product_name){
			$this->product_name = $product_name;
		}

		public function getProduct_description(){
			return $this->product_description;
		}

		public function setProduct_description($product_description){
			$this->product_description = $product_description;
		}

		public function getProduct_price(){
			return $this->product_price;
		}

		public function setProduct_price($product_price){
			$this->product_price = $product_price;
		}

		public function getProduct_availability(){
			return $this->product_availability;
		}

		public function setProduct_availability($product_availability){
			$this->product_availability = $product_availability;
		}

		public function getProduct_category(){
			return $this->product_category;
		}

		public function setProduct_category($product_category){
			$this->product_category = $product_category;
		}

		public function getProduct_created_by(){
			return $this->product_created_by;
		}

		public function setProduct_created_by($product_created_by){
			$this->product_created_by = $product_created_by;
		}

		public function getProduct_created_on(){
			return $this->product_created_on;
		}

		public function setProduct_created_on($product_created_on){
			$this->product_created_on = $product_created_on;
		}

		public function getProduct_modified_by(){
			return $this->product_modified_by;
		}

		public function setProduct_modified_by($product_modified_by){
			$this->product_modified_by = $product_modified_by;
		}
		
		public function getProduct_modified_on(){
			return $this->product_modified_on;
		}

		public function setProduct_modified_on($product_modified_on){
			$this->product_modified_on = $product_modified_on;
		}
	}
?>
