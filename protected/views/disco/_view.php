<?php
/* @var $this DiscoController */
/* @var $data Disco */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_disco')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_disco), array('view', 'id'=>$data->id_disco)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_banda')); ?>:</b>
	<?php echo CHtml::encode($data->id_banda); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('portada')); ?>:</b>
	<?php echo CHtml::encode($data->portada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contraportada')); ?>:</b>
	<?php echo CHtml::encode($data->contraportada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enlace_descarga')); ?>:</b>
	<?php echo CHtml::encode($data->enlace_descarga); ?>
	<br />


</div>