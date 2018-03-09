<?php
/* @var $this ProfesorController */
/* @var $model Profesor */
/* @var $form CActiveForm */
?>
<script src="/js/jquery.rut.js"></script>
<script src="/js/notify.min.js"></script>

<?php

function getPuntosRun($run) {
    $runTmp = explode("-", $run);
    return number_format($runTmp[0], 0, "", ".") . '-' . $runTmp[1];
}
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'musico-form',
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
				<?php echo $form->textField($model,'nombre',array('size'=>25,'maxlength'=>25)); ?>
				<?php echo $form->error($model,'nombre'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'apellido_paterno'); ?>
				<?php echo $form->textField($model,'apellido_paterno',array('size'=>25,'maxlength'=>15)); ?>
				<?php echo $form->error($model,'apellido_paterno'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'apellido_materno'); ?>
				<?php echo $form->textField($model,'apellido_materno',array('size'=>25,'maxlength'=>15)); ?>
				<?php echo $form->error($model,'apellido_materno'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'fecha_nacimiento'); ?>
				<?php
		                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
		                    'model' => $model,
		                    'attribute' => 'fecha_nacimiento',
		                    'language' => 'es',
		                    'htmlOptions' => array(
		                        'size' => '10', // textField size
		                        'maxlength' => '10', // textField maxlength
		                    ),
		                    'options' => array(
		                        'showAnim' => 'fold',
		                        'dateFormat' => 'dd-mm-yy',
		                        'changeYear' => true,
		                        'yearRange' => '1950:2099',
		                        'showButtonPanel' => true,
		                    ),
		                ));
		                ?>
				<?php echo $form->error($model,'fecha_nacimiento'); ?>
			</div>

			<div class="row">
                <?php
                if (!$model->isNewRecord && $model->run != null) {
                    $model->run = getPuntosRun($model->run);
                }
                echo $form->labelEx($model, 'run');
                echo $form->textField($model, 'run', array('size' => 12, 'maxlength' => 12));
                echo $form->error($model, 'run');
                ?>
            </div>

			<div class="row">
				<?php echo $form->labelEx($model,'imagen'); ?>
				<?php echo CHtml::activeFileField($model,'imagen'); ?>
				<?php echo $form->error($model,'imagen'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'telefono'); ?>
				<?php echo $form->textField($model,'telefono', array('placeholder' => '912345678')); ?>
				<?php echo $form->error($model,'telefono'); ?>
			</div>
		</div>
        <div class="col-md-2"></div>

        <div class="col-md-5">
			<div class="row">
				<?php echo $form->labelEx($model,'correo'); ?>
				<?php echo $form->textField($model,'correo',array('size'=>30,'maxlength'=>30)); ?>
				<?php echo $form->error($model,'correo'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'especialidad1'); ?>
				<?php echo $form->dropDownList($model,'especialidad1', array('NO POSEE' => 'NO POSEE','VOCALISTA'=>"VOCALISTA",'PRIMERA GUITARRA'=>"PRIMERA GUITARRA",'SEGUNDA GUITARRA'=>"SEGUNDA GUITARRA",'BAJISTA'=>"BAJISTA",'BATERISTA'=>"BATERISTA",'TECLADISTA'=>"TECLADISTA")); ?>
				<?php echo $form->error($model,'especialidad1'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'especialidad2'); ?>
				<?php echo $form->dropDownList($model,'especialidad2',array('NO POSEE' => 'NO POSEE','VOCALISTA'=>"VOCALISTA",'PRIMERA GUITARRA'=>"PRIMERA GUITARRA",'SEGUNDA GUITARRA'=>"SEGUNDA GUITARRA",'BAJISTA'=>"BAJISTA",'BATERISTA'=>"BATERISTA",'TECLADISTA'=>"TECLADISTA")); ?>
				<?php echo $form->error($model,'especialidad2'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'user'); ?>
				<?php echo $form->textField($model,'user',array('size'=>15,'maxlength'=>15)); ?>
				<?php echo $form->error($model,'user'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'pass'); ?>
				<?php echo $form->passwordField($model,'pass',array('size'=>20,'maxlength'=>20)); ?>
				<?php echo $form->error($model,'pass'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'pass2'); ?>
				<?php echo $form->textField($model,'pass2',array('size'=>20,'maxlength'=>20)); ?>
				<?php echo $form->error($model,'pass2'); ?>
			</div>
		</div>
    </div>

			<div class="row buttons">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
			</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
	<script>$("input#Musico_run").rut({
        formatOn: 'keyup',
        validateOn: 'change'
    });
    $("input#Musico_run").rut().on('rutInvalido', function (e) {
        if ($(this).val() !== '') {
            document.getElementById('Musico_run').value ="";
            $('#Musico_run').notify("Rut Incorrecto")
        }
    });</script>