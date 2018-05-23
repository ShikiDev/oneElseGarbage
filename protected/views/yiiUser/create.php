<?php
/* @var $this YiiUserController */
/* @var $model YiiUser */

$this->breadcrumbs=array(
	'Yii Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List YiiUser', 'url'=>array('index')),
	array('label'=>'Manage YiiUser', 'url'=>array('admin')),
);
?>

<h1>Create YiiUser</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>