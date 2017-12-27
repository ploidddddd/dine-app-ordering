<div class='ui grid'>
	<div class='row'>
		<div class='column'></div>
		<div class='fourteen wide column'>
			<h1 class='ui middle aligned brown header'>Your QR Code</h1>
		</div>
		<div class='column'></div>
	</div>


	<!--  END OF MENU AND CART -->

	<!-- CONTENT -->
	<div class='row'>
		<div class='column'></div> 
		<div class='fourteen wide column'>
			<form class='ui form'>
		        <div class='ui centered small card'>       
		            <img src='<?php echo base_url("assets/images/dummyqr.png")?>' class='ui fluid image'>
		        </div> <!-- meal card -->
			</form>

			<p></p>
		</div>
	</div>
	<div class='row'>
		<div class='column'></div>
		<div class='fourteen wide center aligned middle aligned column'>
			<h4 style='font-style: italic;'>Proceed to the cashier. Present the QR Code and pay for the exact amount. Your order will be processed in a moment. Thank you for using Dine!</h4>
		</div>
		<div class='column'></div>
	</div>
	<div class='row'>
		<div class='column'></div>
		<div class='seven wide column'></div>
		<div class='seven wide column'>
			<a href='<?php echo site_url()?>/CProduct/viewMenu?>'><button class='ui fluid brown button'><i class='check icon'></i>Finish</button></a>
		</div>
		<div class='column'></div>
	</div>




</div>



</body>
</html>