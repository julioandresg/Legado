<?php
/* @var $this DiscoController */
/* @var $model Disco */

$this->breadcrumbs=array(
	'Discos'=>array('index'),
	$model->id_disco,
);

$this->menu=array(
	array('label'=>'List Disco', 'url'=>array('index')),
	array('label'=>'Create Disco', 'url'=>array('create')),
	array('label'=>'Update Disco', 'url'=>array('update', 'id'=>$model->id_disco)),
	array('label'=>'Delete Disco', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_disco),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Disco', 'url'=>array('admin')),
);
?>

<h1>View Disco #<?php echo $model->id_disco; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_disco',
		'id_banda',
		'nombre',
		'portada',
		'contraportada',
		'enlace_descarga',
	),
)); ?>
