<?php
/* @var $this CancionesController */
/* @var $model Canciones */

$this->breadcrumbs=array(
	'Canciones'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Canciones', 'url'=>array('index')),
	array('label'=>'Manage Canciones', 'url'=>array('admin')),
);
?>

<h1>Create Canciones</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>