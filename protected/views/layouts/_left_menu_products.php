<?php 
        // $n_resource = DataProducts::nex_resource();
        // $kn_data = array(0, 1, 2, 3);
        $criteria = new CDbCriteria;
        $criteria->with = array('description');
        $criteria->addCondition('t.type = :type');
        $criteria->params[':type'] = 'category';
        $criteria->order = 'sort ASC';
        $Cat_products = PrdCategory::model()->findAll($criteria);
        ?>

<?php if (count($Cat_products) > 0): ?>
<ul class="list-unstyled lefts_submenu_product">
	<?php foreach ($Cat_products as $key => $value): ?>
	<li class="dropdown 
	<?php if ( (isset($_GET['parent']) && $_GET['parent'] == $value->id) OR
	 (!isset($_GET['parent']) and $value->id == $_GET['id'])): ?>active<?php endif ?>">
	 <a href="<?php echo CHtml::normalizeUrl(array('/home/product_landing', 'id'=> $value->id, 'slug'=>Slug::Create($value->description->name) )); ?>">
	 	<?php echo ucwords($value->description->name) ?></a>

	 	<?php 
        // Get products by category
        $criteria2 = new CDbCriteria;
        $criteria2->with = array('description', 'categories');
        $criteria2->addCondition('categories.category_id = :category_id');
        $criteria2->params[':category_id'] = $value->id;
        $criteria2->order = 't.urutan ASC';
        $nlist_product = PrdProduct::model()->findAll($criteria2);
        ?>

		<?php if ( count( $nlist_product ) > 0): ?>
		<ul class="dropdown-menu py-2">
			<?php foreach ($nlist_product as $keys_child => $val_child): ?>
			<li <?php if (isset($_GET['parent']) && $_GET['id'] == $val_child->id): ?>class="active"<?php endif ?>>
				<a href="<?php echo CHtml::normalizeUrl(array('/home/product_range', 'parent'=> $value->id, 'id' => $val_child->id, 'slug'=>Slug::Create($val_child->description->name) )); ?>"><?php echo ucwords($val_child->description->name) ?></a>
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
