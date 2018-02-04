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
                <!-- computer/tablet -->
                <div class="ui computer tablet only two column grid">
                    <div class="center aligned middle aligned column">
                        <img src='<?php echo base_url("assets/images/qr_image/".$img_url)?>' class='ui centered medium image'>
                        <p class="ref-no">REFERENCE NUMBER: <?php echo $ref_num; ?></p>
                    </div>
                	<div class="left aligned middle aligned column">
                		<div class="ui success message">
                            <i class="check icon"></i> <span class="ref-info">Successfully created order</span>
                        </div>
                        <div class="ui info message">
                            <ul class="list ref-info">
                                <li>Proceed to the cashier. Present the QR Code and pay for the exact amount. </li>
                                <li>Your order will be processed in a moment.</li>
                                <li>Editing of orders can be done through the cashier.</li>
                            </ul>
                        </div>
                		<div class="ui warning message">
                            <i class="warning sign icon"></i> <span class="ref-info">Reminder: This QR Code will expire after 4 hours. Please complete the transaction within the given time.</span>
                        </div>
                	</div>
                </div>
                <!-- mobile -->
                <div class="ui mobile only two column grid">
                    <!-- <div class="three wide mobile only column"></div> -->
                    <div class="sixteen wide mobile only center aligned middle aligned column">
                        <img src='<?php echo base_url("assets/images/qr_image/".$img_url)?>' class='ui centered medium image'>
                        <p class="ref-no" sty>REFERENCE NUMBER: </p><span class="qrNum"><?php echo $ref_num; ?></span>
                    </div>
                    <!-- <div class="three wide mobile only column"></div> -->

                    <!-- <div class="three wide mobile only column"></div> -->
                    <div class="sixteen wide mobile only left aligned middle aligned column">
                        <div class="ui success message">
                            <i class="check icon"></i> <span class="ref-info">Successfully created order</span>
                        </div>
                        <div class="ui info message">
                            <ul class="list ref-info">
                                <li>Proceed to the cashier. Present the QR Code and pay for the exact amount. </li>
                                <li>Your order will be processed in a moment.</li>
                                <li>Editing of orders can be done through the cashier.</li>
                            </ul>
                        </div>
                        <div class="ui warning message">
                            <i class="warning sign icon"></i> <span class="ref-info">Reminder: This QR Code will expire after 4 hours. Please complete the transaction within the given time.</span>
                        </div>
                    </div>
                    <!-- <div class="three wide mobile only"></div> -->
                </div>
                <div class="ui grid"> 
                    <div class="row"></div>
                    <div class="eleven wide computer tablet only column"></div>
                    <div class="five wide computer tablet sixteen wide mobile center aligned column">
                        <a target="_blank" href='<?php echo base_url("assets/images/qr_image/".$img_url)?>' download='<?php echo $ref_num; ?>' class="ui labeled icon button" style="background: #800000; color: white;" id="save-as">
                            <i class="save icon"></i>
                                Save QR Code
                        </a>
                    </div>
                    <div class="five wide computer tablet sixteen wide mobile center aligned column">
                        <a href="<?php echo site_url()?>/done" ><button style="background: #800000; color: white;" class="ui circular fluid button"><i class="check icon"></i>DONE</button></a>
                        <!-- <a href="<?php echo site_url()?>/done"><button style="background: #800000; color: white;" class='ui circular fluid button'><i class='qrcode icon'></i>Generate QR</button></a> -->
                    </div>
                    <div class="six wide computer tablet only column"></div>
                </div>
            </div> 
            <div class="two wide column"></div>
        </div> 
        <div class="row"></div>
    </div>
</div>

<script>
  $(document).ready(function() {
        
    $( window ).on('beforeunload',function() {
        alert();
        return "Data will be lost if you leave the page, are you sure?";
    });
    // window.onbeforeunload = function() {
    //     return 'Data will be lost if you leave the page, are you sure?';
    // };

} );
</script>


