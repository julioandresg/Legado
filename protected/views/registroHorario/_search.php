<?php
/* @var $this RegistroHorarioController */
/* @var $model RegistroHorario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_r_h'); ?>
		<?php echo $form->textField($model,'id_r_h'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_banda'); ?>
		<?php echo $form->textField($model,'id_banda'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_horario'); ?>
		<?php echo $form->textField($model,'id_horario'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->