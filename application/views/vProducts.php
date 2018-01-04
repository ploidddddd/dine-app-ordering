<div class='pusher'>
	<div class='ui segment'>
		<div class='ui hidden segment'></div>
		<div class='ui basic segment'>
	        <h1 class="ui brown dividing header">
	            <!-- <i class="dashboard icon"></i> -->
	            <div class="content">
		            <?php if(isset($prod_cat)) { ?>
						<?php echo $prod_cat; ?>	
					<?php } ?>
	              <!-- <div class="sub header">Shows the dashboard</div> -->
	            </div>
	        </h1> <!-- header --> 
	    </div> <!-- segment --> 

	    <div class='ui centered grid'>
	    	<?php if(isset($products)) { ?>
				<?php foreach($products as $prod) { ?>
			    	<div class='sixteen wide mobile five wide computer eight wide tablet column'>	
		    			<div class='ui segment'>
			    			<div class='ui grid'>
			    				<div class='seven wide mobile column'>
			    					<img class='ui centered small image' src='<?php echo base_url($prod->product_image)?>'>
			    				</div>
			    				<div class='nine wide mobile middle aligned column'>
			    					<span style='font-family: "Roboto"; color: black; font-size: 1.2em;'>
			    						<?php echo $prod->product_name; ?>
			    					</span><br><br>
			    					<span style='font-family: "Courier New"; color: black; font-size: 1.4em;'>
			    						P <?php echo $prod->product_price; ?>		
			    					</span><br>
			    					<a href='<?php echo site_url()?>/CProduct/viewProduct/<?php echo $prod->product_id; ?>'><button class='ui circular fluid button' style='background: #800000; color: white;'><i class='unhide icon' ></i>View Item</button></a>
			    				</div>
			    			</div>
		    			</div>
			    	</div>
			    <?php } ?>
			<?php 
		}else{
			echo "
				<div class='sixteen wide center aligned middle aligned column'>
					<p style='font-style: italic; font-family: ".'Roboto Light'."; font-size: 1.3em;'><i class='circular info icon' style='color: white; background-color: #800000;'></i>There are no available products for this category.</p>
				</div>
				<div class='row'></div>
			";
		} ?>
	    </div>
	</div>
</div>


</body>
</html>