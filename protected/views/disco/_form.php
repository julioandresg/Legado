<?php
/* @var $this DiscoController */
/* @var $model Disco */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'disco-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_banda'); ?>
		<?php echo $form->textField($model,'id_banda'); ?>
		<?php echo $form->error($model,'id_banda'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'portada'); ?>
		<?php echo $form->textField($model,'portada'); ?>
		<?php echo $form->error($model,'portada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contraportada'); ?>
		<?php echo $form->textField($model,'contraportada'); ?>
		<?php echo $form->error($model,'contraportada'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enlace_descarga'); ?>
		<?php echo $form->textField($model,'enlace_descarga',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'enlace_descarga'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->