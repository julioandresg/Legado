<?php
/* @var $this DiscoController */
/* @var $model Disco */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_disco'); ?>
		<?php echo $form->textField($model,'id_disco'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_banda'); ?>
		<?php echo $form->textField($model,'id_banda'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'portada'); ?>
		<?php echo $form->textField($model,'portada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'contraportada'); ?>
		<?php echo $form->textField($model,'contraportada'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enlace_descarga'); ?>
		<?php echo $form->textField($model,'enlace_descarga',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->