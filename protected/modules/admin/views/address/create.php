<?php
$this->breadcrumbs=array(
	'Address Office Group'=>array('index'),
	'Add',
);

$this->pageHeader=array(
	'icon'=>'fa fa-bank',
	'title'=>'Address Office Group',
	'subtitle'=>'Add Address Office Group',
);

$this->menu=array(
	array('label'=>'List Address Office Group', 'icon'=>'th-list','url'=>array('index')),
);
?>

<?php $this->widget('bootstrap.widgets.TbButtonGroup',array('buttons'=>$this->menu,)); ?><br/><br/>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>