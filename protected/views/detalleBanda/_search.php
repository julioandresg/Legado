<?php
/* @var $this DetalleBandaController */
/* @var $model DetalleBanda */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_det_banda'); ?>
		<?php echo $form->textField($model,'id_det_banda'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_musico'); ?>
		<?php echo $form->textField($model,'id_musico'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'id_banda'); ?>
		<?php echo $form->textField($model,'id_banda'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->