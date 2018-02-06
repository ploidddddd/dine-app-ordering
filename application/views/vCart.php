<div class="pusher">
    <div class="ui grid">
        <div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div>
        <div class="row">
            <div class="two wide column"></div>
            <div class="twelve wide center aligned middle black aligned column banner-bg">
                <h1 class="ui header banner-name-dsk banner-name-tb banner-name-mb">
                    TRAY
                </h1>
                <div class="ui massive breadcrumb lbl-header" id="lbl-header">
                    <a href="<?php echo site_url()?>home" class="section" >HOME</a>
                    <div class="divider" style="color: white;">/</div>
                    <a href="<?php echo site_url()?>menu" class="section" >MENU</a>
                    <div class="divider" style="color: white;">/</div>
                    <div class="active section lbl-header">TRAY</div>
                </div>
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
                                    <?php echo $this->session->flashdata('response');?>
                                </div>
                            <!-- <p>If done click Checkout to submit order.</p> -->
                        </div>
                    <?php } ?>
                    </div>
                    <?php if(isset($items)) { ?>
					<?php foreach($items as $prod){ ?>
					<div class="five wide computer eight wide tablet sixteen wide mobile center aligned middle aligned column">
						<div class="ui segment">
							<div class="ui grid">
								<!-- computer -->

								<div class="five wide computer only middle aligned column">
									<img class='ui centered medium image' src='<?php echo base_url($prod->product_image)?>'>
								</div>
								<div class="eleven wide computer only left aligned column">
									<a class='confirmRemove' style='float: right; cursor: pointer;' data-id='<?php echo  $prod->order_item_id;?>' ><i class='large red remove icon'></i></a>
									<br><span class="prodName"><?php echo $prod->product_name; ?></span><br> <br>
									<span class="prodDesc"><?php echo $prod->product_description; ?></span><br><br>
									<span class="prodPrice">P <?php echo $prod->product_price; ?>.00</span><br><br>
									<span class="qty">Quantity: x <?php echo $prod->order_item_qty; ?></span><br>
									<span class="qty">Subtotal: P<?php echo $prod->order_item_subtotal; ?>.00</span>
									<p></p>
									<center><form class='' id='form' method='POST' action='<?php echo site_url()?>tray/updateProduct/<?php echo  $prod->order_item_id; ?>'>
										<input type='hidden' value='<?php echo $prod->product_price; ?>' name='prod_price'>

										<button class='ui  basic left attached icon button minus' id='minus' data-id='<?php echo $prod->product_id; ?>'>
											<i class=' minus icon '></i>
										</button>
										<input type='hidden' value='<?php echo $prod->order_item_id; ?>' id='od_id<?php echo $prod->product_id; ?>'>

					                    <div class='ui disabled input' style='max-width: 50px;'>
					                        <input style='text-align:center; '  value='<?php echo $prod->order_item_qty; ?>' id='qty<?php echo $prod->product_id; ?>' name='qty<?php echo $prod->order_item_id; ?>'>
					                    </div>

					                    <button class='ui basic right attached icon button plus' id='plus' data-id='<?php echo $prod->product_id; ?>'>
				                        	<i class='plus icon '></i>
				                    	</button>
				                    </form></center>
								</div>
								<!-- tablet -->
								<div class="sixteen wide tablet only column">
									<img class='ui centered small image' src='<?php echo base_url($prod->product_image)?>'>
								</div>
								<div class="two wide tablet only column"></div>
								<div class="twelve wide tablet only left aligned column">
									<a class='confirmRemove' style='float: right; cursor: pointer;' data-id='<?php echo  $prod->order_item_id;?>' ><i class='large red remove icon'></i></a>
									<br><span class="prodName"><?php echo $prod->product_name; ?></span><br> <br>
									<span class="prodDesc"><?php echo $prod->product_description; ?></span><br><br>
									<span class="prodPrice">P <?php echo $prod->product_price; ?>.00</span><br><br>
									<span class="qty">Quantity: x <?php echo $prod->order_item_qty; ?></span><br>
									<span class="qty">Subtotal: P<?php echo $prod->order_item_subtotal; ?>.00</span>
									<p></p>
									<center><form class='' id='form' method='POST' action='<?php echo site_url()?>tray/updateProduct/<?php echo  $prod->order_item_id; ?>'>
										<input type='hidden' value='<?php echo $prod->product_price; ?>' name='prod_price'>

										<button class='ui  basic left attached icon button minus' id='minus' data-id='<?php echo $prod->product_id; ?>'>
											<i class=' minus icon '></i>
										</button>
										<input type='hidden' value='<?php echo $prod->order_item_id; ?>' id='od_id<?php echo $prod->product_id; ?>'>

					                    <div class='ui disabled input' style='max-width: 50px;'>
					                        <input style='text-align:center; '  value='<?php echo $prod->order_item_qty; ?>' id='qty<?php echo $prod->product_id; ?>' name='qty<?php echo $prod->order_item_id; ?>'>
					                    </div>

					                    <button class='ui basic right attached icon button plus' id='plus' data-id='<?php echo $prod->product_id; ?>'>
				                        	<i class='plus icon '></i>
				                    	</button>
				                    </form></center>
								</div>
								<div class="two wide tablet only column"></div>

								<!-- mobile -->
								<div class="sixteen wide mobile only column">
									<img class='ui centered small image' src='<?php echo base_url($prod->product_image)?>'>
								</div>
								<div class="two wide mobile only column"></div>
								<div class="twelve wide mobile only left aligned column">
									<a class='confirmRemove' style='float: right; cursor: pointer;' data-id='<?php echo  $prod->order_item_id;?>' ><i class='large red remove icon'></i></a>
									<br><span class="prodName"><?php echo $prod->product_name; ?></span><br> <br>
									<span class="prodDesc"><?php echo $prod->product_description; ?></span><br><br>
									<span class="prodPrice">P <?php echo $prod->product_price; ?>.00</span><br><br>
									<span class="qty">Quantity: x <?php echo $prod->order_item_qty; ?></span><br>
									<span class="qty">Subtotal: P<?php echo $prod->order_item_subtotal; ?>.00</span>
									<p></p>
									<center><form class='' id='form1' method='POST' action='<?php echo site_url()?>tray/updateProduct/<?php echo  $prod->order_item_id; ?>'>
										<input type='hidden' value='<?php echo $prod->product_price; ?>' name='prod_pricem'>

										<button class='ui  basic left attached icon button minus' id='minusm' data-id='<?php echo $prod->product_id; ?>'>
											<i class=' minus icon '></i>
										</button>
										<input type='hidden' value='<?php echo $prod->order_item_id; ?>' id='od_idm<?php echo $prod->product_id; ?>'>

					                    <div class='ui disabled input' style='max-width: 50px;'>
					                        <input style='text-align:center; '  value='<?php echo $prod->order_item_qty; ?>' id='qtym<?php echo $prod->product_id; ?>' name='qtym<?php echo $prod->order_item_id; ?>'>
					                    </div>

					                    <button class='ui basic right attached icon button plus' id='plusm' data-id='<?php echo $prod->product_id; ?>'>
				                        	<i class='plus icon '></i>
				                    	</button>
				                    </form></center>
								</div>
								<div class="two wide mobile only column"></div>
							</div>
						</div>
					</div>
					<?php }?>
					<!-- computer -->
					<div class="row">
						<div class="eleven wide computer only column"></div>
						<div class="five wide computer only left aligned column">
							<?php if (isset($total)) {?>
								<p class="total-price">TOTAL: <?php echo $total; ?>.00</p>
							<?php } ?>
							<a href='<?php echo site_url()?>checkout'><button style='background: #800000; color: white;' class='ui circular fluid button'><i class='check icon'></i>Checkout</button></a>
						</div>
					</div>


					<!-- tablet -->
					<div class="eight wide tablet only column"></div>
					<div class="eight wide tablet only left aligned column">
						<?php if (isset($total)) {?>
							<p class="total-price">TOTAL: <?php echo $total; ?>.00</p>
						<?php } ?>
					</div>

					<div class="eight wide tablet only column"></div>
					<div class="eight wide tablet only left aligned column">
						<a href='<?php echo site_url()?>checkout'><button style='background: #800000; color: white;' class='ui circular fluid button'><i class='check icon'></i>Checkout</button></a>
					</div>
					<!-- mobile -->
					<!-- <div class="two wide mobile only column"></div> -->
					<div class="sixteen wide mobile only column">
						<?php if (isset($total)) {?>
							<p class="total-price">TOTAL: <?php echo $total; ?>.00</p>
						<?php } ?>
						<a href='<?php echo site_url()?>checkout'><button style='background: #800000; color: white;' class='ui circular fluid button'><i class='check icon'></i>Checkout</button></a>
					</div>
					<!-- <div class="two wide mobile only column"></div> -->
					<!-- <div class="six wide mobile only column"></div>
					<div class="ten wide mobile only left aligned column">
						<?php if (isset($total)) {?>
							<p class="total-price">TOTAL: <?php echo $total; ?>.00</p>
						<?php } ?>
					</div>
					<div class="six wide mobile only column"></div>
					<div class="ten wide mobile only left aligned column">
						<a href='<?php echo site_url()?>checkout'><button style='background: #800000; color: white;' class='ui circular fluid button'><i class='check icon'></i>Checkout</button></a>
					</div> -->
					<div class="row"></div>

					<?php
					}else{
						echo "
							<div class='row'></div><div class='row'></div>
							<div class='sixteen wide center aligned middle aligned column nocart'>
								<h1 class='ui header' style='font-family:".'BarlowCondensed-Light'.";'><i class='warning circle icon'></i>Your tray is empty.</h1>
							</div>
						";
					} ?>
                </div>
            </div>
            <div class="two wide column"></div>
        </div>
    </div>
</div>
<div class="ui inverted black vertical footer center aligned segment">
    <p class="footer-label-dsk footer-label-tb footer-label-mb">&copy 2017 DINE | Mameng's Seafood & BBQ Hauz. All Rights Reserved.</p>
</div>

<div class='ui mini modal' id='removeItem'>
  <div class='header'>Remove Item </div>
  <div class='content'>
	<form method='POST' action='<?php echo site_url()?>tray/removeProduct'>
	<input type='hidden' name='order_item_id' id='order_item_id' value=''>
    <p>Are you sure you want to remove this item?</p>
  </div>
  <div class='actions'>
  	<div class='ui gray cancel button' style="font-family: 'sf_cartoonist_handregular'; font-size: 1.2em;">
  		Cancel
  	</div>
  	<button class='ui cancel button' style="background-color: #800000; color: white; font-family: 'sf_cartoonist_handregular'; font-size: 1.2em;" type='submit'>
  		Remove
  	</button>
  </div>
  </form>
</div>
</body>
</html>


<script>
	$(document).ready(function(){
		$('.confirmRemove').click(function(){
			$('#order_item_id').val($(this).data("id"));
			$('#removeItem').modal('show');

		});
		var value = 0 ;
		$(document).on('click','#plus',function() {
			var id = $(this).data("id");
			var get = parseInt($('#qty'+id).val());
      		if (get <= 99) {
        		get += 1;
        		$('#qty'+id).val(get);
     		}
		});

		$(document).on('click','#minus',function(e) {
			var id = $(this).data("id");
			if($('#qty'+id).val() > 1){
				var get = $('#qty'+id).val();
				get -= 1;
				$('#qty'+id).val(get);
			}else{
				$('#order_item_id').val($('#od_id'+id).val());
				$('#removeItem').modal('show');
				e.preventDefault();
			}
		});

		$(document).on('click','#plusm',function() {
			var id = $(this).data("id");
			var get = parseInt($('#qtym'+id).val());
      		if (get <= 99) {
        		get += 1;
        		$('#qtym'+id).val(get);
     		}
		});

		$(document).on('click','#minusm',function(e) {
			var id = $(this).data("id");
			if($('#qtym'+id).val() > 1){
				var get = $('#qtym'+id).val();
				get -= 1;
				$('#qtym'+id).val(get);
			}else{
				$('#order_item_id').val($('#od_idm'+id).val());
				$('#removeItem').modal('show');
				e.preventDefault();
			}
		});

		$('.ui.modal').modal('setting', 'closable', false);
	});

	$(document).ready(function(){
        $('.message .close').on('click', function() {
            $(this).closest('.message').transition('fade');
        });
    });
</script>
