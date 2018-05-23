<?php
/* @var $this SeasonController */
/* @var $model Season */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'season-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
));

 ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'season'); ?>
		<?php echo $form->textField($model,'season',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'season'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'begin'); ?>
		<?php echo $form->dateField($model,'begin'); ?>
		<?php echo $form->error($model,'begin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end'); ?>
		<?php echo $form->dateField($model,'end'); ?>
		<?php echo $form->error($model,'end'); ?>
	</div>

    <div class="row">
        <?php echo $form->labelEx($model,'id_hotel'); ?>
        <?php echo $form->dropDownList($model,'id_hotel',CHtml::listData($list,'id','hotel_name')); ?>
        <?php echo $form->error($model,'id_hotel'); ?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->