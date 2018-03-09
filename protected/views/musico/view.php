<?php
/* @var $this MusicoController */
/* @var $model Musico */

$this->breadcrumbs=array(
	'Musicos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Musico', 'url'=>array('index')),
	array('label'=>'Create Musico', 'url'=>array('create')),
	array('label'=>'Update Musico', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Musico', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Musico', 'url'=>array('admin')),
);
?>

<h1>View Musico #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'apellido_paterno',
		'apellido_materno',
		'fecha_nacimiento',
		'run',
		'imagen',
		'telefono',
		'correo',
		'especialidad1',
		'especialidad2',
		'user',
		'pass',
		'pass2',
	),
)); ?>
