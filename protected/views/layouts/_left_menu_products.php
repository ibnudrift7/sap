<?php if ($product_resource): ?>
<ul class="list-unstyled lefts_submenu_product">
	<?php foreach ($product_resource as $key => $value): ?>
	<li class="dropdown <?php if ( (isset($_GET['parent']) && $_GET['parent'] == $key) OR (!isset($_GET['parent']) and $key == $_GET['id'])): ?>active<?php endif ?>"><a href="<?php echo CHtml::normalizeUrl(array('/home/product_landing', 'id'=> $key, 'slug'=>Slug::Create($value['name_category']) )); ?>"><?php echo ucwords($value['name_category']) ?></a>
		<?php if ( count( $value['lists']) > 0): ?>
		<ul class="dropdown-menu py-2">
			<?php foreach ($value['lists'] as $keys_child => $val_child): ?>
			<li <?php if (isset($_GET['parent']) && $_GET['id'] == $keys_child): ?>class="active"<?php endif ?>>
				<a href="<?php echo CHtml::normalizeUrl(array('/home/product_range', 'parent'=> $key, 'id' => $keys_child, 'slug'=>Slug::Create($val_child['names']) )); ?>"><?php echo ucwords($val_child['names']) ?></a>
			</li>
			<?php endforeach ?>
		</ul>
		<?php endif ?>
	</li>
	<?php endforeach ?>
</ul>
<?php endif ?>

<style>
	ul.lefts_submenu_product li ul.dropdown-menu li.active a{
		font-weight: 700;
		color: #000;
	}
</style>
