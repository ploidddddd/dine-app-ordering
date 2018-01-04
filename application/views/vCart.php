<div class='pusher'>
	<div class='ui attached segment'>
		<div class='ui hidden segment'></div>
		<div class='ui basic segment'>
	        <h1 class="ui brown dividing header">
	            <!-- <i class="dashboard icon"></i> -->
	            <div class="content">
		            CART
	              <!-- <div class="sub header">Shows the dashboard</div> -->
	            </div>
	        </h1> <!-- header --> 
	    </div> <!-- segment -->

	    <div class='ui centered grid'>
	    	<?php if(isset($items)) { ?>
				<?php foreach($items as $prod){ ?>
		    	<div class='sixteen wide mobile five wide computer eight wide tablet column'>	
		    		<div class='ui top attached segment'>
		    			<div class='ui compact grid'>
		    				<div class='fourteen wide column'>
		    					<span style='font-family: "Roboto"; color: black; font-size: 1.2em;'>
			    						<?php echo $prod->product_name; ?>
			    					</span>
		    				</div>
		    				<div class='two wide column'>
		    					<a class='confirmRemove' style='float: right; cursor: pointer;' data-id='<?php echo  $prod->order_item_id;?>' ><i class='large red remove icon'></i></a>
								
							</div>
		    			</div>
		    		</div>
	    			<div class='ui attached segment'>
		    			<div class='ui grid'>
		    				<div class='seven wide mobile center aligned middle aligned column'>
		    					<img class='ui centered small image' src='<?php echo base_url($prod->product_image)?>'>
		    				</div>
		    				<div class='nine wide mobile column' style='line-height: 1.9em;'>
		    					<span style='font-family: "Courier New"; color: black; font-size: 1.4em;'>
		    						P <?php echo $prod->product_price; ?>		
		    					</span><br>

		    					<span style='font-style: italic; font-family: "Roboto Light"; font-size: 1.2em;'>Quantity: x <?php echo $prod->order_item_qty; ?></span><br>
		    					<span style='font-style: italic; font-family: "Roboto Light"; font-size: 1.2em;'>Subtotal: P<?php echo $prod->order_item_subtotal; ?></span><br>
		    					<center><form class='' id='form' method='POST' action='<?php echo site_url()?>/COrderItem/updateCart/<?php echo  $prod->order_item_id; ?>'>
									<input type='hidden' value='<?php echo $prod->product_price; ?>' name='prod_price'>
								 	
									<button class='ui  basic left attached icon button minus' id='minus' data-id='<?php echo $prod->product_id; ?>'>
										<i class=' minus icon '></i>
									</button>
									<input type='hidden' value='<?php echo $prod->order_item_id; ?>' id='od_id<?php echo $prod->product_id; ?>'>
									
				                    <div class='ui disabled input' style='max-width: 50px;'>
				                        <input style='text-align:center; '  value='<?php echo $prod->order_item_qty; ?>' id='qty' name='qty<?php echo $prod->order_item_id; ?>'>
				                    </div>
				                    
				                    <button class='ui basic right attached icon button plus' id='plus' data-id='<?php echo $prod->product_id; ?>'>
			                        	<i class='plus icon '></i>
			                    	</button>
			                    </form></center>
		    				</div>
		    			</div>
	    			</div>
		    	</div>
		   		<?php } ?>
	    </div>
	</div>
	<div class='ui bottom attached segment'>
    	<div class='ui grid'>
			<div class='six wide computer tablet only column'></div>
    		<div class='eight wide mobile four wide computer four wide tablet center aligned middle aligned column'>
    			<?php if (isset($total)) {?>
			    	<p style='font-size: 1.2em; font-family: "Roboto";'>TOTAL: <span style='font-size: 1.3em; font-family: "Courier New"; font-weight: bold;'>P <?php echo $total; ?></span></p>
				<?php } ?>
    		</div>
    		<div class='six wide computer tablet only column'></div>
    		<div class='six wide computer tablet only column'></div>
    		<div class='eight wide mobile four wide computer four wide tablet column'>
    			<a href='<?php echo site_url()?>/CProduct/viewCheckout'><button style='background: #800000; color: white;' class='ui circular fluid button'><i class='check icon'></i>Checkout</button></a>
    		</div>
    		<div class='six wide computer tablet only column'></div>
    		<div class='computer tablet only column'></div>
    	</div>
    </div>
    <?php 
		}else{
			echo "
				<div class='sixteen wide center aligned middle aligned column'>
					<p style='font-style: italic; font-family: ".'Roboto Light'."; font-size: 1.3em;'><i class='circular info icon' style='color: white; background-color: #800000;'></i>Your cart is empty.</p>
				</div>
				<div class='row'></div>
			";
		} ?>
</div>


<div class='ui mini modal' id='removeItem'>
  <div class='header'>Remove Item </div> 
  <div class='content'>
	<form method='POST' action='<?php echo site_url()?>/COrderItem/removeToCart'>
	<input type='hidden' name='order_item_id' id='order_item_id' value=''>
    <p>Are you sure you want to remove this item?</p>
	
  </div>
  <div class='actions'>
  	<div class='ui gray cancel button'>
  		Cancel
  	</div>
  	<button class='ui cancel inverted button' style='background-color: #800000;' type='submit'>
  		Remove
  	</button>
  </div>
  </form>
</div>

</body>
</html>
<script>
	$(document).ready(function(){
		$('.confirmRemove').click(function(){
			$('#order_item_id').val($(this).data("id"));
			$('#removeItem').modal('show');

		});
		var value = 0 ;
		$(document).on('click','.plus',function() {
			var id = $(this).data("id");
			var get = parseInt($('#qty'+id).val());
      		if (get <= 99) {
        		get += 1;
        		$('#qty'+id).val(get); 	
     		}
		});

		$(document).on('click','.minus',function(e) {
			var id = $(this).data("id");
			if($('#qty'+id).val() > 1){
				var get = $('#qty'+id).val();
				get -= 1;
				$('#qty'+id).val(get); 
			}else{
				$('#order_item_id').val($('#od_id'+id).val());
				// alert($('#order_item_id').val());
				$('#removeItem').modal('show');
				e.preventDefault();
			}
		});

		$('.ui.modal').modal('setting', 'closable', false);
	});
</script>