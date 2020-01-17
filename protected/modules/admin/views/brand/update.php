<?php
$this->breadcrumbs=array(
	'Market'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-tags',
	'title'=>'Market',
	'subtitle'=>'Data Market',
);

$this->menu=array(
	array('label'=>'List Market', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Market', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Market', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?>
<?php echo $this->renderPartial('_form',array('model'=>$model, 'modelDesc'=>$modelDesc)); ?>
