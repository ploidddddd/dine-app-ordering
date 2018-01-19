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
                    <?php if(isset($products)) { ?>
						<?php foreach($products as $prod) { ?>
							<div class="five wide computer eight wide tablet sixteen wide mobile center aligned middle aligned column">
								<div class="ui segment">
									<div class="ui grid">
										<div class="five wide middle aligned column">
											<img class='ui centered tiny image' src='<?php echo base_url($prod->product_image)?>'>
										</div>
										<div class="eleven wide left aligned column">
											<p class="prodName"><?php echo $prod->product_name; ?></p>
											<p class="prodDesc"><?php echo $prod->product_description; ?></p><br>
											<p class="prodPrice">P <?php echo $prod->product_price; ?>.00</p>
                                            <input type="hidden" id="prod_id" value="<?php echo $prod->product_id; ?>">
                                            <input type="hidden" id="prod_price" value="<?php echo $prod->product_price; ?>">
                                             <input type="hidden" id="prod_category" value="<?php echo $prod->product_category; ?>">
											<a class='openAdd' data-id='<?php echo $prod->product_id; ?>'><button class='ui circular fluid button' style='background: #800000; color: white;'><i class='plus icon' ></i><span class="addToCart">Add to tray</span></button></a>
										</div>
									</div>
								</div>
							</div>
						<?php }?>
                </div>
                                <!-- pagination -->
                <!-- computer tablet -->
                <div class='ui computer tablet only two column grid'>
                    <div class='middle aligned column'>
                        Showing 1 to 6 of depende entries.
                    </div>
                    <div class='right aligned column'>
                        <div class='ui pagination menu'>
                            <a class='previous item'>Previous</a>
                            <a class='active item'>1</a>
                            <a class='next item' >Next</a>
                        </div> <!-- pagination -->
                    </div>
                </div> <!-- two column row -->
                <!-- mobile -->
                <div class="ui mobile only grid">
                    <div class="sixteen wide center aligned middle aligned column">
                        Showing 1 to 6 of depende entries.
                    </div>
                    <div class="sixteen wide center aligned middle aligned column">
                        <div class='ui pagination menu'>
                            <a class='previous item'>Previous</a>
                            <a class='active item'>1</a>
                            <a class='next item' >Next</a>
                        </div> <!-- pagination -->
                    </div>
                </div>
                <?php 
                    }else{
                        echo "
                            <div class='sixteen wide center aligned middle aligned column'>
                                <p style='font-style: italic; font-family: ".'Roboto Light'."; font-size: 1.3em;'><i class='circular info icon' style='color: white; background-color: #800000;'></i>There are no available products for this category.</p>
                            </div>
                            <div class='row'></div>
                        ";
                    } ?>
            </div> 
            <div class="two wide column"></div>
            
        </div>

        
        <div class="row"></div>
        <div class="row"></div>
        <div class="row"></div>
    </div>
</div>

<div class="ui mini modal" id="enterQty">
    <div class="header">
        Quantity
    </div>
    <div class="content">
        <div class="description">
          <center>
            <form class='ui form' id='form' method='POST' action='<?php echo site_url()?>tray/addProduct'>
                <input type='hidden' value='0' name='modprod_id' id='modprod_id'>
                <input type='hidden' value='0' name='modprod_price' id="modprod_price">
                <input type='hidden' value='0' name='modprod_category' id="modprod_category">
                <div class='ui  basic left attached icon button minus' id='minus'>
                    <i class=' minus icon '></i>
                </div>
                
                <div class='ui disabled input' style='max-width: 50px;'>
                    <input style='text-align:center; '  value='1' id='qty' name='qty'>
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

<script>
    $(document).ready(function(){
        $('.openAdd').click(function(){
            var id = $(this).data("id");
            $('#enterQty').modal('show');
            $('#modprod_id').val($('#prod_id').val());
            $('#modprod_price').val($('#prod_price').val());
            $('#modprod_category').val($('#prod_category').val());
            // alert()

        }); 
        $('.confirmRemove').click(function(){
            $('#order_item_id').val($(this).data("id"));
            $('#removeItem').modal('show');

        });
        var value = 0 ;
        $(document).on('click','#plus',function() {
            var get = parseInt($('#qty').val());
            if (get <= 99) {
                get += 1;
                $('#qty').val(get); 
                $("#cButton").removeClass("disabled");
            }
        });

        $(document).on('click','#minus',function() {
            if($('#qty').val() >= 1){
                var get = $('#qty').val();
                get -= 1;
                $('#qty').val(get); 
            } 

            if($('#qty').val() == 0){
                $("#cButton").addClass("disabled");
            }
            
        });

        $('.ui.modal').modal('setting', 'closable', false);
    });
</script>
