<?php
/* @var $this BandaController */
/* @var $model Banda */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<!--<div class="row">
		<?php echo $form->label($model,'id_banda'); ?>
		<?php echo $form->textField($model,'id_banda'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->label($model,'logo'); ?>
		<?php echo $form->textField($model,'logo'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'representante'); ?>
		<?php echo $form->dropDownList($model, 'representante', CHtml::listData(Musico::model()->findAll(), 'id','nombre')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'correo'); ?>
		<?php echo $form->textField($model,'correo',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'genero'); ?>
		<?php echo $form->textField($model,'genero',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'website'); ?>
		<?php echo $form->textField($model,'website',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fanpage'); ?>
		<?php echo $form->textField($model,'fanpage',array('size'=>60,'maxlength'=>2100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'instagram'); ?>
		<?php echo $form->textField($model,'instagram',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'youtube'); ?>
		<?php echo $form->textField($model,'youtube',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<!--<div class="row">
		<?php echo $form->label($model,'eventos'); ?>
		<?php echo $form->textField($model,'eventos',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'historia'); ?>
		<?php echo $form->textField($model,'historia',array('size'=>60,'maxlength'=>1000)); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'spotify'); ?>
		<?php echo $form->textField($model,'spotify',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'itunes'); ?>
		<?php echo $form->textField($model,'itunes',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soundcloud'); ?>
		<?php echo $form->textField($model,'soundcloud',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->