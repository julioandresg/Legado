<?php
/* @var $this BandaController */
/* @var $model Banda */

$this->breadcrumbs=array(
	'Bandas'=>array('index'),
	$model->id_banda,
);

$this->menu=array(
	array('label'=>'List Banda', 'url'=>array('index')),
	array('label'=>'Create Banda', 'url'=>array('create')),
	array('label'=>'Update Banda', 'url'=>array('update', 'id'=>$model->id_banda)),
	array('label'=>'Delete Banda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_banda),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Banda', 'url'=>array('admin')),
);
?>

<h1>View Banda #<?php echo $model->id_banda; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_banda',
		'nombre',
		'logo',
		'representante',
		'telefono',
		'correo',
		'genero',
		'website',
		'fanpage',
		'instagram',
		'youtube',
		'eventos',
		'historia',
		'spotify',
		'itunes',
		'soundcloud',
	),
)); ?>
