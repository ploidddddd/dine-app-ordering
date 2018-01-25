<div class="pusher">
    <div class="ui grid">
        <div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div>
        <div class="row">
            <div class="two wide column"></div>
            <div class="twelve wide center aligned middle black aligned column banner-bg">
                <h1 class="ui header banner-name-dsk banner-name-tb banner-name-mb">
                    <?php if(isset($prod_cat)) { ?>
                        <?php echo $prod_cat; ?>  
                </h1>
                <div class="ui massive breadcrumb lbl-header" id="lbl-header">
                    <a href="<?php echo site_url()?>home" class="section" >HOME</a>
                    <div class="divider" style="color: white;">/</div>
                    <a href="<?php echo site_url()?>menu" class="section lbl-header" >MENU</a>
                    <div class="divider" style="color: white;">/</div>
                    <div class="active section lbl-header"><?php echo $prod_cat; ?></div>
                </div>
                    <?php } ?>
            </div>
            <div class="two wide column"></div>
        </div>
        <div class="row">
            <div class="two wide column"></div>
            <div class="twelve wide column">
                <div class="ui left aligned middle aligned grid">
                    <div class="sixteen wide left aligned column ">
                        <a href="<?php echo site_url()?>menu" class="header-breadcrumb"></i>Back to menu</a>
                    </div>  
                    <div class="sixteen wide column">
                    <?php if($this->session->flashdata('response')){ ?>
                        <div class="ui positive message">
                            <i class="close icon"></i>
                                <div class="header">
                                    Your process was successful.
                                </div>
                            <p><?php echo $this->session->flashdata('response');?></p>
                        </div>
                    <?php } ?>
                    </div>
                    <?php if(isset($products)) { ?>
					<?php foreach($products as $prod) { ?>
						<div class="five wide computer eight wide tablet sixteen wide mobile center aligned middle aligned column">
							<div class="ui segment" style="height:100%;">
								<div class="ui centered grid">
									
                                    <!-- computer -->
                                    
                                    <div class="sixteen wide computer only center aligned middle aligned column">
										<img class='ui centered medium image' src='<?php echo base_url($prod->product_image)?>'>
                                    </div>
                                    

                                    
                                    <div class="sixteen wide computer only left aligned column">
										<p class="prodName"><?php echo $prod->product_name; ?></p>
										<p class="prodDesc"><?php echo $prod->product_description; ?></p><br>
										<p class="prodPrice">P <?php echo $prod->product_price; ?>.00</p>
                                        <input type="hidden" id="prod_id" value="<?php echo $prod->product_id; ?>">
                                        <input type="hidden" id="prod_price" value="<?php echo $prod->product_price; ?>">
                                        <input type="hidden" id="prod_category" value="<?php echo $prod->product_category; ?>">
                                        <div class="ui "></div>
										<a class='openAdd' data-id='<?php echo $prod->product_id; ?>'><button class='ui circular fluid button' style='background: #800000; color: white;'><i class='plus icon' ></i><span class="addToCart">Add to tray</span></button></a>
                                    </div>
                                    
                                    <!-- tablet-->
                                    <div class="sixteen wide tablet only middle aligned column">
										<img class='ui centered small image' src='<?php echo base_url($prod->product_image)?>'>
                                    </div>
                                    <div class="two wide tablet only column"></div>
                                    <div class="twelve wide tablet only left aligned column">
										<p class="prodName"><?php echo $prod->product_name; ?></p>
										<p class="prodDesc"><?php echo $prod->product_description; ?></p><br>
										<p class="prodPrice">P <?php echo $prod->product_price; ?>.00</p>
                                        <input type="hidden" id="prod_id" value="<?php echo $prod->product_id; ?>">
                                        <input type="hidden" id="prod_price" value="<?php echo $prod->product_price; ?>">
                                         <input type="hidden" id="prod_category" value="<?php echo $prod->product_category; ?>">
										<a class='openAdd' data-id='<?php echo $prod->product_id; ?>'><button class='ui circular fluid button' style='background: #800000; color: white;'><i class='plus icon' ></i><span class="addToCart">Add to tray</span></button></a>
                                    </div>
                                    <div class="two wide tablet only column"></div>
                                    <!-- mobile-->
                                    <div class="sixteen wide mobile only column">
                                        <img class='ui centered small image' src='<?php echo base_url($prod->product_image)?>'>
                                    </div>
                                    <div class="two wide mobile only column"></div>
									<div class="twelve wide mobile only left aligned column">
										<p class="prodName"><?php echo $prod->product_name; ?></p>
										<p class="prodDesc"><?php echo $prod->product_description; ?></p><br>
										<p class="prodPrice">P <?php echo $prod->product_price; ?>.00</p>
                                        <input type="hidden" id="prod_id" value="<?php echo $prod->product_id; ?>">
                                        <input type="hidden" id="prod_price<?php echo $prod->product_id; ?>" value="<?php echo $prod->product_price; ?>">
                                         <input type="hidden" id="prod_category" value="<?php echo $prod->product_category; ?>">
										<a class='openAdd' data-id='<?php echo $prod->product_id; ?>'><button class='ui circular fluid button' style='background: #800000; color: white;'><i class='plus icon' ></i><span class="addToCart">Add to tray</span></button></a>
                                    </div>
                                    <div class="two wide mobile only column"></div>
								</div>
							</div>
						</div>
					<?php }?>
                </div>
                                <!-- pagination -->
                <!-- computer tablet -->
                <div class='ui computer tablet only two column grid'>
                    <div class='middle aligned column'>
                        Showing page <?php echo $page ?> of <?php echo $totalpage ?> pages.
                    </div>
                    <div class='right aligned column'>
                        <div class='ui pagination menu'>
                        <a class='previous item action' href = '<?php echo site_url()?>menu/category/<?php if($page !=1){$ppage = $page-1;} echo $prod_cat."/".$ppage?>'>Previous</a>
                           <?php 
                            for($n=1; $n<=$totalpage; $n++){
                                echo "<a id='page".$n."' class='page item' href='".base_url()."menu/category/".$prod_cat."/".$n."'>".$n."</a>";
                            }
                            ?>
                            <a class='next item action' href = '<?php echo site_url()?>menu/category/<?php if($page != $totalpage){$npage = $page+1;} echo $prod_cat."/".$npage?>'>Next</a>
                        </div> <!-- pagination -->
                    </div>
                </div> <!-- two column row -->
                <!-- mobile -->
                <div class="ui mobile only grid">
                    <div class="sixteen wide center aligned middle aligned column">
                       Showing page <?php echo $page ?> of <?php echo $totalpage ?> pages.
                    </div>
                    <div class="sixteen wide center aligned middle aligned column">
                        <div class='ui small pagination menu'>
                            <a class='previous item action' type='button' href = '<?php echo site_url()?>menu/category/<?php if($page !=1){$ppage = $page-1;} echo $prod_cat."/".$ppage?>'><i class="caret left icon"></i></a>
                            <?php 
                            for($n=1; $n<=$totalpage; $n++){
                               echo "<a id='page".$n."' class='page item' href='".base_url()."menu/category/".$prod_cat."/".$n."'>".$n."</a>";
                            }
                            ?>
                            <a class='next item action' href = '<?php echo site_url()?>menu/category/<?php if($page !=1){$npage = $page-1;} echo $prod_cat."/".$npage?>'><i class="caret right icon"></i></a>
                        </div> <!-- pagination -->
                    </div>
                </div>
                <?php 
                    }else{
                        echo "
                            <div class='row'></div><div class='row'></div><div class='row'></div><div class='row'></div>
                            <div class='sixteen wide center aligned middle aligned column nocart'>
                                <h1 class='ui header' style='font-family:".'BarlowCondensed-Light'.";'><i class='warning circle icon'></i>Oops, there seems to be no products under this category or all products are in your cart already.</h1>
                            </div>
                            <div class='row'></div><div class='row'></div><div class='row'></div>
                            <div class='row'></div><div class='row'></div><div class='row'></div>
                            <div class='row'></div><div class='row'></div><div class='row'></div>
                            
                        ";
                    } ?>
            </div>
            <div class="two wide column"></div>
        </div>
        <div class="row"></div>
        <div class="row"></div>
    </div>
</div>
<div class="ui inverted black vertical footer center aligned segment">
    <p class="footer-label-dsk footer-label-tb footer-label-mb">&copy 2017 DINE | Mameng's Seafood & BBQ Hauz. All Rights Reserved.</p>
</div>



<div class="ui mini modal" id="enterQty">
    <div class="header">
        Quantity
    </div>
    <div class="content">
        <div class="description">
          <center>
            <form class='ui form' id='form' method='POST' action='<?php echo site_url()?>tray/addProduct'>
                
                <div class='ui  basic left attached icon button minus' id='minus'>
                    <i class=' minus icon '></i>
                </div>
                
                <div class='ui disabled input' style='max-width: 50px;'>
                    <input type='hidden' value='0' name='modprod_id' id='modprod_id'>
                    <input type='hidden' value='0' name='modprod_price' id="modprod_price">
                    <input type='hidden' value='0' name='modprod_category' id="modprod_category">
                    <input style='text-align:center; ' value='1' id='modqty' name='modqty' readonly>
                </div>
                
                <div class='ui basic right attached icon button plus' id='plus'>
                    <i class='plus icon '></i>
                </div>
            
          </center>
        </div>
    </div>
    <div class="actions">
        <div class="ui cancel button" style="font-family: 'sf_cartoonist_handregular'; font-size: 1.2em;">Cancel</div>
        <button class="ui submit button tray-submit" type="submit" style="background: #800000; font-family: 'sf_cartoonist_handregular'; font-size: 1.2em; color: white;">Add to tray</button>
    </div>
    </form>
</div>
</body>
</html>


<script>
    $(document).ready(function(){
        $('.openAdd').click(function(){
            var id = $(this).data("id");
            $('#enterQty').modal('show');
            $('#modprod_id').val(id);
            $('#modprod_price').val($('#prod_price'+id).val());
            $('#modprod_category').val($('#prod_category').val());

        }); 
        $('.confirmRemove').click(function(){
            $('#order_item_id').val($(this).data("id"));
            $('#removeItem').modal('show');

        });
        var value = 0 ;
        $(document).on('click','#plus',function() {
            var get = parseInt($('#modqty').val());
            if (get <= 99) {
                get += 1;
                $('#modqty').val(get); 
                $("#cButton").removeClass("disabled");
            }
        });
       

        $(document).on('click','#minus',function() {
            if($('#modqty').val() > 1){
                var get = $('#modqty').val();
                get -= 1;
                $('#modqty').val(get); 
            }
            
        });

        $('.ui.modal').modal('setting', 'closable', false);
    });

    $(document).ready(function(){
        $('.message .close').on('click', function() {
            $(this).closest('.message').transition('fade');
        });

    });

    $(document).ready(function(){
        // alert(<?php echo $page; ?>);
        <?php if($page != 1){?>
            $('#page1').addClass('active');
        <?php } ?>
        <?php if(isset($script)){ 
            echo $script;
        } ?>

        <?php if($totalpage == 1){ ?>
            $('.action').addClass('disabled');            
        <?php } ?>
            
        <?php if($page == $totalpage){ ?>
            $('.next').addClass('disabled');           
        <?php } ?>

        <?php if($page == 1){ ?>
            $('.previous').addClass('disabled');          
        <?php } ?>

        $('.disabled').click(function(e){
            e.preventDefault();
        })
    });
</script>
