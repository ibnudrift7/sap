<?php 
$criteria = new CDbCriteria;
$criteria->with = array('description');
$criteria->addCondition('t.type = :type');
$criteria->params[':type'] = 'filtercat';
$criteria->order = 'sort ASC';
$Cat_markets = PrdCategory::model()->findAll($criteria);
?>

<?php if ( count($Cat_markets) > 0 ): ?>
<ul class="list-unstyled lefts_submenu_product">
	<?php foreach ($Cat_markets as $key => $value): ?>
	<li class="dropdown <?php if (isset($_GET['id']) && $_GET['id'] == $value->id): ?>active<?php endif ?>"><a href="<?php echo CHtml::normalizeUrl(array('/home/market_landing', 'id'=> $value->id, 'slug'=>Slug::Create($value->description->name) )); ?>"><?php echo ucwords($value->description->name) ?></a>
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
