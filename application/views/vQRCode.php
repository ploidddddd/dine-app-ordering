<!DOCTYPE html>
<html>
<head>
    <title>Dine-Ordering Module</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css")?>">
    <link rel='stylesheet' href='<?php echo base_url("assets/semantic/semantic.min.css")?>'>
    <script src='<?php echo base_url("assets/jquery.min.js")?>'></script>
    <script src='<?php echo base_url("assets/semantic/semantic.min.js")?>'></script>
</head>
<body>

<div class='ui fixed inverted menu ' style='background-color: #800000 !important;'>
    <a class='borderless item'>DINE</a>
</div>

<div class='pusher'>
	<div class='ui attached segment'>
		<div class='ui hidden divider'></div>
		<div class='ui basic segment'>
	        <h1 class="ui brown dividing header">
	            <!-- <i class="dashboard icon"></i> -->
	            <div class="content">
		            Get QR Code
	              <!-- <div class="sub header">Shows the dashboard</div> -->
	            </div>
	        </h1> <!-- header --> 
	    </div> <!-- segment -->
	    <div class='ui grid'>
	    	<div class='sixteen wide mobile column'>
	    		<?php if(isset($img_url)){ ?>
	            	<img src='<?php echo base_url("assets/images/qr_image/".$img_url)?>' class='ui centered medium image'>
				<?php } ?>
	    	</div>
	    	<!-- computer/tablet -->
	    	<div class='four wide computer tablet only column'></div>
	    	<div class='eight wide computer tablet only center aligned middle aligned column'>
	    		<p style='font-family: "Roboto Light"; font-size: 1.5em;'>Reference Number: <strong style='font-size: 1.4em !important; font-family: "Sansation Light"; color: blue;'>00001</strong></p>
	    		<p style='font-family: "Roboto Light"; font-size: 1.5em; '>Proceed to the cashier. Present the QR Code and pay for the <br> exact amount. Your order will be processed in a moment. <center style='font-family: "Roboto Light"; font-size: 2em;'>Thank you for using Dine!</center></p>
	    	</div>
	    	<div class='four wide computer tablet only column'></div>

	    	<!-- mobile -->
	    	<div class='sixteen wide mobile only center aligned middle aligned column'>
	    		<p style='font-family: "Roboto Light"; font-size: 1.1em; '>Proceed to the cashier. Present the QR Code and pay for the exact amount. Your order will be processed in a moment. <center style='font-family: "Roboto Light"; font-size: 1.5em;'>Thank you for using Dine!</center></p>
	    	</div>

	    	
	    </div>
	</div>
	<div class='ui bottom attached segment'>
    	<div class='ui grid'>
    		<div class='row'>
	    		<div class='eight wide mobile only column'></div>
	    		<div class='six wide computer tablet only column'></div>
	    		<div class='eight wide mobile four wide tablet four wide computer column'>
	    			<a href='<?php echo site_url()?>/CInitialize/deleteSession'><button style='background: #800000; color: white;' class='ui circular fluid button' type='submit'><i class='check icon'></i>Done</button></a>
	    		</div>
	    		<div class='six wide computer tablet only column'></div>
	    	</div>
    	</div>
    </div>
</div>



</body>
</html>
