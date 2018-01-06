<!DOCTYPE html>
<html>
<head>
    <title>DINE | Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("assets/css/style.css")?>">
    <link rel='stylesheet' href='<?php echo base_url("assets/semantic/semantic.min.css")?>'>
    <script src='<?php echo base_url("assets/jquery.min.js")?>'></script>
    <script src='<?php echo base_url("assets/semantic/semantic.min.js")?>'></script>
</head>
<body class='pushable'>


<!-- sidebar -->
<div class='ui sidebar vertical menu left thin'>
    <a class='item' href='<?php echo site_url()?>/CProduct/viewProductsInCategory/RICE MEAL'>
         RICE MEAL
    </a>
    <a class='item' href='<?php echo site_url()?>/CProduct/viewProductsInCategory/SOUP'>
         SOUP
    </a>
    <a class='item' href='<?php echo site_url()?>/CProduct/viewProductsInCategory/MAIN COURSE'>
         MAIN COURSE
    </a>
    <a class='item' href='<?php echo site_url()?>/CProduct/viewProductsInCategory/DRINKS'>
         DRINKS
    </a>
    <a class='item' href='<?php echo site_url()?>/CProduct/viewProductsInCategory/EXTRAS'>
         EXTRAS
    </a>
</div>
<!-- end of sidebar -->


<!-- top menu -->
<div class='ui fixed inverted menu' style='background-color: #800000 !important;'>
    <a class="borderless item toggleMenu">
        <i class="sidebar icon"></i>
    </a>
    <a class='borderless item' href='<?php echo site_url()?>/CProduct/viewMenu'>DINE</a>
    <div class='right menu'>
        <a class='borderless item' href='<?php echo site_url()?>/CProduct/viewCart' ><img src='<?php echo base_url("assets/images/tray1.png")?>'></a>
    </div>
</div>
<!-- end of top menu -->


