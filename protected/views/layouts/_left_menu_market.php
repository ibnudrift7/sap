<?php if ($market_resource): ?>
<ul class="list-unstyled lefts_submenu_product">
	<?php foreach ($market_resource as $key => $value): ?>
	<li class="dropdown <?php if (isset($_GET['id']) && $_GET['id'] == $key): ?>active<?php endif ?>"><a href="<?php echo CHtml::normalizeUrl(array('/home/market_landing', 'id'=> $key, 'slug'=>Slug::Create($value['name_category']) )); ?>"><?php echo ucwords($value['name_category']) ?></a>
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
