<?php
/* @var $this CancionesController */
/* @var $data Canciones */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cancion')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cancion), array('view', 'id'=>$data->id_cancion)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_disco')); ?>:</b>
	<?php echo CHtml::encode($data->id_disco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_pista')); ?>:</b>
	<?php echo CHtml::encode($data->numero_pista); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cancion')); ?>:</b>
	<?php echo CHtml::encode($data->cancion); ?>
	<br />


</div>