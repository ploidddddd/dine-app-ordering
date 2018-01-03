<div class='ui grid'>
	<div class='row'>
		<div class='eight wide center aligned middle aligned column'>
			<?php if(isset($prod_cat)) { ?>
				<h1 class='ui middle aligned brown header'><?php echo $prod_cat; ?></h1>	
			<?php } ?>
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
	<div class='column'></div>
	<div class='fourteen wide column'>
		<div class='ui four stackable centered cards'>
			<?php if(isset($products)) { ?>
				<?php foreach($products as $prod) { ?>
		        	<a class='ui small card' href='<?php echo site_url()?>/CProduct/viewProduct/<?php echo $prod->product_id; ?>'>
			            <div class='center align content'>
			            	<center><img class='ui small image' src='<?php echo base_url($prod->product_image)?>'></center>
			            	<div class='ui hidden divider'></div>
			                <div class='header'>
			                    <?php echo $prod->product_name; ?>
			                </div>
			                <div class='description'>
			                    <p>Price : P&nbsp <?php echo $prod->product_price; ?></p>
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
		</div> <!--four cards -->
	</div> <!-- column -->
	<div class='column'></div>

</div>



</body>
</html>