<!DOCTYPE html>
<html>
<head>
    <title>DINE | Mameng's Seafood & BBQ Hauz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css')?>">
    <link rel='stylesheet' href='<?php echo base_url("assets/semantic/semantic.min.css")?>'>

    <script src='<?php echo base_url("assets/jquery.min.js")?>'></script>
    <script src='<?php echo base_url("assets/semantic/semantic.min.js")?>'></script>
</head>
<body class='pushable'>
<div class="pusher">
    <div class="ui grid">
        <div class="row"></div>
        <div class="row">
            <div class="two wide column"></div>
            <div class="twelve wide center aligned middle black aligned column banner-bg">
                <h1 class="ui header banner-name-dsk banner-name-tb banner-name-mb">
                    QR CODE
                </h1>
                <div class="ui massive breadcrumb "></div>
            </div>
            <div class="two wide column"></div>
        </div>
        <div class="row">
            <div class="two wide column"></div>
            <div class="twelve wide column">
                <div class="ui center aligned middle aligned column grid">
                	<div class="column">
                		<img src='<?php echo base_url("assets/images/qr_image/".$img_url)?>' class='ui centered medium image'>
                		<p class="ref-no">REFERENCE NUMBER: <?php echo $ref_num; ?></p>
                		<p class="ref-info">Proceed to the cashier. Present the QR Code and pay for the exact amount. Your order will be processed in a moment.</p>
                		<div class="ui grid">
                			<div class="sixteen wide computer tablet only column">
                				<p class="ty-dsk">Thank you and please come again.</p>
                			</div>
                			<div class="sixteen wide mobile only column">
                				<p class="ty-mb">Thank you and please come again.</p>
                			</div>
                			<div class="row"></div>
                		</div>
                	</div>
                </div>
            </div> 
            <div class="two wide column"></div>
        </div> 
    </div>
</div>


