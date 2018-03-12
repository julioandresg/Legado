<?php
/* @var $this RegistroHorarioController */
/* @var $model RegistroHorario */

$this->breadcrumbs=array(
	'Registro Horarios'=>array('index'),
	$model->id_r_h,
);

$this->menu=array(
	array('label'=>'List RegistroHorario', 'url'=>array('index')),
	array('label'=>'Create RegistroHorario', 'url'=>array('create')),
	array('label'=>'Update RegistroHorario', 'url'=>array('update', 'id'=>$model->id_r_h)),
	array('label'=>'Delete RegistroHorario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_r_h),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage RegistroHorario', 'url'=>array('admin')),
);
?>

<h1>View RegistroHorario #<?php echo $model->id_r_h; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_r_h',
		'id_banda',
		'id_horario',
		'fecha',
	),
)); ?>
