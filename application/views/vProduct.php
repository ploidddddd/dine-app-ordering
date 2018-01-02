<div class='ui grid'>
	<div class='row'>
		<div class='eight wide center aligned middle aligned column'>
			<h1 class='ui middle aligned brown header'>VIEW</h1>
			<div class='ui breadcrumb'>
				<i class='left arrow icon divider'></i>
				<a href='<?php echo site_url()?>/CProduct/viewMenu' class='section'>Back</a>
				
			</div>
		</div>
		<div class='eight wide center aligned middle aligned column'>
			<a href='<?php echo site_url()?>/CProduct/viewCart'><i class='big brown inbox icon cart-icon'></i></a>
		</div>
	</div>


	<!--  END OF MENU AND CART -->

	<!-- CONTENT -->
	<div class='row'>
		<div class='column'></div> 
		<div class='fourteen wide column'>
		<?php if(isset($product)) { ?>
		<?php foreach($product as $prod) {} ?>
			<form class='ui form' method='POST' action='<?php echo site_url()?>/COrderItem/addOrderItem'>
		        <div class='ui centered small card'>       
		            <div class='content'>
		            	<img class='ui fluid image productSmallImage' id='smolimage' src='<?php echo base_url($prod->product_image)?>'>
		            	<div class='ui hidden divider'></div>
		                <div class='header'>
							<?php echo $prod->product_name; ?>
		                </div>
		                <div class='meta'>
							<?php echo $prod->product_description; ?>.
		                </div>
		                <div class='description'>
		                    <p>Price (P): <?php echo $prod->product_price; ?></p>
							<input type='hidden' name='prod_price' value='<?php echo $prod->product_price; ?>'>
		                </div>
		                
		                <div class='ui hidden divider'></div>
		            </div>
		            <div class="ui bottom attached grid">
		            	<div class='row'>
		            		<div class='sixteen wide center aligned middle aligned column'>
			                    <div class='ui small brown icon button' id='minus'>
			                        <i class=' minus icon '></i>
			                    </div>
			                    <div class='ui disabled input ' style='max-width:50px; padding-right:2px;'>
			                        <input style='text-align:center; ' value=0 name='qty' id='qty'>
									<input type='hidden' name='prod_id' value='<?php echo $prod->product_id; ?>'>
			                    </div>
			                    <div class='ui small brown icon button ' id='plus'>
			                        <i class='plus icon '></i>
			                    </div>	
							</div>
		            	</div>
						<div class='row'>
							<div class='sixteen wide center aligned middle aligned column'>
								<button class='ui fluid brown button' type='submit'>Add to cart</button>
							</div>
						</div>
				    </div>
		        </div> <!-- meal card -->

		        
		    </form>
		<?php } ?>
		</div>
		<div class='column'></div>
	</div>
			




</div>



</body>
</html>
<script>
	$(document).ready(function(){
		var value = 0 ;
		$(document).on('click','#plus',function() {
			var get = parseInt($('#qty').val());
      		if (get <= 99) {
        		get += 1;
        		$('#qty').val(get); 
     		}
		});

		$(document).on('click','#minus',function() {
			if($('#qty').val() >= 1){
				var get = $('#qty').val();
				get -= 1;
				$('#qty').val(get); 
			} 
			
		});
	});
</script>