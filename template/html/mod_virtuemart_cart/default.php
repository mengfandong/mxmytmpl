<?php // no direct access
defined('_JEXEC') or die('Restricted access');

//dump ($cart,'mod cart');
// Ajax is displayed in vm_cart_products
// ALL THE DISPLAY IS Done by Ajax using "hiddencontainer" ?>

<!-- Virtuemart 2 Ajax Card -->
<div class="vmCartModule <?php echo $params->get('moduleclass_sfx'); ?>" id="vmCartModule<?php echo $params->get('moduleid_sfx'); ?>">
<?php
if ($show_product_list) {
	?><div class="cart-icon"><i class="fa fa-shopping-cart"></i></div>
    <div class="cart_dropdown_main">
	<div class="hiddencontainer" style=" display: none; ">
		<div class="vmcontainer">
			<div class="product_row">
				<span class="quantity"></span>&nbsp;x&nbsp;<span class="product_name"></span>

			<?php if ($show_price and $currencyDisplay->_priceConfig['salesPrice'][0]) { ?>
				<div class="subtotal_with_tax" style="float: right;"></div>
			<?php } ?>
			
			</div>
		</div>
	</div>
	<div class="vm_cart_products">
		<div class="vmcontainer">

		<?php
			foreach ($data->products as $product){
				?><div class="product_row">
					<span class="product_name"><?php echo  $product['product_name'] ?></span>
                    <span class="quantity"><?php echo  $product['quantity'] ?></span>&nbsp;&nbsp;x&nbsp;&nbsp;
				<?php if ($show_price and $currencyDisplay->_priceConfig['salesPrice'][0]) { ?>
				  <div class="subtotal_with_tax" style="float: right;"><?php echo $product['subtotal_with_tax'] ?></div>
				<?php } ?>
			

			</div>
		<?php }
		?>
		</div>
	</div>
<?php } ?>

	<div class="total">
		<div class="total_products"><?php echo  $data->totalProductTxt ?></div> <?php if ($data->totalProduct and $show_price and $currencyDisplay->_priceConfig['salesPrice'][0]) { ?>
		<?php echo $data->billTotal; ?>
		<?php } ?>
	</div>


<div class="show_cart">
	<?php if ($data->totalProduct) echo  $data->cart_show; ?>
</div>
<div style="clear:both;"></div>
	<div class="payments-signin-button" ></div>
<noscript>
<?php echo vmText::_('MOD_VIRTUEMART_CART_AJAX_CART_PLZ_JAVASCRIPT') ?>
</noscript>
</div>

</div>