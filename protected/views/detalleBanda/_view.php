<?php
/* @var $this DetalleBandaController */
/* @var $data DetalleBanda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_det_banda')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_det_banda), array('view', 'id'=>$data->id_det_banda)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_musico')); ?>:</b>
	<?php echo CHtml::encode($data->id_musico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_banda')); ?>:</b>
	<?php echo CHtml::encode($data->id_banda); ?>
	<br />


</div>