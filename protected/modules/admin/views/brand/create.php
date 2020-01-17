<?php
$this->breadcrumbs=array(
	'Market'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-tags',
	'title'=>'Market',
	'subtitle'=>'Data Market',
);

$this->menu=array(
	array('label'=>'List Market', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php echo $this->renderPartial('_form', array('model'=>$model, 'modelDesc'=>$modelDesc)); ?>
