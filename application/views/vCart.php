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
	<div class='row'>
		<div class='column'></div> 
		<div class='fourteen wide column'>
			<form class='ui form'>
				<div class='ui four centered stackable cards'>

			        <div class='ui centered card'>       
			            <div class='content'>
			            	<img class='ui fluid image productSmallImage' src='<?php echo base_url("assets/images/sisig.jpg")?>'>
			            	<div class='ui hidden divider'></div>
			                <div class='header'>
			                    Pork Sisig
			                </div>
			                <div class='meta'>
			                    Meal with egg and pork. With drink.
			                </div>
			                <div class='description'>
	                    		<p>Price (P): 70.00</p>
	                    		<p>Qty: 3</p>
			                    <p><strong>Subtotal (P): 210.00</strong></p>
	                    		<div class='ui hidden divider'></div>
			                </div>
			                
			                <div class='ui hidden divider'></div>
			            </div>
			            <div class="ui bottom attached grid">
			            	<div class='row'></div>
			            	<div class='row'></div>
			            	<div class='row'>
			            		<div class='sixteen wide center aligned middle aligned column'>
				                    <button class='ui small brown icon button'>
				                        <i class=' minus icon '></i>
				                    </button>
				                    <div class='ui disabled input ' style='max-width:50px; padding-right:2px;'>
				                        <input style='text-align:center; ' value='0'>
				                    </div>
				                    <button class='ui small brown icon button '>
				                        <i class='plus icon '></i>
				                    </button>	
								</div>
			            	</div>
			            	<div class='row'>
			            		<div class='column'></div>
			            		<div class='seven wide column'>
									<button class='ui fluid black button'><i class='remove icon'></i>Remove</button>
			            		</div>
			            		<div class='seven wide column'>
			            			<button class='ui fluid brown button'><i class='pencil icon'></i>Update</button>
			            		</div>
			            		<div class='column'></div>
			            	</div>
			            	<div class='row'></div>
					    </div>
			        </div> <!-- meal card -->
			        


			    </div> <!--three cards -->
			</form>
		</div>
		<div class='column'></div>
	</div>
	<div class='row'>
		<div class='eight wide column'></div>
		<div class='eight wide center aligned middle aligned column'>
			<div class='description'>
		    	<p>TOTAL (P): 210.00</p>
		    </div>
		</div>
	</div>
	<div class='row'>
		<div class='column'></div>
		<div class='seven wide column'></div>
		<div class='seven wide column'>
			<a href='<?php echo site_url()?>/CProduct/viewCheckout?>'><button class='ui fluid brown button'><i class='check icon'></i>Proceed to checkout</button></a>
		</div>
		<div class='column'></div>
	</div>




</div>



</body>
</html>