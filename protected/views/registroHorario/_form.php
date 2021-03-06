<?php
/* @var $this RegistroHorarioController */
/* @var $model Horario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'horario-form',
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
		<?php echo $form->labelEx($model,'hora_inicio'); ?>
		<?php echo $form->textField($model,'hora_inicio',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'hora_inicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_fin'); ?>
		<?php echo $form->textField($model,'hora_fin',array('size'=>5,'maxlength'=>5)); ?>
		<?php echo $form->error($model,'hora_fin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dia'); ?>
		<?php echo $form->textField($model,'dia',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dia'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->