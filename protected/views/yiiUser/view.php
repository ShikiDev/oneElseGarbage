<?php
/* @var $this YiiUserController */
/* @var $model YiiUser */

$this->breadcrumbs=array(
	'Yii Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List YiiUser', 'url'=>array('index')),
	array('label'=>'Create YiiUser', 'url'=>array('create')),
	array('label'=>'Update YiiUser', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete YiiUser', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage YiiUser', 'url'=>array('admin')),
);
?>

<h1>View YiiUser #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'login',
		'password',
		'email',
	),
)); ?>
