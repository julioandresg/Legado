<?php
/* @var $this BandaController */
/* @var $model Banda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'banda-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions' => array('enctype' => 'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<div class="col-md-12">
        <div class="col-md-5">
			<div class="row">
				<?php echo $form->labelEx($model,'nombre'); ?>
				<?php echo $form->textField($model,'nombre',array('size'=>30,'maxlength'=>30)); ?>
				<?php echo $form->error($model,'nombre'); ?>
			</div>
			
			<div class="row">
				<?php echo $form->labelEx($model,'logo'); ?>
				<?php echo CHtml::activeFileField($model,'logo'); ?>
				<?php echo $form->error($model,'logo'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'representante'); ?>
				<?php echo $form->textField($model,'representante',array('size'=>30,'maxlength'=>50)); ?>
				<?php echo $form->error($model,'representante'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'telefono'); ?>
				<?php echo $form->textField($model,'telefono'); ?>
				<?php echo $form->error($model,'telefono'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'correo'); ?>
				<?php echo $form->textField($model,'correo',array('size'=>50,'maxlength'=>50)); ?>
				<?php echo $form->error($model,'correo'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'genero'); ?>
				<?php echo $form->textField($model,'genero',array('size'=>50,'maxlength'=>50)); ?>
				<?php echo $form->error($model,'genero'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'website'); ?>
				<?php echo $form->textField($model,'website',array('size'=>50,'maxlength'=>200)); ?>
				<?php echo $form->error($model,'website'); ?>
			</div>
			<div class="row">
				<?php echo $form->labelEx($model,'eventos'); ?>
				<?php echo $form->textArea($model,'eventos',array('rows'=>5, 'cols'=>113,'maxlength'=>500)); ?>
				<?php echo $form->error($model,'eventos'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'historia'); ?>
				<?php echo $form->textArea($model,'historia',array('rows'=>5, 'cols'=>113,'maxlength'=>1000)); ?>
				<?php echo $form->error($model,'historia'); ?>
			</div>

		</div>
		<div class="col-md-2"></div>
	        <div class="col-md-5">
	        	<div class="row">
					<?php echo $form->labelEx($model,'fanpage'); ?>
					<?php echo $form->textField($model,'fanpage',array('size'=>50,'maxlength'=>200)); ?>
					<?php echo $form->error($model,'fanpage'); ?>
				</div>
			<div class="row">
				<?php echo $form->labelEx($model,'instagram'); ?>
				<?php echo $form->textField($model,'instagram',array('size'=>50,'maxlength'=>200)); ?>
				<?php echo $form->error($model,'instagram'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'youtube'); ?>
				<?php echo $form->textField($model,'youtube',array('size'=>50,'maxlength'=>200)); ?>
				<?php echo $form->error($model,'youtube'); ?>
			</div>

			

			<div class="row">
				<?php echo $form->labelEx($model,'spotify'); ?>
				<?php echo $form->textField($model,'spotify',array('size'=>50,'maxlength'=>100)); ?>
				<?php echo $form->error($model,'spotify'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'itunes'); ?>
				<?php echo $form->textField($model,'itunes',array('size'=>50,'maxlength'=>100)); ?>
				<?php echo $form->error($model,'itunes'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'soundcloud'); ?>
				<?php echo $form->textField($model,'soundcloud',array('size'=>50,'maxlength'=>100)); ?>
				<?php echo $form->error($model,'soundcloud'); ?>
			</div>

		</div>
		</div>
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->