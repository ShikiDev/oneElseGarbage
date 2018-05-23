<?php
/* @var $this YiiUserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Yii Users',
);

$this->menu=array(
	array('label'=>'Create YiiUser', 'url'=>array('create')),
	array('label'=>'Manage YiiUser', 'url'=>array('admin')),
);
?>

<h1>Yii Users</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
