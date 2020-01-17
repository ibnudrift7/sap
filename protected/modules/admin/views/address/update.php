<?php
$this->breadcrumbs=array(
	'Address Office Group'=>array('index'),
	// $model->id=>array('view','id'=>$model->id),
	'Edit',
);

$this->pageHeader=array(
	'icon'=>'fa fa-bank',
	'title'=>'Address Office Group',
	'subtitle'=>'Edit Address Office Group',
);

$this->menu=array(
	array('label'=>'List Address Office Group', 'icon'=>'th-list','url'=>array('index')),
	array('label'=>'Add Address Office Group', 'icon'=>'plus-sign','url'=>array('create')),
	// array('label'=>'View Address Office Group', 'icon'=>'pencil','url'=>array('view','id'=>$model->id)),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>