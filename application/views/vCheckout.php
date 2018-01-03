<div class='ui grid'>
	<div class='row'>
		<div class='column'></div>
		<div class='fourteen wide column'>
			<h1 class='ui middle aligned brown header'>CHECKOUT</h1>
			<div class='ui breadcrumb'>
				<i class='left arrow icon divider'></i>
				<a href='<?php echo site_url()?>/CProduct/viewCart' class='section'>Back to cart</a>
			</div>
		</div>
		<div class='column'></div>
	</div>


	<!--  END OF MENU AND CART -->

	<!-- CONTENT -->
	<div class='row'>
		<div class='column'></div> 
		<div class='fourteen wide column'>
			<form class='ui form'>
				<div class='ui four stackable cards'>
				<?php if(isset($items)) { ?>
				<?php foreach($items as $prod){ ?>
			        <div class='ui centered small card'>       
			            <div class='content'>
			                <div class='header'>
							<?php echo $prod->product_name; ?>
			                </div>
			                <div class='description'>
	                    		<p>
	                    			Price (P): <?php echo $prod->product_price; ?> <br>
	                    			Qty: <?php echo $prod->order_item_qty; ?> <br>
	                    			<strong>Subtotal (P): <?php echo $prod->order_item_subtotal; ?></strong>
	                    		</p>

	                    		<div class='ui hidden divider'></div>
			                </div>
			                
			                <div class='ui hidden divider'></div>
			            </div>
			            <div class='ui hidden divider'></div>
			        </div> <!-- meal card -->
			        
					<?php } ?>
				<?php } ?>

			    </div> <!--three cards -->

			    
			</form>
			
		</div>
		<div class='column'></div>
	</div>

	<div class='row'>
		<div class='thirteen wide computer eight wide mobile tablet column'></div>
		<div class='three wide computer eight wide center mobile tablet aligned middle aligned column'>
			<div class='description'>
				<?php if (isset($total)) {?>
		    		<p>TOTAL (P): <?php echo $total; ?></p>
				<?php } ?>
		    </div>
		</div>
	</div> 
	<div class='row'>
		<div class='column'></div>
		<div class='ten wide computer six wide mobile tablet column'></div>
		<div class='four wide computer eight wide mobile tablet column'>
			<a href='<?php echo site_url()?>/CProduct/viewQRCode'><button class='ui fluid brown button'><i class='check icon'></i>Order</button></a>
		</div>
		<div class='column'></div>
	</div>


</div>



</body>
</html>