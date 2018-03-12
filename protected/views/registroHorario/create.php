<?php
/* @var $this RegistroHorarioController */
/* @var $model RegistroHorario */

$this->breadcrumbs=array(
	'Registro Horarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List RegistroHorario', 'url'=>array('index')),
	array('label'=>'Manage RegistroHorario', 'url'=>array('admin')),
);
?>

<h1>Create RegistroHorario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>