<?php
/* @var $this DiscoController */
/* @var $model Disco */

$this->breadcrumbs=array(
	'Discos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Disco', 'url'=>array('index')),
	array('label'=>'Manage Disco', 'url'=>array('admin')),
);
?>

<h1>Create Disco</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>