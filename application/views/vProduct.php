<div class='pusher'>
	<div class='ui attached segment'>
		<div class='ui hidden segment'></div>
		<div class='ui basic segment'>
	        <h1 class="ui brown dividing header">
	            <!-- <i class="dashboard icon"></i> -->
	            <div class="content">
		            VIEW ITEM
	              <!-- <div class="sub header">Shows the dashboard</div> -->
	            </div>
	        </h1> <!-- header --> 
	    </div> <!-- segment -->
	<form class='ui form' method='POST' action='<?php echo site_url()?>/COrderItem/addOrderItem'>
	    <div class='ui grid'>
	    	<?php if(isset($product)) { ?>
			<?php foreach($product as $prod) {} ?>
				<div class='six wide computer only column'></div>
				<div class='five wide tablet only column'></div>
		    	<div class='sixteen wide mobile four wide computer six wide tablet column'>	
		    		<div class='ui top attached segment'>
		    			<div class='ui grid'>
		    				<div class='fourteen wide column'>
		    					<span style='font-family: "Roboto"; color: black; font-size: 1.2em;'>
			    						<?php echo $prod->product_name; ?>
			    					</span>
		    				</div>
		    			</div>
		    		</div>
	    			<div class='ui attached segment'>
		    			<div class='ui grid'>
		    				<div class='sixteen wide center aligned middle aligned column'>
		    					<img class='ui centered small image' src='<?php echo base_url($prod->product_image)?>'>
		    				</div>
		    				<div class='sixteen wide column' style='line-height: 1.8em;'>
		    					<span style='font-size: 1.2em; font-family: "Roboto Thin"; font-style: italic;'><?php echo $prod->product_description; ?></span><br>
		    					<span style='font-family: "Courier New"; color: black; font-size: 1.4em;'>
		    						P <?php echo $prod->product_price; ?>		
		    					</span><br>
		    					<center>
									<input type='hidden' value='<?php echo $prod->product_price; ?>' name='prod_price'>
									
									<div class='ui  basic left attached icon button minus' id='minus'>
										<i class=' minus icon '></i>
									</div>
									
				                    <div class='ui disabled input' style='max-width: 50px;'>
				                        <input style='text-align:center; '  value='0' id='qty' name='qty'>
				                        <input type='hidden' name='prod_id' value='<?php echo $prod->product_id; ?>'>
				                    </div>
				                    
				                    <div class='ui basic right attached icon button plus' id='plus'>
			                        	<i class='plus icon '></i>
			                    	</div>
			                   </center>
		    				</div>
		    			</div>
	    			</div>
		    	</div>
		    	<div class='five wide tablet only column'></div>
		    	<div class='six wide computer tablet only column'></div>
		    <?php } ?>
	    </div>
	</div>
	<div class='ui bottom attached segment'>
    	<div class='ui grid'>
    		<div class='row'>
    			<div class='six wide computer tablet only column'></div>
	    		<div class='eight wide mobile only column'>
	    		</div>
	    		<div class='eight wide mobile four wide computer four wide tablet column'>
	    			<button style='background: #800000; color: white;' class='ui circular fluid button disabled' type='submit' id='cButton'><i class='plus icon'></i>Add to cart</button>
	    		</div></form>
	    		<div class='six wide computer tablet only column'></div>
	    	</div>
    	</div>
    </div>
</div>




</body>
</html>
<script>
	$(document).ready(function(){
		var value = 0 ;

	
		// if($('#qty').val() == 0){
		// 	$("#cButton").addClass("disabled");
		// } else {
		// 	$("#cButton").removeClass("disabled");
		// }

		


		$(document).on('click','#plus',function() {
			var get = parseInt($('#qty').val());
      		if (get <= 99) {
        		get += 1;
        		$('#qty').val(get); 
				$("#cButton").removeClass("disabled");
     		}
		});

		$(document).on('click','#minus',function() {
			if($('#qty').val() >= 1){
				var get = $('#qty').val();
				get -= 1;
				$('#qty').val(get); 
			} 

			if($('#qty').val() == 0){
				$("#cButton").addClass("disabled");
			}
			
		});

		$(document).on('change','#qty',function() {
			alert();
			$("#cButton").removeClass("disabled");
		});

	});
</script>