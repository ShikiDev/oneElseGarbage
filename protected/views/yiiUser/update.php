<?php
/* @var $this YiiUserController */
/* @var $model YiiUser */

$this->breadcrumbs=array(
	'Yii Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List YiiUser', 'url'=>array('index')),
	array('label'=>'Create YiiUser', 'url'=>array('create')),
	array('label'=>'View YiiUser', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage YiiUser', 'url'=>array('admin')),
);
?>

<h1>Update YiiUser <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>