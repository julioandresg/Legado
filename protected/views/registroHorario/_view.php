<?php
/* @var $this RegistroHorarioController */
/* @var $data RegistroHorario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_r_h')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_r_h), array('view', 'id'=>$data->id_r_h)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_banda')); ?>:</b>
	<?php echo CHtml::encode($data->id_banda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_horario')); ?>:</b>
	<?php echo CHtml::encode($data->id_horario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />


</div>