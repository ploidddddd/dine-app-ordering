!DOCTYPE html>
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
		<div class='ui hidden segment'></div>
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
	            	<img src='<?php echo base_url("assets/images/qr_image/".$img_url)?>' class='ui fluid image'>
				<?php } ?>
	    	</div>
	    	<div class='sixteen wide mobile column'>
	    		<p style='font-family: "Roboto Thin"; font-weight: 1em; '>Proceed to the cashier. Present the QR Code and pay for the exact amount. Your order will be processed in a moment. Thank you for using Dine!</p>
	    	</div>
	    </div>
	</div>
	<div class='ui bottom attached segment'>
    	<div class='ui grid'>
    		<div class='row'>
	    		<div class='eight wide mobile center aligned middle aligned column'>
	    		</div>
	    		<div class='eight wide mobile column'>
	    			<a href='<?php echo site_url()?>/CInitialize/deleteSession'><button style='background: #800000; color: white;' class='ui circular fluid button' type='submit'><i class='check icon'></i>Done</button></a>
	    		</div>
	    	</div>
    	</div>
    </div>
</div>



</body>
</html>
