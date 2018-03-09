<?php
/* @var $this CancionesController */
/* @var $model Canciones */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_cancion'); ?>
		<?php echo $form->textField($model,'id_cancion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_disco'); ?>
		<?php echo $form->textField($model,'id_disco'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_pista'); ?>
		<?php echo $form->textField($model,'numero_pista'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cancion'); ?>
		<?php echo $form->textField($model,'cancion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->