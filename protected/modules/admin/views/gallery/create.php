<?php
$this->breadcrumbs=array(
	'Product Shortcut'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-tag',
	'title'=>'Product Shortcut',
	'subtitle'=>'Data Product Shortcut',
);

$this->menu=array(
	array('label'=>'List Product Shortcut', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php echo $this->renderPartial('_form', array('model'=>$model, 'modelDesc'=>$modelDesc, 'modelImage'=>$modelImage)); ?>
