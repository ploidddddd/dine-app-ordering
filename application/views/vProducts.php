<div class='ui grid'>
	<div class='row'>
		<div class='eight wide center aligned middle aligned column'>
			<a href='<?php echo site_url()?>/CProduct/viewMeals?>'><h1 class='ui middle aligned brown header'>MEALS</h1></a>
			<div class='ui breadcrumb'>
				<i class='left arrow icon divider'></i>
				<a href='<?php echo site_url()?>/CProduct/viewMenu' class='section'>Back to menu</a>
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
			<div class='ui four stackable cards'>
				<?php if(isset($products)) { ?>
				<?php foreach($products as $prod) { ?>
		        <a class='ui small card' href='<?php echo site_url()?>/CProduct/viewProduct'>
		            
		            <div class='content'>
		            	<img class='ui fluid image productSmallImage' id='smolimage' src='<?php echo base_url($prod->product_image)?>'>
		            	<div class='ui hidden divider'></div>
		                <div class='header'>
		                    <?php echo $prod->product_name; ?>
		                </div>

		                <div class='description'>
		                    <p>Price (P): <?php echo $prod->product_price; ?></p>
		                </div>
		                
		                <div class='ui hidden divider'></div>
		            </div>
		            <div class="ui bottom attached brown button">
				      <i class="unhide icon"></i>
				      View Item
				    </div>
		        </a> <!-- meal card -->
				<?php } ?>
				<?php } ?>
		        
		    </div> <!--three cards -->
		</div>
		<div class='column'></div>
	</div>
			




</div>



</body>
</html>