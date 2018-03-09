<?php
/* @var $this CancionesController */
/* @var $model Canciones */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'canciones-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_disco'); ?>
		<?php echo $form->textField($model,'id_disco'); ?>
		<?php echo $form->error($model,'id_disco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_pista'); ?>
		<?php echo $form->textField($model,'numero_pista'); ?>
		<?php echo $form->error($model,'numero_pista'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cancion'); ?>
		<?php echo $form->textField($model,'cancion'); ?>
		<?php echo $form->error($model,'cancion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->