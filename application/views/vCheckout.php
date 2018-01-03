<div class='pusher'>
	<div class='ui attached segment'>
		<div class='ui hidden segment'></div>
		<div class='ui basic segment'>
	        <h1 class="ui brown dividing header">
	            <!-- <i class="dashboard icon"></i> -->
	            <div class="content">
		            CHECKOUT
	              <!-- <div class="sub header">Shows the dashboard</div> -->
	            </div>
	        </h1> <!-- header --> 
	    </div> <!-- segment -->

	    <div class='ui centered grid'>
			<?php if(isset($items)) { ?>
			<?php foreach($items as $prod){ ?>
			<div class='sixteen wide mobile four wide computer five wide tablet column'>
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
	    				<div class='sixteen wide column' style='line-height: 1.5em;'>
	    					<div class='ui grid'>
	    						<div class='eight wide column'>
	    							<span style='font-family: "Courier New"; color: black; font-size: 1.4em;'>
			    						P <?php echo $prod->product_price; ?>		
			    					</span>
	    						</div>
	    						<div class='eight wide column'>
	    							<span style='font-style: italic; font-family: "Roboto Light"; font-size: 1.2em;'> x <?php echo $prod->order_item_qty; ?></span>
	    						</div>
	    					</div>
	    					<div class='ui divider'></div>
	    					<span style='font-style: italic; font-family: "Roboto Light"; font-size: 1.2em;'>Subtotal: P<?php echo $prod->order_item_subtotal; ?></span><br>
	    				</div>
	    			</div>
		        </div>
		    </div>
			<?php } ?>
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
	    		<a href='<?php echo site_url()?>/CProduct/viewQRCode?>'><button style='background: #800000; color: white;' class='ui circular fluid button' type='submit'><i class='check icon'></i>Get QR</button></a>
	    	</div></form>
	    	<div class='six wide computer tablet only column'></div>
    		<div class='computer tablet only column'></div>
    	</div>
    </div>
</div>



</body>
</html>