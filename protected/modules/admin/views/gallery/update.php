<?php
$this->breadcrumbs=array(
	'Product Shortcut'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-tag',
	'title'=>'Product Shortcut',
	'subtitle'=>'Data Product Shortcut',
);

$this->menu=array(
	array('label'=>'List Product Shortcut', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Product Shortcut', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Product Shortcut', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php echo $this->renderPartial('_form',array('model'=>$model, 'modelDesc'=>$modelDesc, 'modelImage'=>$modelImage)); ?>
