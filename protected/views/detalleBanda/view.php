<?php
/* @var $this DetalleBandaController */
/* @var $model DetalleBanda */

$this->breadcrumbs=array(
	'Detalle Bandas'=>array('index'),
	$model->id_det_banda,
);

$this->menu=array(
	array('label'=>'List DetalleBanda', 'url'=>array('index')),
	array('label'=>'Create DetalleBanda', 'url'=>array('create')),
	array('label'=>'Update DetalleBanda', 'url'=>array('update', 'id'=>$model->id_det_banda)),
	array('label'=>'Delete DetalleBanda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_det_banda),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DetalleBanda', 'url'=>array('admin')),
);
?>

<h1>View DetalleBanda #<?php echo $model->id_det_banda; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_det_banda',
		'id_musico',
		'id_banda',
	),
)); ?>
