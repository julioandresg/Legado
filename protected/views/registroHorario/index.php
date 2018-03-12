<?php
/* @var $this RegistroHorarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Registro Horarios',
);

$this->menu=array(
	array('label'=>'Create RegistroHorario', 'url'=>array('create')),
	array('label'=>'Manage RegistroHorario', 'url'=>array('admin')),
);
?>

<h1>Registro Horarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
