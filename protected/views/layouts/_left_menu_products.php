<ul class="list-unstyled lefts_submenu_product">
	<li class="dropdown active"><a href="#">Packaging</a>
		<ul class="dropdown-menu py-2">
			<li <?php if ($_GET['name'] == 'Preforms'): ?>class="active"<?php endif ?>><a href="<?php echo CHtml::normalizeUrl(array('/home/productrange', 'name'=>'Preforms')); ?>">Preforms</a></li>
			<li><a href="#">Bottles</a></li>
			<li><a href="#">Closures</a></li>
			<li><a href="#">Drinking Cups</a></li>
			<li><a href="#">Lids</a></li>
			<li><a href="#">Containers</a></li>
		</ul>
	</li>
	<li><a href="#">Specialty Nonwoven</a></li>
	<li><a href="#">Housewares</a></li>
	<li><a href="#">Roofing</a></li>
	<li><a href="#">Our Brands</a></li>
</ul>

<style>
	ul.lefts_submenu_product li ul.dropdown-menu li.active a{
		font-weight: 700;
		color: #000;
	}
</style>
