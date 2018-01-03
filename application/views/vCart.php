<div class='ui grid'>
	<div class='row'>
		<div class='column'></div>
		<div class='fourteen wide column'>
			<h1 class='ui middle aligned brown header'>CART</h1>
			<div class='ui breadcrumb'>
				<i class='left arrow icon divider'></i>
				<a href='<?php echo site_url()?>/CProduct/viewMenu?>' class='section'>Back to menu</a>
			</div>
		</div>
		<div class='column'></div>
	</div>


	<!--  END OF MENU AND CART -->

	<!-- CONTENT -->
	<div class='column'></div> 
	<div class='fourteen wide column'>
		<form class='ui form'>
			<div class='ui four stackable cards'>
				<?php if(isset($items)) { ?>
				<?php foreach($items as $prod){ ?>
		        <div class='ui centered card'>       
		            <div class='content'>
		            	<center><img class='ui small image' src='<?php echo base_url($prod->product_image)?>'></center>
		            	<div class='ui hidden divider'></div>
		                <div class='header'>
							<?php echo $prod->product_name; ?>
		                </div>
		                <div class='meta'>
							<?php echo $prod->product_description; ?>
		                </div>
		                <div class='description'>
                    		<p>Price (P): <?php echo $prod->product_price; ?></p>
                    		<p>Qty: <?php echo $prod->order_item_qty; ?></p>
		                    <p><strong>Subtotal (P): <?php echo $prod->order_item_subtotal; ?></strong></p>
                    		<div class='ui hidden divider'></div>
		                </div>
		                <div class='ui hidden divider'></div>
		            </div>
		            <div class="extra content">
						<div class='ui hidden divider'></div>
						<div class='ui hidden divider'></div>
		            	<form class='' method='POST' action='<?php echo site_url()?>/CProduct/updateCart'>
			                <center>
								<div class='ui small brown icon button minus' id='minus' data-id='<?php echo $prod->product_id; ?>'>
									<i class=' minus icon '></i>
								</div>
			                    <div class='ui disabled input ' style='max-width:50px; padding-right:2px;'>
			                        <input style='text-align:center; ' value='<?php echo $prod->order_item_qty; ?>' id='qty<?php echo $prod->product_id; ?>'>
			                    </div>
			                    <div class='ui small brown icon button plus' id='plus' data-id='<?php echo $prod->product_id; ?>'>
		                        	<i class='plus icon '></i>
		                    	</div>
							</center>
							<div class='ui hidden divider'></div>
						  	<div class="ui two buttons">
						    	<button class="ui basic black labeled icon button"><i class='remove icon'></i>Remove</button>
						    	<button class="ui basic brown labeled icon button" type='submit'><i class='pencil icon'></i>Update</button>
						  	</div>

					</div>
		        </div> <!-- meal card -->
		        <?php } ?>
				<?php } ?>
		    </div> <!--three cards -->
		</form> 
	</div>
	<div class='column'></div>

	<div class='row'>
		<div class='thirteen wide computer eight wide mobile tablet column'></div>
		<div class='three wide computer eight wide center mobile tablet aligned middle aligned column'>
			<div class='description'>
		    	<p>TOTAL (P): 210.00</p>
		    </div>
		</div>
	</div> 
	<div class='row'>
		<div class='column'></div>
		<div class='ten wide computer six wide mobile tablet column'></div>
		<div class='four wide computer eight wide mobile tablet column'>
			<a href='<?php echo site_url()?>/CProduct/viewCheckout?>'><button class='ui fluid brown button'><i class='check icon'></i>Proceed to checkout</button></a>
		</div>
		<div class='column'></div>
	</div>




</div>
</body>
</html>
<script>
	$(document).ready(function(){
		var value = 0 ;
		$(document).on('click','.plus',function() {
			var id = $(this).data("id");
			var get = parseInt($('#qty'+id).val());
      		if (get <= 99) {
        		get += 1;
        		$('#qty'+id).val(get); 
     		}
		});

		$(document).on('click','.minus',function() {
			var id = $(this).data("id");
			if($('#qty'+id).val() >= 1){
				var get = $('#qty'+id).val();
				get -= 1;
				$('#qty'+id).val(get); 
			} 
			
		});
	});
</script>