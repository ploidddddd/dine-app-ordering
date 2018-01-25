<div class="pusher">
    <div class="ui grid">
        <div class="row"></div><div class="row"></div><div class="row"></div><div class="row"></div>
        <div class="row">
            <div class="two wide column"></div>
            <div class="twelve wide center aligned middle black aligned column banner-bg">
                <h1 class="ui header banner-name-dsk banner-name-tb banner-name-mb">
                    CHECKOUT
                </h1>
                <div class="ui massive breadcrumb lbl-header" id="lbl-header">
                    <a href="<?php echo site_url()?>home" class="section" >HOME</a>
                    <div class="divider" style="color: white;">/</div>
                    <a href="<?php echo site_url()?>tray" class="section lbl-header" >TRAY</a>
                    <div class="divider" style="color: white;">/</div>
                    <div class="active section lbl-header">CHECKOUT</div>
                </div>
            </div>
            <div class="two wide column"></div>
        </div>
        <div class="row">
            <div class="two wide column"></div>
            <div class="twelve wide column">
                <div class="ui left aligned middle aligned grid">
                    <div class="sixteen wide left aligned column ">
                        <a href="<?php echo site_url()?>tray" class="header-breadcrumb"></i>Back to tray</a>
                    </div>
                    <?php if(isset($items)) { ?>
							<div class="two wide column"></div>
							<div class="twelve wide center aligned middle aligned column">
								<p class='chckoutHeader'>ORDERED ITEMS</p>
								<div class="ui divider"></div>
								<table class="ui very basic table">
									<tbody>
										<?php foreach($items as $prod){ ?>
										<tr>
											<td>
												<div class="ui grid">
													<div class="sixteen wide column">
														<p class="prodName"><?php echo $prod->product_name; ?></p>
													</div>
													<div class="row">
														<div class="eight wide middle aligned column">
															<p class="prodPrice">P <?php echo $prod->product_price; ?></p>
														</div>
														<div class="eight wide right aligned middle aligned column">
															<p class="qty">x <?php echo $prod->order_item_qty; ?></p>
														</div>
													</div>
												</div>
											</td>
										</tr>
										<?php }?>
									</tbody>
								</table>
								<div class="ui divider"></div>
							</div>
							<div class="two wide column"></div>

					<!-- computer -->
					<div class="eleven wide computer only column"></div>
					<div class="five wide computer only left aligned column">
						<?php if (isset($total)) {?>
							<p class="total-price">TOTAL: <?php echo $total; ?>.00</p>
						<?php } ?>
					</div>

					<div class="eleven wide computer only column"></div>
					<div class="five wide computer only left aligned column">
						<a href='<?php echo site_url()?>qrcode'><button style="background: #800000; color: white;" class='ui circular fluid button'><i class='qrcode icon'></i>Generate QR</button></a>
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
						<a href='<?php echo site_url()?>qrcode'><button style="background: #800000; color: white;" class='ui circular fluid button'><i class='qrcode icon'></i>Generate QR</button></a>
					</div>
					<!-- mobile -->
					<!-- <div class="six wide mobile only column"></div> -->
					<div class="sixteen wide mobile only left aligned column">
						<?php if (isset($total)) {?>
							<p class="total-price">TOTAL: <?php echo $total; ?>.00</p>
						<?php } ?>
						<a href='<?php echo site_url()?>qrcode'><button style="background: #800000; color: white;" class='ui circular fluid button'><i class='qrcode icon'></i>Generate QR</button></a>
					</div>
					<!-- <div class="six wide mobile only column"></div> -->
					<!-- <div class="ten wide mobile only left aligned column">
						<a href='<?php echo site_url()?>qrcode'><button style="background: #800000; color: white;" class='ui circular fluid button'><i class='qrcode icon'></i>Generate QR</button></a>
					</div> -->

					<?php }?>
                </div>
            </div> 
            <div class="two wide column"></div>
        </div> 
        <div class="row"></div>
        <div class="row"></div>
    </div>
</div>
