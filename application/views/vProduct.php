<div class='ui grid'>
	<div class='row'>
		<div class='eight wide center aligned middle aligned column'>
			<h1 class='ui middle aligned brown header'>VIEW</h1>
			<div class='ui breadcrumb'>
				<i class='left arrow icon divider'></i>
				<a href='<?php echo site_url()?>/CProduct/viewMeals?>' class='section'>Back</a>
				
			</div>
		</div>
		<div class='eight wide center aligned middle aligned column'>
			<a href='<?php echo site_url()?>/CProduct/viewCart?>'><i class='big brown inbox icon cart-icon'></i></a>
		</div>
	</div>


	<!--  END OF MENU AND CART -->

	<!-- CONTENT -->
	<div class='row'>
		<div class='column'></div> 
		<div class='fourteen wide column'>
			<form class='ui form'>
		        <div class='ui centered small card'>       
		            <div class='content'>
		            	<img class='ui fluid image productSmallImage' id='smolimage' src='<?php echo base_url("assets/images/porksilog.jpg")?>'>
		            	<div class='ui hidden divider'></div>
		                <div class='header'>
		                    Porksilog
		                </div>
		                <div class='meta'>
		                    Meal with egg and pork. With drink.
		                </div>
		                <div class='description'>
		                    <p>Price (P): 70.00</p>
		                </div>
		                
		                <div class='ui hidden divider'></div>
		            </div>
		            <div class="ui bottom attached grid">
		            	<div class='row'>
		            		<div class='sixteen wide center aligned middle aligned column'>
			                    <button class='ui small brown icon button'>
			                        <i class=' minus icon '></i>
			                    </button>
			                    <div class='ui disabled input ' style='max-width:50px; padding-right:2px;'>
			                        <input style='text-align:center; ' value=0>
			                    </div>
			                    <button class='ui small brown icon button '>
			                        <i class='plus icon '></i>
			                    </button>	
							</div>
		            	</div>
						<div class='row'>
							<div class='sixteen wide center aligned middle aligned column'>
								<button class='ui fluid brown button'><i class='plus icon'></i>Add to cart</button>
							</div>
						</div>
				    </div>
		        </div> <!-- meal card -->

		        
		    </form>
		</div>
		<div class='column'></div>
	</div>
			




</div>



</body>
</html>