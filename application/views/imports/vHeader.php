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
<div class="ui grid">
    <!-- for desktop devices -->
    <div class="ui computer only column">
        <div class="ui fixed inverted menu orderingMenu">
            <div class="ui container">
                <a class='borderless item top-menu-items' href='<?php echo site_url()?>home'>HOME</a>
                <div class="ui hidden borderless item"></div>
                <a class='borderless item top-menu-items' href='<?php echo site_url()?>menu'>MENU</a>
                <div class="ui hidden borderless item"></div>
                <div class='right menu'>
                    <a class='borderless item top-menu-items' href='<?php echo site_url()?>tray' ><img class="ui mini image" src='<?php echo base_url("assets/images/tray1.png")?>'>&nbsp&nbspTRAY</a>
                </div>
            </div>
        </div>
    </div>
    <!-- for tablet devices -->
    <div class="ui tablet only column">
        <div class="ui fixed inverted menu orderingMenu">
            <div class="ui container">
                <a class='borderless item top-menu-items-tb' href='<?php echo site_url()?>home'>HOME</a>
                <div class="ui hidden borderless item"></div>
                <a class='borderless item top-menu-items-tb' href='<?php echo site_url()?>menu'>MENU</a>
                <div class="ui hidden borderless item"></div>
                <div class='right menu'>
                    <a class='borderless item top-menu-items-tb' href='<?php echo site_url()?>tray' ><img class="ui mini image" src='<?php echo base_url("assets/images/tray1.png")?>'>&nbsp&nbspTRAY</a>
                </div>
            </div>
        </div>
    </div>
    <!-- for mobile devices -->
    <div class="ui mobile only column">
        <div class="ui fixed inverted menu orderingMenu">
            <div class="ui container">
                <a id="toggleMenu" class="item top-menu-items-mb"><i class="large sidebar icon"></i></a>
                <!-- <a class='borderless item top-menu-items' href='<?php //echo site_url()?>home'>HOME</a>
                <div class="ui hidden borderless item"></div>
                <a class='borderless item top-menu-items' href='<?php //echo site_url()?>home'>MENU</a>
                <div class="ui hidden borderless item"></div> -->
                <div class='right menu'>
                    <a class='borderless item top-menu-items-mb' href='<?php echo site_url()?>tray' ><img class="ui mini image" src='<?php echo base_url("assets/images/tray1.png")?>'>&nbsp&nbspTRAY</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="ui basic modal" id="showMenu">
    <i class="huge close icon"></i>
    <div class="ui hidden divider"></div>
    <div class="ui hidden divider"></div>
    <div class="content">
        <div class="ui grid">
            <div class="ui sixteen wide column divider"></div>
            <div class="center aligned middle aligned sixteen wide column">
                <div class="ui hidden divider"></div>
                <a class="item modal-item" href="<?php echo site_url()?>/home"><p>HOME</p></a>
            </div>
            <div class="ui sixteen wide column divider"></div>
            <div class="center aligned middle aligned sixteen wide white column">
                <div class="ui hidden divider"></div>
                <a class="item modal-item" href="<?php echo site_url()?>/menu"><p>MENU</p></a>
            </div>
            <div class="ui sixteen wide column divider"></div>
        </div>
    </div>
</div>

<script>
$(document).ready(function(){
	$('#toggleMenu').click(function(){
		$('#showMenu').modal('show');
	}); 
	$('.ui.modal').modal('setting', 'closable', false);
});
</script>
