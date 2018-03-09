<?php
/* @var $this CancionesController */
/* @var $model Canciones */

$this->breadcrumbs=array(
	'Canciones'=>array('index'),
	$model->id_cancion,
);

$this->menu=array(
	array('label'=>'List Canciones', 'url'=>array('index')),
	array('label'=>'Create Canciones', 'url'=>array('create')),
	array('label'=>'Update Canciones', 'url'=>array('update', 'id'=>$model->id_cancion)),
	array('label'=>'Delete Canciones', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_cancion),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Canciones', 'url'=>array('admin')),
);
?>

<h1>View Canciones #<?php echo $model->id_cancion; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_cancion',
		'id_disco',
		'numero_pista',
		'nombre',
		'cancion',
	),
)); ?>
