<?php
/* @var $this BandaController */
/* @var $data Banda */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_banda')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_banda), array('view', 'id'=>$data->id_banda)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('logo')); ?>:</b>
	<?php echo CHtml::encode($data->logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('representante')); ?>:</b>
	<?php echo CHtml::encode($data->representante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('correo')); ?>:</b>
	<?php echo CHtml::encode($data->correo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('genero')); ?>:</b>
	<?php echo CHtml::encode($data->genero); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('website')); ?>:</b>
	<?php echo CHtml::encode($data->website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fanpage')); ?>:</b>
	<?php echo CHtml::encode($data->fanpage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('instagram')); ?>:</b>
	<?php echo CHtml::encode($data->instagram); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('youtube')); ?>:</b>
	<?php echo CHtml::encode($data->youtube); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eventos')); ?>:</b>
	<?php echo CHtml::encode($data->eventos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('historia')); ?>:</b>
	<?php echo CHtml::encode($data->historia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('spotify')); ?>:</b>
	<?php echo CHtml::encode($data->spotify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('itunes')); ?>:</b>
	<?php echo CHtml::encode($data->itunes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('soundcloud')); ?>:</b>
	<?php echo CHtml::encode($data->soundcloud); ?>
	<br />

	*/ ?>

</div>